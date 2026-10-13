<?php
// 자주 묻는 질문 (누르면 펼쳐짐, 스크립트 없이 details 태그로)
$faqs = [
    [
        'q' => '비용은 어떻게 정해지나요?',
        'a' => '만들 화면과 기능의 범위를 듣고 견적을 드립니다.',
    ],
    [
        'q' => '기간은 얼마나 걸리나요?',
        'a' => '범위에 따라 다르며, 견적과 함께 일정을 알려드립니다.',
    ],
    [
        'q' => '다른 사람이 만든 사이트도 고쳐주시나요?',
        'a' => '네. 문서가 없는 코드도 로그와 데이터부터 살펴 구조를 파악한 뒤 고칩니다.',
    ],
    [
        'q' => '오픈 후 수정도 가능한가요?',
        'a' => '네. 오픈 후 수정 범위와 기간은 견적을 드릴 때 함께 정합니다.',
    ],
    [
        'q' => '어떤 기술로 만드나요?',
        'a' => 'PHP를 주로 쓰고, 실시간으로 바뀌는 화면은 Node.js로 만듭니다.',
    ],
];
?>
<section id="faq" class="section">
    <div class="container faq-wrap">
        <div class="section-head reveal">
            <p class="eyebrow">FAQ</p>
            <h2 class="section-title">자주 묻는 질문</h2>
        </div>

        <div class="faq-list">
            <?php foreach ($faqs as $item): ?>
                <details class="faq-item reveal">
                    <summary><?= e($item['q']) ?><span class="faq-plus" aria-hidden="true">+</span></summary>
                    <p><?= e($item['a']) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
