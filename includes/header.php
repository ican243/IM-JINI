<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
// 페이지마다 바꿀 수 있는 값 (없으면 사이트 기본값)
// $page_title, $page_desc, $page_path(주소), $page_image(공유 이미지), $noindex
$meta_title = isset($page_title) ? $page_title . ' | ' . $site['name'] : $site['name'];
$meta_desc  = $page_desc ?? $site['slogan'] . ' ' . $site['intro'];
$meta_url   = site_url($page_path ?? '');
$meta_image = isset($page_image) ? site_url($page_image) : site_url('assets/img/og.png') . '?v=' . $site['version'];
$meta_size  = isset($page_image) ? [800, 500] : [1200, 630];   // 프로젝트 화면 800x500, 기본 이미지 1200x630
?>
    <title><?= e($meta_title) ?></title>
<?php if (!empty($noindex)): ?>
    <meta name="robots" content="noindex">
<?php endif; ?>
    <meta name="description" content="<?= e($meta_desc) ?>">

    <!-- 공유 미리보기 (카카오톡, SNS) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($meta_title) ?>">
    <meta property="og:description" content="<?= e($meta_desc) ?>">
    <meta property="og:url" content="<?= e($meta_url) ?>">
    <meta property="og:image" content="<?= e($meta_image) ?>">
    <meta property="og:image:width" content="<?= $meta_size[0] ?>">
    <meta property="og:image:height" content="<?= $meta_size[1] ?>">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="<?= url('assets/img/favicon.svg') ?>" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?= url('assets/img/apple-touch-icon.png') ?>">
    <script>document.documentElement.classList.add('js');</script>
    <link rel="stylesheet" href="<?= url('assets/css/pretendard.css') ?>?v=<?= e($site['version']) ?>">
    <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>?v=<?= e($site['version']) ?>">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a href="<?= url() ?>" class="logo"><span class="logo-im">IM</span> JINI</a>

            <button type="button" class="nav-toggle" aria-label="메뉴 열기" aria-expanded="false" aria-controls="site-nav">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="nav" id="site-nav">
                <a href="<?= url() ?>#story">Story</a>
                <a href="<?= url() ?>#services">Services</a>
                <a href="<?= url() ?>#projects">Projects</a>
                <a href="<?= url() ?>#contact" class="nav-cta">Contact</a>
            </nav>
        </div>
    </header>
    <main>
