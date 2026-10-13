<?php require_once INC_PATH . '/data/projects.php'; ?>
<section id="top" class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <p class="eyebrow">WEB DEVELOPER · IM JINI</p>
            <h1 class="hero-title">마법은 없지만<br>떠오른 생각을<br class="br-sm"> <em>현실</em>로 <br class="br-lg">만듭니다.</h1>
            <p class="hero-lead">아이디어를 설계하고, 화면에 담고, 실제로 돌아가는 웹 서비스로 완성합니다.</p>

            <div class="btn-group">
                <a href="#contact" class="btn btn-primary">프로젝트 문의하기</a>
                <a href="#projects" class="btn btn-outline">작업 보기</a>
            </div>
        </div>

        <!-- 오른쪽: 최근 작업 목차 (누르면 상세 페이지) -->
        <nav class="hero-index" aria-label="최근 작업">
            <p class="hero-index-label">최근 작업</p>
            <ol>
                <?php $no = 0; ?>
                <?php foreach ($projects as $slug => $p): ?>
                    <li>
                        <a href="<?= url('projects/' . $slug) ?>">
                            <span class="hero-index-num"><?= sprintf('%02d', ++$no) ?></span>
                            <span class="hero-index-body">
                                <strong><?= e($p['title']) ?></strong>
                                <span><?= e($p['tag']) ?></span>
                            </span>
                            <span class="hero-index-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </nav>
    </div>
</section>
