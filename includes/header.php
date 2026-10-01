<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($site['name']) ?></title>
    <meta name="description" content="<?= e($site['slogan']) ?>">
    <link rel="preload" href="<?= url('assets/fonts/Pretendard-Regular.subset.woff2') ?>" as="font" type="font/woff2" crossorigin>
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
