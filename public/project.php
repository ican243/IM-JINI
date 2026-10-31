<?php
// 프로젝트 상세 페이지 (/projects/{slug})
// slug 는 nginx 가 주소에서 꺼내 PROJECT_SLUG 로 넘겨준다
require_once __DIR__ . '/../includes/config.php';
require_once INC_PATH . '/data/projects.php';
require_once INC_PATH . '/picture.php';

$slug = $_SERVER['PROJECT_SLUG'] ?? '';
$p = $projects[$slug] ?? null;

// 없는 프로젝트는 404
if ($p === null) {
    require __DIR__ . '/404.php';
    exit;
}

$intro = $p['intro'] ?? $p['desc'];
$shots = $p['shots'] ?? ($p['image'] ? [['file' => $p['image'], 'caption' => '메인 화면']] : []);
// 아직 파일이 없는 화면은 숨긴다 (파일을 넣으면 자동으로 나타남)
$shots = array_values(array_filter($shots, fn($s) => is_file(__DIR__ . '/' . $s['file'])));
$admin_shots = array_values(array_filter($p['admin']['shots'] ?? [], fn($s) => is_file(__DIR__ . '/' . $s['file'])));

$page_title = $p['title'];
$page_desc  = $p['tag'] . ' - ' . $intro;
$page_path  = 'projects/' . $slug;
if ($p['image']) {
    $page_image = $p['image'];
}

$body = INC_PATH . '/projects/' . $slug . '.php';

// 화면 한 칸
function shot(array $s, string $title, bool $lazy): void
{
    [$w, $h] = getimagesize(__DIR__ . '/' . $s['file']);   // 실제 이미지 크기
    picture($s['file'], $title . ' ' . $s['caption'], $w, $h, $lazy);
}

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
            <p class="detail-intro"><?= e($intro) ?></p>
            <?php if (!empty($p['note'])): ?>
                <p class="detail-note"><?= e($p['note']) ?></p>
            <?php endif; ?>

            <?php if ($p['link']): ?>
                <div class="btn-group detail-actions">
                    <a href="<?= e($p['link']) ?>" class="btn btn-primary" target="_blank" rel="noopener">사이트 보기</a>
                </div>
            <?php endif; ?>
        </div>
    </header>

    <div class="container">
        <?php if ($shots): ?>
            <div class="shots shots-rest-<?= count($shots) - 1 ?>">
                <?php foreach ($shots as $i => $s): ?>
                    <figure class="shot<?= $i === 0 ? ' shot-main' : '' ?>">
                        <?php shot($s, $p['title'], $i !== 0); ?>
                        <figcaption><?= e($s['caption']) ?></figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($admin_shots): ?>
            <section class="admin-block">
                <h2><?= e($p['admin']['title']) ?></h2>
                <p><?= e($p['admin']['desc']) ?></p>
                <div class="shots shots-rest-<?= count($admin_shots) - 1 ?>">
                    <?php foreach ($admin_shots as $i => $s): ?>
                        <figure class="shot<?= $i === 0 ? ' shot-main' : '' ?>">
                            <?php shot($s, $p['title'], true); ?>
                            <figcaption><?= e($s['caption']) ?></figcaption>
                        </figure>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>
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
