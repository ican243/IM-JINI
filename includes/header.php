<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($site['name']) ?></title>
    <meta name="description" content="<?= e($site['slogan']) ?>">

    <!-- 공유 미리보기 (카카오톡, SNS) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($site['name']) ?>">
    <meta property="og:description" content="<?= e($site['slogan']) ?> <?= e($site['intro']) ?>">
    <meta property="og:url" content="<?= e(site_url()) ?>">
    <meta property="og:image" content="<?= e(site_url('assets/img/og.png')) ?>?v=<?= e($site['version']) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="<?= url('assets/img/favicon.svg') ?>" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?= url('assets/img/apple-touch-icon.png') ?>">
    <link rel="preload" href="<?= url('assets/fonts/Pretendard-Regular.subset.woff2') ?>" as="font" type="font/woff2" crossorigin>
    <script>document.documentElement.classList.add('js');</script>
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
                <a href="#story">Story</a>
                <a href="#services">Services</a>
                <a href="#projects">Projects</a>
                <a href="#contact" class="nav-cta">Contact</a>
            </nav>
        </div>
    </header>
    <main>
