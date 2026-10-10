<?php require_once INC_PATH . '/data/projects.php'; ?>
<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title">이런 것을 만들었습니다</h2>

        <div class="grid grid-3">
            <?php foreach ($projects as $slug => $p): ?>
                <article class="card project">
                    <a href="<?= url('projects/' . $slug) ?>" class="project-link">
                        <?php require INC_PATH . '/project-shot.php'; ?>

                        <div class="project-head">
                            <h3 class="card-title"><?= e($p['title']) ?></h3>
                            <span class="badge"><?= e($p['badge']) ?></span>
                        </div>
                        <p class="project-tag"><?= e($p['tag']) ?></p>
                        <p class="card-desc"><?= e($p['desc']) ?></p>

                        <span class="project-more">자세히 보기</span>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
