<?php
$services = [
    [
        'title' => '웹사이트 / 랜딩 페이지',
        'desc'  => '회사·브랜드 소개부터 상담 신청까지 받는 홈페이지',
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
        'desc'  => '이미 돌아가는 서비스를 넘겨받아 고치고, 장애에 대응합니다',
    ],
];
?>
<section id="services" class="section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">SERVICES</p>
            <h2 class="section-title">이런 것을 만듭니다</h2>
        </div>

        <ol class="service-list">
            <?php foreach ($services as $i => $s): ?>
                <li class="service-item reveal">
                    <span class="service-num"><?= sprintf('%02d', $i + 1) ?></span>
                    <h3 class="service-title"><?= e($s['title']) ?></h3>
                    <p class="service-desc"><?= e($s['desc']) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
