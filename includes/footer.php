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
    <script src="<?= url('assets/js/main.js') ?>?v=<?= e($site['version']) ?>"></script>
</body>
</html>
