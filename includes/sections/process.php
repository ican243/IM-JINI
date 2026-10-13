<?php
$steps = [
    ['title' => '상담', 'desc' => '만들고 싶은 것을 편하게 들려주세요'],
    ['title' => '견적', 'desc' => '범위와 일정, 비용을 정리해 드립니다'],
    ['title' => '개발', 'desc' => '진행 상황을 중간중간 공유합니다'],
    ['title' => '검수', 'desc' => '직접 써 보시고 확인해 주세요'],
    ['title' => '오픈 & 수정', 'desc' => '오픈 후 고칠 점을 반영합니다'],
];
?>
<section id="process" class="section">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">PROCESS</p>
            <h2 class="section-title">진행은 5단계로 합니다</h2>
        </div>

        <ol class="process-list">
            <?php foreach ($steps as $i => $step): ?>
                <li class="process-item reveal">
                    <span class="process-num"><?= $i + 1 ?></span>
                    <h3 class="process-title"><?= e($step['title']) ?></h3>
                    <p class="process-desc"><?= e($step['desc']) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
