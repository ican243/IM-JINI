<?php
// 메인 카드의 프로젝트 화면. $p 가 있어야 한다
require_once INC_PATH . '/picture.php';
?>
<?php if ($p['image']): ?>
    <div class="project-shot">
        <?php picture($p['image'], $p['title'] . ' 실제 화면', 800, 500); ?>
    </div>
<?php else: ?>
    <div class="project-shot is-private">
        <span>운영 중인 비공개 서비스라 <br>화면은 싣지 않았습니다</span>
    </div>
<?php endif; ?>
