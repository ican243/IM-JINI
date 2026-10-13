// 모바일 메뉴 열기/닫기
const toggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('#site-nav');

function setMenu(open) {
    nav.classList.toggle('is-open', open);
    toggle.setAttribute('aria-expanded', open);
    toggle.setAttribute('aria-label', open ? '메뉴 닫기' : '메뉴 열기');
}

toggle.addEventListener('click', () => {
    setMenu(!nav.classList.contains('is-open'));
});

// 아이폰 사파리는 이게 있어야 누르는 순간(:active) 스타일이 보인다
document.addEventListener('touchstart', () => {}, { passive: true });

// 메뉴 항목을 누르면 닫는다
nav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => setMenu(false));
});

// 헤더: 아래로 내리면 위로 숨고, 조금이라도 위로 올리면 다시 나타난다
// 맨 위 근처이거나 휴대폰 메뉴가 열려 있으면 항상 보인다
const header = document.querySelector('.site-header');
let lastY = window.scrollY;
let ticking = false;

function updateHeader() {
    const y = window.scrollY;
    const diff = y - lastY;

    if (y < 80 || nav.classList.contains('is-open')) {
        header.classList.remove('is-hidden');
    } else if (diff > 6) {
        header.classList.add('is-hidden');
    } else if (diff < -6) {
        header.classList.remove('is-hidden');
    }

    // 손떨림처럼 아주 조금 움직인 건 무시하고, 6px 넘게 움직였을 때만 기준을 옮긴다
    if (Math.abs(diff) > 6) {
        lastY = y;
    }
    ticking = false;
}

window.addEventListener('scroll', () => {
    if (!ticking) {
        requestAnimationFrame(updateHeader);
        ticking = true;
    }
}, { passive: true });

// 키보드(Tab)로 메뉴에 들어오면 숨어 있던 헤더를 보여준다
header.addEventListener('focusin', () => header.classList.remove('is-hidden'));

// 아래로 내리면 화면에 들어온 요소가 한 번 떠오르기 (CSS 의 .reveal)
const revealItems = document.querySelectorAll('.reveal');
const reduceMotion = matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!('IntersectionObserver' in window) || reduceMotion) {
    revealItems.forEach((item) => item.classList.add('is-visible'));
} else {
    // 같은 묶음 안에서는 차례로 (5번째부터는 더 늦추지 않음)
    revealItems.forEach((item) => {
        const group = [...item.parentElement.children].filter((el) => el.classList.contains('reveal'));
        const order = Math.min(group.indexOf(item), 5);
        if (order > 0) {
            item.style.setProperty('--reveal-i', order);
        }
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);   // 한 번 나타나면 끝
        });
    }, { threshold: 0 });

    revealItems.forEach((item) => observer.observe(item));

    // 나타난 뒤에는 순서 지연을 지워서, 마우스를 올렸을 때 반응이 늦지 않게
    document.addEventListener('transitionend', (event) => {
        if (event.propertyName === 'opacity' && event.target.classList.contains('reveal')) {
            event.target.style.removeProperty('--reveal-i');
        }
    });
}

// 이메일 주소 복사
// 새 방식(clipboard API)을 먼저 쓰고, 막혀 있으면(권한, http 등) 예전 방식(textarea)으로 다시 시도한다
function copyByTextarea(text) {
    const area = document.createElement('textarea');
    area.value = text;
    area.setAttribute('readonly', '');
    area.style.position = 'fixed';
    area.style.opacity = '0';
    document.body.appendChild(area);
    area.select();
    const ok = document.execCommand('copy');
    document.body.removeChild(area);

    return ok ? Promise.resolve() : Promise.reject();
}

function copyText(text) {
    if (navigator.clipboard && window.isSecureContext) {
        return navigator.clipboard.writeText(text).catch(() => copyByTextarea(text));
    }

    return copyByTextarea(text);
}

document.querySelectorAll('[data-copy]').forEach((btn) => {
    const label = btn.textContent;

    btn.addEventListener('click', () => {
        copyText(btn.dataset.copy)
            .then(() => {
                btn.textContent = '복사되었습니다';
            })
            .catch(() => {
                btn.textContent = '복사하지 못했습니다';
            })
            .finally(() => {
                setTimeout(() => {
                    btn.textContent = label;
                }, 2000);
            });
    });
});
