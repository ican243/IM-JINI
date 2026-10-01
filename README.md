# IM JINI

imjini.com 랜딩 페이지 (순수 PHP)

## 폴더 구조

```
public/            웹 루트 (nginx root)
  index.php        섹션 조립
  assets/          css, js, fonts, img
includes/          웹에서 접근 불가
  config.php       사이트 설정 (이름, 슬로건, 이메일 등)
  header.php
  footer.php
  sections/        hero, story, services, projects, contact
deploy/nginx/      nginx 설정 사본
```

## 실행

- PHP 8.x + nginx (php-fpm)
- nginx `root` 를 `public/` 으로 지정한다. `deploy/nginx/imjini` 참고

## BASE_PATH

하위 경로(`/imjini/`)로 띄울 때는 nginx 에서 `fastcgi_param BASE_PATH /imjini;` 를 넘긴다.
도메인 루트로 띄울 때는 넘기지 않으면 된다. (`deploy/nginx/imjini-subpath.conf` 참고)

## 수정할 때

- 문구: `includes/sections/*.php`, 공통 값은 `includes/config.php`
- CSS, JS 를 바꾸면 `config.php` 의 `version` 을 올린다 (캐시 갱신)

## 글꼴

Pretendard (SIL Open Font License 1.1) - `public/assets/fonts/LICENSE.txt`
