<?php
/**
 * Template Name: Contact
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <div>
                    <?php the_content(); ?>
                    <!-- Start Lawmatics Embedded Snippet -->
                    <script id="lm-embedded-script">
                    !function(e,t,n,a,s,c,i){if(!e[s]){i=e[s]=function(){i.process?i.process.apply(i,arguments):i.queue.push(arguments)},i.queue=[],i.t=1*new Date;var o=t.createElement(n);o.async=1,o.src=a+"?t="+Math.ceil(new Date/c)*c;var r=t.getElementsByTagName(n)[0];r.parentNode.insertBefore(o,r)}}(window,document,"script","https://navi.lawmatics.com/intake.min.js","lm_intake",864e5),lm_intake("3dff9d5e-be75-432b-9c3c-d36c62bd6e67");
                    </script>
                    <!-- End Lawmatics Embedded Snippet -->
                    </div>
                </div>
                <div class="column-33 sidebar-block block">
                    <p><strong>Our Office</strong></p>
                    <p><?php the_field('address','options'); ?></p>
                    <p class="sidebar-more"><a href="<?php the_field('driving_directions','options'); ?>" title="Get Directions" target="blank">Get Directions</a> <span class="icon-tick-down"></span></p>
                    <iframe src="<?php echo esc_url( get_field('map_embed','options') ); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div><!-- #front-page -->

<?php get_footer();?>