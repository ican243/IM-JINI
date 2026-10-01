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
