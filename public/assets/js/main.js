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

// 메뉴 항목을 누르면 닫는다
nav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => setMenu(false));
});

// 이메일 복사
// clipboard API 는 https 에서만 동작해서, http 일 때는 textarea 방식으로 복사한다
function copyText(text) {
    if (navigator.clipboard && window.isSecureContext) {
        return navigator.clipboard.writeText(text);
    }

    const area = document.createElement('textarea');
    area.value = text;
    area.style.position = 'fixed';
    area.style.opacity = '0';
    document.body.appendChild(area);
    area.select();
    const ok = document.execCommand('copy');
    document.body.removeChild(area);

    return ok ? Promise.resolve() : Promise.reject();
}

document.querySelectorAll('[data-copy]').forEach((btn) => {
    const label = btn.textContent;

    btn.addEventListener('click', () => {
        copyText(btn.dataset.copy)
            .then(() => {
                btn.textContent = '복사되었습니다 ✓';
            })
            .catch(() => {
                btn.textContent = '복사 실패';
            })
            .finally(() => {
                setTimeout(() => {
                    btn.textContent = label;
                }, 2000);
            });
    });
});

// 화면에 들어오면 한 줄씩 나타나기
document.querySelectorAll('[data-reveal]').forEach((box) => {
    box.querySelectorAll('.reveal').forEach((line, i) => {
        line.style.setProperty('--i', i);
    });

    if (!('IntersectionObserver' in window)) {
        box.classList.add('is-visible');
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                box.classList.add('is-visible');
                observer.disconnect();
            }
        });
    }, { threshold: 0.25 });

    observer.observe(box);
});
