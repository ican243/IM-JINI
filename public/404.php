<?php
require __DIR__ . '/../includes/config.php';

http_response_code(404);

$page_title = '페이지를 찾을 수 없습니다';
$noindex = true;

require INC_PATH . '/header.php';
?>
<section class="section not-found">
    <div class="container">
        <p class="not-found-code">404</p>
        <h1 class="section-title">페이지를 찾을 수 없습니다</h1>
        <p class="section-lead">주소가 바뀌었거나 없는 페이지입니다</p>

        <div class="btn-group">
            <a href="<?= url() ?>" class="btn btn-primary">홈으로</a>
            <a href="<?= url() ?>#contact" class="btn btn-outline">문의하기</a>
        </div>
    </div>
</section>
<?php
require INC_PATH . '/footer.php';
