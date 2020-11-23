<?php
require_once(__DIR__ . '/../../../vendor/autoload.php');

use Carbon\Carbon;

$created_at = Carbon::now()->format('Y');
?>

<footer class="footer">
    <div class="container">
        <div class="footer__body">
            <span class="footer__data">Ukraine 2000-<?php echo $created_at; ?> </span>
            <div class="footer__social social">
                <!-- noindex -->
                <a href="#" target="_blank" rel="nofollow noreferrer">
                    <img src="<?php echo get_template_directory_uri() ?>/img/svg/fb.svg" alt="">
                </a>
                <!-- /noindex -->
                <!-- noindex -->
                <a href="#" target="_blank" rel="nofollow noreferrer">
                    <img src="<?php echo get_template_directory_uri() ?>/img/svg/tw.svg" alt="">
                </a>
                <!-- /noindex -->
                <!-- noindex -->
                <a href="#" target="_blank" rel="nofollow noreferrer">
                    <img src="<?php echo get_template_directory_uri() ?>/img/svg/in.svg" alt="">
                </a>
                <!-- /noindex -->
            </div>
        </div>       
    </div>    
</footer>

<?php wp_footer(); ?>

</div>
</body>
</html>
