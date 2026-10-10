<?php
// 프로젝트 상세 페이지 (/projects/{slug})
// slug 는 nginx 가 주소에서 꺼내 PROJECT_SLUG 로 넘겨준다
require_once __DIR__ . '/../includes/config.php';
require_once INC_PATH . '/data/projects.php';

$slug = $_SERVER['PROJECT_SLUG'] ?? '';
$p = $projects[$slug] ?? null;

// 없는 프로젝트는 404
if ($p === null) {
    require __DIR__ . '/404.php';
    exit;
}

$page_title = $p['title'];
$page_desc  = $p['tag'] . ' - ' . $p['desc'];
$page_path  = 'projects/' . $slug;
if ($p['image']) {
    $page_image = $p['image'];
}

$body = INC_PATH . '/projects/' . $slug . '.php';

require INC_PATH . '/header.php';
?>
<article class="project-detail">
    <header class="section detail-head">
        <div class="container narrow">
            <a href="<?= url() ?>#projects" class="detail-back">← 프로젝트 목록</a>

            <div class="project-head">
                <h1 class="detail-title"><?= e($p['title']) ?></h1>
                <span class="badge"><?= e($p['badge']) ?></span>
            </div>
            <p class="detail-tag"><?= e($p['tag']) ?></p>
            <p class="detail-meta"><?= e($p['period']) ?> · <?= e($p['team']) ?></p>

            <ul class="tags">
                <?php foreach ($p['stack'] as $tech): ?>
                    <li class="tag"><?= e($tech) ?></li>
                <?php endforeach; ?>
            </ul>

            <?php if ($p['link'] || $p['github']): ?>
                <div class="project-links">
                    <?php if ($p['link']): ?>
                        <a href="<?= e($p['link']) ?>" target="_blank" rel="noopener">사이트 보기</a>
                    <?php endif; ?>
                    <?php if ($p['github']): ?>
                        <a href="<?= e($p['github']) ?>" target="_blank" rel="noopener">GitHub</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </header>

    <div class="container narrow">
        <?php require INC_PATH . '/project-shot.php'; ?>
    </div>

    <div class="section detail-body">
        <div class="container narrow">
            <?php if (is_file($body)): ?>
                <?php require $body; ?>
            <?php else: ?>
                <p class="detail-empty">상세 내용을 준비하고 있습니다</p>
            <?php endif; ?>
        </div>
    </div>

    <nav class="section detail-next" aria-label="다른 프로젝트">
        <div class="container narrow">
            <p class="detail-next-label">다른 프로젝트</p>
            <ul class="detail-next-list">
                <?php foreach ($projects as $other_slug => $other): ?>
                    <?php if ($other_slug === $slug) continue; ?>
                    <li>
                        <a href="<?= url('projects/' . $other_slug) ?>">
                            <strong><?= e($other['title']) ?></strong>
                            <span><?= e($other['tag']) ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <a href="<?= url() ?>#contact" class="btn btn-primary">만들고 싶은 것이 있으신가요? 문의하기</a>
        </div>
    </nav>
</article>
<?php
require INC_PATH . '/footer.php';
