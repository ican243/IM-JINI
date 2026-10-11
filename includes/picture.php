<?php
// jpg 이미지를 <picture> 로 출력 (같은 이름의 .webp 가 있으면 먼저 사용)
function picture(string $file, string $alt, int $width, int $height, bool $lazy = true): void
{
    $webp = preg_replace('/\.jpg$/', '.webp', $file);
    ?>
    <picture>
        <?php if ($webp !== $file && is_file(__DIR__ . '/../public/' . $webp)): ?>
            <source srcset="<?= img_url($webp) ?>" type="image/webp">
        <?php endif; ?>
        <img src="<?= img_url($file) ?>" alt="<?= e($alt) ?>" width="<?= $width ?>" height="<?= $height ?>"<?= $lazy ? ' loading="lazy"' : '' ?>>
    </picture>
    <?php
}

// 이미지 주소 뒤에 파일 수정 시각을 붙인다 (파일을 바꾸면 브라우저가 새로 받음)
function img_url(string $file): string
{
    $path = __DIR__ . '/../public/' . $file;
    return url($file) . (is_file($path) ? '?v=' . filemtime($path) : '');
}
