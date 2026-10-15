<?php
// 사이트 공통 설정

// 주소 앞부분. nginx 에서 넘겨준다.
// kir1.cafe24.com/imjini/ 로 접속하면 '/imjini', imjini.com 으로 접속하면 ''
define('BASE_PATH', rtrim($_SERVER['BASE_PATH'] ?? '', '/'));
define('INC_PATH', __DIR__);
define('PUBLIC_PATH', dirname(__DIR__) . '/public');   // 이미지 파일이 있는지 확인할 때 사용

$site = [
    'name'      => 'IM JINI',
    'title'     => 'IM JINI | 홈페이지·관리자 페이지 제작, 1인 웹 개발',   // 메인 페이지 제목 (검색·공유에 보임)
    'description' => '홈페이지·관리자 페이지 제작부터 기존 사이트 수리까지, 1인 웹 개발 IM JINI입니다. 시작은 당신이, 만드는 건 지니가.',
    'slogan'    => '시작은 당신이, 만드는 건 지니가.',
    'slogan_en' => 'Just start. I’m with you.',
    'intro'     => '머릿속 아이디어를 실제로 돌아가는 웹 서비스로 만들어 드립니다.',
    'email'     => 'ican243@gmail.com',
    'github'    => 'https://github.com/ican243',
    'naver_verify'  => '7c17f4c99b68c19895f49f9911abdd9edde7fe28',   // 네이버 서치어드바이저 소유 확인 코드 (meta 태그의 content 값). 비워 두면 안 나옴
    'google_verify' => '',   // 구글 서치콘솔 HTML 태그 방식일 때만 (도메인 속성으로 확인하면 비워 둠)
    'reply_time' => '',   // 문의 응답 시간 안내 한 줄 (예: 평일 기준 24시간 안에 답장드립니다). 비워 두면 안 보임
    'version'   => 39,   // CSS, JS 를 바꾸면 숫자를 올린다 (브라우저 캐시 갱신)
];

// 사이트 안 주소 만들기 (BASE_PATH 를 앞에 붙임)
function url(string $path = ''): string
{
    return BASE_PATH . '/' . ltrim($path, '/');
}

// 화면 출력용 이스케이프
function e(?string $str): string
{
    return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
}

// 전체 주소 (공유 미리보기용)
// SERVER_NAME 은 nginx 의 server_name 값이라 요청 헤더로 바꿀 수 없다
function site_url(string $path = ''): string
{
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    return $scheme . '://' . $_SERVER['SERVER_NAME'] . url($path);
}
