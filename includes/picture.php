<?php
// jpg 이미지를 <picture> 로 출력 (같은 이름의 .webp 가 있으면 먼저 사용)
function picture(string $file, string $alt, int $width, int $height, bool $lazy = true): void
{
    $webp = preg_replace('/\.jpg$/', '.webp', $file);
    ?>
    <picture>
        <?php if ($webp !== $file && is_file(__DIR__ . '/../public/' . $webp)): ?>
            <source srcset="<?= url($webp) ?>" type="image/webp">
        <?php endif; ?>
        <img src="<?= url($file) ?>" alt="<?= e($alt) ?>" width="<?= $width ?>" height="<?= $height ?>"<?= $lazy ? ' loading="lazy"' : '' ?>>
    </picture>
    <?php
}
