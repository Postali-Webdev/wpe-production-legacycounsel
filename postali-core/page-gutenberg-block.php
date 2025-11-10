<?php
/*
Template Name: PPC Block Editor Template
*/

get_header();

$block_content = do_blocks( '
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:post-content /-->
</div>
<!-- /wp:group -->'
);

?>

<div class="body-container">

    <?php echo $block_content; ?>

</div>

<section class="footer-block">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <a href="/" class="custom-logo-link" rel="home" aria-current="page">
                    <img width="610" height="220" src="/wp-content/uploads/2024/03/Legacy-Counsel-Full-Color-Logo-Email-White.png" class="custom-logo" alt="Legacy Counsel PLC" decoding="async" fetchpriority="high">
                </a>
            </div>
        </div>
    </div>    
</section>

<?php get_footer(); ?>