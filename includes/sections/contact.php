<section id="contact" class="section">
    <div class="container">
        <div class="contact-box">
            <h2 class="section-title">만들고 싶은 것이 있으신가요?</h2>
            <p class="section-lead">
                아직 정리되지 않았어도 괜찮습니다.<br>
                떠오르는 대로 보내주시면 함께 정리해 드리겠습니다.
            </p>

            <div class="btn-group">
                <?php if ($site['email']): ?>
                    <a href="mailto:<?= e($site['email']) ?>" class="btn btn-white">✉ 메일 보내기</a>
                    <button type="button" class="btn btn-ghost" data-copy="<?= e($site['email']) ?>">이메일 복사</button>
                <?php endif; ?>
                <a href="<?= e($site['github']) ?>" class="btn btn-ghost" target="_blank" rel="noopener">GitHub</a>
            </div>

            <?php if ($site['email']): ?>
                <p class="contact-email"><?= e($site['email']) ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
