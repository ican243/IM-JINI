<?php
// 고객이 바로 이해하게 '해드리는 것' 중심으로 (기술 용어 없이)
$services = [
    [
        'title' => '회사·가게 홈페이지',
        'desc'  => '회사 소개부터 상담 신청 접수까지, 휴대폰에서도 보기 좋게 만들어 드립니다',
    ],
    [
        'title' => '엑셀 대신 쓰는 관리 화면',
        'desc'  => '주문·회원·예약처럼 매일 보는 자료를 한 화면에서 보고 고치고, 엑셀로 내려받게 해 드립니다',
    ],
    [
        'title' => '바로바로 바뀌는 화면',
        'desc'  => '시세나 방송 화면처럼 새로고침 없이 내용이 바로 바뀌는 화면을 만들어 드립니다',
    ],
    [
        'title' => '기존 사이트 수리·관리',
        'desc'  => '다른 곳에서 만든 사이트도 넘겨받아 고치고, 문제가 생기면 원인을 찾아 해결해 드립니다',
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
