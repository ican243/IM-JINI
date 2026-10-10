<?php
// image: 실제 화면 캡처 (비어 있으면 '비공개' 표시), link: 사이트 주소, github: 저장소 주소 (비어 있으면 버튼 안 보임)
$projects = [
    [
        'title'  => 'LiveF',
        'badge'  => '운영 중',
        'tag'    => '방송 후원 통합 관리',
        'desc'   => '세 곳으로 흩어진 후원을 한 화면에 모아 점수로 환산하고, 방송 화면에 실시간으로 띄웁니다. 운영 중인 상업 서비스를 맡아 개선하고 있습니다.',
        'stack'  => ['Node.js', 'Socket.IO', 'MySQL', 'Vue 2'],
        'image'  => '',
        'link'   => '',
        'github' => '',
    ],
    [
        'title'  => 'Lambda',
        'badge'  => '2인 팀',
        'tag'    => '실시간 주식 모의투자',
        'desc'   => '증권사 API로 실시간 시세를 받아 모의투자를 할 수 있는 플랫폼입니다.',
        'stack'  => ['PHP', 'Node.js', 'WebSocket', 'MySQL'],
        'image'  => 'assets/img/projects/lambda.jpg',
        'link'   => 'https://kir1.cafe24.com/user/',
        'github' => 'https://github.com/ican243/Lambda',
    ],
    [
        'title'  => 'Linkr',
        'badge'  => '1인 개발',
        'tag'    => 'URL 단축 서비스',
        'desc'   => '긴 주소를 짧게 줄이고 클릭 통계를 보여줍니다. 처음부터 혼자 설계했습니다.',
        'stack'  => ['CodeIgniter 4', 'MySQL', 'OAuth', '토스페이먼츠'],
        'image'  => 'assets/img/projects/linkr.jpg',
        'link'   => 'https://kir1.cafe24.com:8443/',
        'github' => 'https://github.com/ican243/linkr',
    ],
];
?>
<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title">이런 것을 만들었습니다</h2>

        <div class="grid grid-3">
            <?php foreach ($projects as $p): ?>
                <article class="card project">
                    <?php if ($p['image']): ?>
                        <div class="project-shot">
                            <img src="<?= url($p['image']) ?>" alt="<?= e($p['title']) ?> 실제 화면" width="1280" height="800" loading="lazy">
                        </div>
                    <?php else: ?>
                        <div class="project-shot is-private">
                            <span>운영 중인 비공개 서비스라 <br>화면은 싣지 않았습니다</span>
                        </div>
                    <?php endif; ?>

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
