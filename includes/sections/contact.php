<?php
// 메일 버튼을 누르면 제목·본문 양식이 미리 채워진다 (mailto)
$mail_subject = '[IM JINI 문의] ';
$mail_body    = "1. 만들고 싶은 것:\n\n2. 참고 사이트:\n\n3. 희망 일정:\n\n4. 예산 범위:\n";
$mailto       = 'mailto:' . $site['email'] . '?subject=' . rawurlencode($mail_subject) . '&body=' . rawurlencode($mail_body);

// 문의할 때 알려주시면 좋은 것
$tips = ['만들고 싶은 것', '참고 사이트', '희망 일정', '예산 범위'];
?>
<section id="contact" class="section section-dark contact">
    <div class="container contact-inner reveal">
        <div class="contact-text">
            <h2 class="contact-title">만들고 싶은 것이<br>있으신가요?</h2>
            <p class="contact-lead">아직 정리되지 않은 생각이어도 괜찮습니다.<br>떠오르는 대로 보내주시면 함께 정리해 드리겠습니다.</p>
        </div>

        <?php if ($site['email']): ?>
            <div class="contact-box">
                <p class="contact-tips-title">문의할 때 알려주시면 좋은 것</p>
                <ol class="contact-tips">
                    <?php foreach ($tips as $tip): ?>
                        <li><?= e($tip) ?></li>
                    <?php endforeach; ?>
                </ol>

                <div class="btn-group contact-actions">
                    <?php if (!empty($site['kakao_open'])): ?>
                        <a href="<?= e($site['kakao_open']) ?>" class="btn btn-kakao" target="_blank" rel="noopener" aria-label="카카오톡 오픈채팅으로 문의하기 (새 창)"><?= chat_icon() ?>카카오톡으로 문의</a>
                    <?php endif; ?>
                    <a href="<?= e($mailto) ?>" class="btn btn-primary">메일 보내기</a>
                    <button type="button" class="btn btn-outline" data-copy="<?= e($site['email']) ?>">이메일 주소 복사</button>
                </div>

                <p class="contact-email"><?= e($site['email']) ?></p>
                <?php if (!empty($site['reply_time'])): ?>
                    <p class="contact-reply"><?= e($site['reply_time']) ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
