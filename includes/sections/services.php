<?php
$services = [
    [
        'title' => '웹사이트 / 랜딩 페이지',
        'desc'  => '회사·브랜드 소개, 상담 신청까지 받는 홈페이지',
    ],
    [
        'title' => '관리자 페이지',
        'desc'  => '데이터를 보고, 고치고, 엑셀로 내려받는 운영 도구',
    ],
    [
        'title' => '실시간 서비스',
        'desc'  => '실시간 시세, 방송 오버레이처럼 화면이 바로바로 바뀌는 서비스',
    ],
    [
        'title' => '운영·유지보수',
        'desc'  => '이미 돌아가는 서비스를 넘겨받아 고치고, 장애에 대응해요',
    ],
];
?>
<section id="services" class="section section-soft">
    <div class="container">
        <h2 class="section-title">이런 걸 만들어요</h2>

        <div class="grid grid-2">
            <?php foreach ($services as $i => $s): ?>
                <article class="card">
                    <span class="card-num"><?= sprintf('%02d', $i + 1) ?></span>
                    <h3 class="card-title"><?= e($s['title']) ?></h3>
                    <p class="card-desc"><?= e($s['desc']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
