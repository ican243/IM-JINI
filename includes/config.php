<?php
// 사이트 공통 설정

// 주소 앞부분. nginx 에서 넘겨준다.
// kir1.cafe24.com/imjini/ 로 접속하면 '/imjini', imjini.com 으로 접속하면 ''
define('BASE_PATH', rtrim($_SERVER['BASE_PATH'] ?? '', '/'));
define('INC_PATH', __DIR__);

$site = [
    'name'      => 'IM JINI',
    'slogan'    => '시작은 당신이, 만드는 건 지니가.',
    'slogan_en' => 'Just start. You can.',
    'intro'     => '머릿속 아이디어를 실제로 돌아가는 웹 서비스로 만들어 드려요.',
    'email'     => 'ican243@gmail.com',
    'github'    => 'https://github.com/ican243',
    'version'   => 2,   // CSS, JS 를 바꾸면 숫자를 올린다 (브라우저 캐시 갱신)
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
