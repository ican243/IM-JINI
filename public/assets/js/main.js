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

// Hero 램프 등장 효과 마무리
// html.lamp-on 은 header.php 에서 붙는다. 효과가 끝나거나, 방문자가 클릭·스크롤·키 입력을 하면
// 클래스를 떼서 바로 완료 상태(원래 Hero)로 만든다. 이번 방문에서는 다시 보이지 않게 기록한다.
const root = document.documentElement;
const hero = document.querySelector('.hero');

if (root.classList.contains('lamp-on')) {
    if (hero) {
        try {
            sessionStorage.setItem('imjini-lamp', '1');
        } catch (e) {
            // 저장이 막힌 환경(시크릿 창 등)에서는 기록 없이 넘어간다
        }

        const events = ['pointerdown', 'wheel', 'touchstart', 'keydown', 'scroll'];
        const finish = () => {
            root.classList.remove('lamp-on');
            events.forEach((type) => window.removeEventListener(type, finish));
        };

        events.forEach((type) => window.addEventListener(type, finish, { passive: true }));
        hero.addEventListener('animationend', (event) => {
            if (event.target === hero) {
                finish();
            }
        });
    } else {
        // Hero 가 없는 페이지(상세, 404)에서는 효과 없음, 기록도 하지 않아 메인에 처음 올 때 보인다
        root.classList.remove('lamp-on');
    }
}
