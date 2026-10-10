<?php
// 프로젝트 화면 (메인 카드, 상세 페이지 공용). $p 가 있어야 한다
?>
<?php if ($p['image']): ?>
    <div class="project-shot">
        <?php $webp = preg_replace('/\.jpg$/', '.webp', $p['image']); ?>
        <picture>
            <?php if ($webp !== $p['image'] && is_file(__DIR__ . '/../public/' . $webp)): ?>
                <source srcset="<?= url($webp) ?>" type="image/webp">
            <?php endif; ?>
            <img src="<?= url($p['image']) ?>" alt="<?= e($p['title']) ?> 실제 화면" width="800" height="500" loading="lazy">
        </picture>
    </div>
<?php else: ?>
    <div class="project-shot is-private">
        <span>운영 중인 비공개 서비스라 <br>화면은 싣지 않았습니다</span>
    </div>
<?php endif; ?>
