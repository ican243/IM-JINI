<?php
require_once INC_PATH . '/data/projects.php';
require_once INC_PATH . '/picture.php';
?>
<section id="projects" class="section section-cream">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">WORK</p>
            <h2 class="section-title">이런 것을 만들었습니다</h2>
        </div>

        <div class="work-list">
            <?php $row = 0; ?>
            <?php foreach ($projects as $slug => $p): ?>
                <?php
                // 큰 화면: 상세 페이지 첫 화면(고해상도)이 있으면 그것, 없으면 카드용 화면
                $shot = '';
                foreach (array_merge($p['shots'] ?? [], [['file' => $p['image']]]) as $s) {
                    if ($s['file'] && is_file(PUBLIC_PATH . '/' . $s['file'])) {
                        $shot = $s['file'];
                        break;
                    }
                }
                $meta = $p['tag'] . ' · ' . $p['badge'];
                ?>

                <?php if ($shot): ?>
                    <?php [$w, $h] = getimagesize(PUBLIC_PATH . '/' . $shot); ?>
                    <!-- 화면이 있는 프로젝트: 화면과 설명을 나란히, 줄마다 좌우를 번갈아 -->
                    <a href="<?= url('projects/' . $slug) ?>" class="work reveal<?= $row++ % 2 ? ' work-flip' : '' ?>">
                        <div class="work-shot">
                            <?php picture($shot, $p['title'] . ' 실제 화면', $w, $h); ?>
                        </div>
                        <div class="work-body">
                            <p class="work-meta"><?= e($meta) ?></p>
                            <h3 class="work-title"><?= e($p['title']) ?></h3>
                            <p class="work-desc"><?= e($p['desc']) ?></p>
                            <span class="more-link">자세히 보기 →</span>
                        </div>
                    </a>
                <?php else: ?>
                    <!-- 화면을 공개하지 않는 프로젝트: 한 줄 띠 -->
                    <a href="<?= url('projects/' . $slug) ?>" class="work-strip reveal">
                        <div class="work-strip-head">
                            <h3 class="work-title"><?= e($p['title']) ?></h3>
                            <span class="badge"><?= e($p['badge']) ?></span>
                        </div>
                        <p class="work-desc"><?= e($p['desc']) ?></p>
                        <span class="more-link">자세히 보기 →</span>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
