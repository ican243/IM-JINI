    </main>
    <footer class="site-footer">
        <div class="container footer-inner">
            <div class="footer-brand">
                <a href="<?= url() ?>" class="logo"><span class="logo-im">IM</span> JINI</a>
                <p class="footer-slogan"><?= e($site['slogan']) ?></p>
            </div>

            <div class="footer-meta">
                <p class="footer-links">
                    <a href="<?= e($site['github']) ?>" target="_blank" rel="noopener">GitHub</a>
                    <?php if ($site['email']): ?>
                        <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
                    <?php endif; ?>
                </p>
                <p class="copyright">&copy; <?= date('Y') ?> <?= e($site['name']) ?></p>
            </div>
        </div>
    </footer>
<?php if (!empty($site['kakao_open'])): ?>
    <!-- 오른쪽 아래에 떠 있는 카카오톡 문의 버튼 (스크롤해도 따라옴) -->
    <a href="<?= e($site['kakao_open']) ?>" class="kakao-float" target="_blank" rel="noopener" aria-label="카카오톡 오픈채팅으로 문의하기 (새 창)">
        <span class="kakao-float-icon"><?= chat_icon() ?></span><span>카카오톡 문의하기</span>
    </a>
<?php endif; ?>
    <script src="<?= url('assets/js/main.js') ?>?v=<?= e($site['version']) ?>" defer></script>
</body>
</html>
