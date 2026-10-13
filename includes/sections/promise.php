<?php
// 맡기시면 이렇게 일합니다 (실제로 해 온 일에서 뽑은 약속만)
$promises = [
    [
        'title' => "만들기 전에\n\"왜 필요한지\"부터 묻습니다",
        'desc'  => '같은 일을 두 번 하지 않기 위해서입니다.',
    ],
    [
        'title' => "운영 중인 서비스는\n멈추지 않게 고칩니다",
        'desc'  => '수정 전에 백업하고, 새 화면은 기존 화면과 나란히 확인한 뒤 바꿉니다.',
    ],
    [
        'title' => "안내한 대로\n실제로 동작하는지 확인합니다",
        'desc'  => '화면에 적힌 말과 실제 동작이 다르면, 그 차이를 찾아 맞춥니다.',
    ],
];
?>
<section id="promise" class="section section-dark">
    <div class="container">
        <div class="section-head reveal">
            <p class="eyebrow">HOW I WORK</p>
            <h2 class="section-title">맡기시면 이렇게 일합니다</h2>
        </div>

        <ol class="promise-list">
            <?php foreach ($promises as $i => $item): ?>
                <li class="promise-item reveal">
                    <span class="promise-num"><?= sprintf('%02d', $i + 1) ?></span>
                    <h3 class="promise-title"><?= nl2br(e($item['title'])) ?></h3>
                    <p class="promise-desc"><?= e($item['desc']) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
