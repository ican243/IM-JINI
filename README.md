# IM JINI

imjini.com 랜딩 페이지 (순수 PHP)

> 시작은 당신이, 만드는 건 지니가.

## 폴더 구조

```
public/                 웹 루트 (nginx root)
  index.php             섹션 조립
  assets/
    css/style.css
    js/main.js          모바일 메뉴, 이메일 복사, Story 등장 효과
    fonts/              Pretendard (서브셋)
    img/                공유 이미지(og.png), 파비콘
    img/projects/       프로젝트 화면 캡처
includes/               웹에서 접근 불가
  config.php            사이트 설정 (이름, 슬로건, 이메일, version)
  header.php
  footer.php
  sections/             hero, story, services, projects, contact
deploy/nginx/           nginx 설정 사본
```

## 실행

- PHP 8.x + nginx (php-fpm)
- nginx `root` 를 `public/` 으로 지정한다. `deploy/nginx/imjini` 참고

## BASE_PATH

하위 경로(`/imjini/`)로 띄울 때는 nginx 에서 `fastcgi_param BASE_PATH /imjini;` 를 넘긴다.
도메인 루트로 띄울 때는 넘기지 않으면 된다. (`deploy/nginx/imjini-subpath.conf` 참고)

## 수정할 때

- 문구: `includes/sections/*.php`
  - Services, Projects 는 파일 위쪽 배열만 고치면 된다
  - 프로젝트 화면은 `image` 에 경로를 넣는다. 비워 두면 '비공개' 로 표시된다
- 공통 값(슬로건, 이메일 등): `includes/config.php`
- CSS, JS, 공유 이미지를 바꾸면 `config.php` 의 `version` 을 올린다 (브라우저·카카오톡 캐시 갱신)

## 글꼴

Pretendard (SIL Open Font License 1.1) - `public/assets/fonts/LICENSE.txt`
