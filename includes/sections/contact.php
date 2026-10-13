<section id="contact" class="section section-dark contact">
    <div class="container contact-inner reveal">
        <div class="contact-text">
            <h2 class="contact-title">만들고 싶은 것이<br>있으신가요?</h2>
            <p class="contact-lead">메일로 편하게 보내주세요.</p>
        </div>

        <?php if ($site['email']): ?>
            <div class="contact-actions">
                <a href="mailto:<?= e($site['email']) ?>" class="btn btn-primary">메일 보내기</a>
                <a href="mailto:<?= e($site['email']) ?>" class="contact-email"><?= e($site['email']) ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>
