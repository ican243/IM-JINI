<section id="contact" class="section">
    <div class="container">
        <div class="contact-box">
            <h2 class="section-title">만들고 싶은 게 있나요?</h2>
            <p class="section-lead">
                아직 정리가 안 됐어도 괜찮아요.<br>
                떠오르는 대로 보내주시면 함께 정리해 드릴게요.
            </p>

            <div class="btn-group">
                <?php if ($site['email']): ?>
                    <a href="mailto:<?= e($site['email']) ?>" class="btn btn-white">✉ 메일 보내기</a>
                <?php endif; ?>
                <a href="<?= e($site['github']) ?>" class="btn btn-ghost" target="_blank" rel="noopener">GitHub</a>
            </div>
        </div>
    </div>
</section>
