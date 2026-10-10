<?php require_once INC_PATH . '/data/projects.php'; ?>
<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title">이런 것을 만들었습니다</h2>

        <div class="grid grid-3">
            <?php foreach ($projects as $slug => $p): ?>
                <article class="card project">
                    <?php require INC_PATH . '/project-shot.php'; ?>

                    <div class="project-head">
                        <h3 class="card-title"><?= e($p['title']) ?></h3>
                        <span class="badge"><?= e($p['badge']) ?></span>
                    </div>
                    <p class="project-tag"><?= e($p['tag']) ?></p>
                    <p class="card-desc"><?= e($p['desc']) ?></p>

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
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
