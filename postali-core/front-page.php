<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">
    <section class="banner" id="hp-banner">
        <div class="container full">
            <div class="columns">
                <div class="column-full">
                    <div class="container">
                        <div class="columns">
                            <div class="column-50 left-col">
                            <?php $banner_left_col = get_field('p1_left_column'); 
                            $banner_right_col = get_field('p1_right_column');?>
                                <p class="tab-title"><?php echo acf_esc_html($banner_left_col['sub_title']);?></p>
                                <h1><?php echo esc_html($banner_left_col['title_h1']); ?></h1>
                                <p><?php echo esc_html( $banner_left_col['copy'] ) ?></p>
                                <div class="cta-wrapper">
                                    <p class="sub-title"><?php echo esc_html( $banner_left_col['cta_title'] ) ?></p>
                                    <div class="inner-wrapper">
                                        <?php $phone_button = $banner_left_col['phone_button']; ?>
                                        <a href="tel:<?php echo esc_attr(get_field('phone_number', 'options')); ?>" class="circle-button" title="call legacy counsel today">
                                        <img src="<?php echo esc_url($phone_button['phone_icon']['url']); ?>" alt="<?php echo esc_attr($phone_button['phone_icon']['alt']); ?>">
                                            <p><?php echo esc_html(get_field('phone_number', 'options')); ?></p>
                                            <p class="hide-mobile"><?php echo esc_html($phone_button['cta']); ?></p>
                                        </a>
                                        <?php $schedule_button = $banner_left_col['schedule_button']; ?>
                                        <a href="<?php echo esc_attr($schedule_button['contact_link']['url']); ?>" class="circle-button" title="call legacy counsel today">
                                            <img src="<?php echo esc_url($schedule_button['calendar_icon']['url']); ?>" alt="<?php echo esc_attr($schedule_button['calendar_icon']['alt']); ?>">
                                            <p><?php echo esc_html($schedule_button['contact_link']['title']); ?></p>
                                            <img class="hide-mobile" src="<?php echo esc_html($schedule_button['arrow_icon']['url']); ?>" alt="<?php echo esc_html($schedule_button['arrow_icon']['alt']) ?>">
                                        </a>
                                    </div>
                                    <p class="right-sub-title mobile"><?php echo esc_html($banner_right_col['right_sub_title']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-image">
                <p class="right-sub-title desktop"><?php echo esc_html($banner_right_col['right_sub_title']); ?></p>
                <?php 
                    echo wp_get_attachment_image( $banner_right_col['banner_image']['id'], 'full', "", ["class" => "ignore-lazy"]);
                ?>
            </div>
        </div>
    </section>

    <section id="panel-2">
        <div class="container">
            <div class="columns column-wrapper">
                <div class="column-full block">
                    <p class="tab-title"><?php echo esc_html(get_field('p2_sub_title')); ?></p>
                    <h2><?php echo esc_html(get_field('p2_section_title_h2')); ?></h2>
                </div>
                <div class="column-50">
                    <p><?php echo esc_html(get_field('p2_left_copy')); ?></p>
                </div>
                <div class="column-50">
                    <p><?php echo esc_html(get_field('p2_right_copy')); ?></p>
                </div>
                <div class="column-full block links">
                    <a class="btn green" href="tel:<?php echo esc_attr(get_field('phone_number', 'options')); ?>" title="call legacy counsel today"><?php echo esc_attr(get_field('phone_number', 'options')); ?></a>
                    <a class="explore-link" href="<?php echo esc_attr(get_field('p2_packages_fees_link')['url']); ?>"><?php echo esc_attr(get_field('p2_packages_fees_link')['title']); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-3">
        <div class="container">
            <div class="columns">
                <div class="column-full block practice-areas-wrap">
                    <?php if( have_rows('p3_practice_area') ) : ?>
                        <?php while( have_rows('p3_practice_area') ) : the_row(); 
                        $pa_image = get_sub_field('image'); ?>
                            <div class="practice-area">
                                <div class="columns">
                                    <div class="column-50">
                                        <?php echo wp_get_attachment_image( $pa_image['id'], 'full'); ?>
                                    </div>
                                    <div class="column-50 block">
                                        <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
                                        <p><?php echo esc_html(get_sub_field('excerpt'));?></p>
                                    </div>
                                </div>
                                <?php if( get_sub_field('additional_copy') ) : ?>
                                    <div class="additional-copy"><?php echo acf_esc_html(get_sub_field('additional_copy')) ?></div>
                                <?php endif; ?>
                                <?php $offering_group = get_sub_field('offering'); ?>
                                
                                <div class="columns points-column">
                                    <div class="column-33">
                                        <p class="offering-title"><?php echo esc_html($offering_group['offering_title']); ?></p>
                                    </div>
                                    <div class="column-66 points-wrapper">
                                        <?php if( $offering_group['key_points'] ) : ?>
                                            <ul class="points-list">
                                            <?php foreach($offering_group['key_points'] as $points ) : ?>
                                                <li>
                                                    <?php if( $points['page_link']) : ?>
                                                        <a href="<?php echo esc_url($points['page_link']); ?>">
                                                    <?php endif; ?>
                                                        <?php echo $points['copy']; ?>
                                                    <?php if( $points['page_link']) : ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                        <a class="btn" href="<?php echo esc_attr( $offering_group['practice_area_link']['url'] );  ?>"><?php echo esc_html( $offering_group['practice_area_link']['title'] ); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-4" class="blue-bg">
        <div class="container">
            <div class="columns">
                <div class="column-33 block">
                    <div class="copy">
                        <h2><?php echo esc_html(get_field('p4_section_title')); ?></h2>
                        <p class="body-sub-title"><?php echo esc_html(get_field('p4_section_sub_title')); ?></p>
                        <?php $p4_about_link = get_field('p4_about_page_link'); ?>
                        <a href="<?php echo esc_attr( $p4_about_link['url'] ); ?>" class="btn green desktop"><?php echo esc_html( $p4_about_link['title'] ); ?></a>
                    </div>
                </div>
                <div class="column-66 block split-copy">
                    <?php $p4_banner = get_field('p4_section_banner'); ?>
                    <div class="banner-wrapper">
                        <?php echo wp_get_attachment_image( $p4_banner['id'], 'full'); ?>
                    </div>
                    <div class="columns">
                        <div class="column-50">
                            <p><?php echo esc_html(get_field('p4_left_copy')); ?></p>
                        </div>
                        <div class="column-50">
                            <p><?php echo esc_html(get_field('p4_right_copy')); ?></p>
                            <a href="<?php echo esc_attr( $p4_about_link['url'] ); ?>" class="btn green mobile"><?php echo esc_html( $p4_about_link['title'] ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column-33">
                    <h4>Our Awards</h4>
                </div>
                <div class="column-66">
                <section class="awards">
                    <div class="container">
                        <div class="columns">
                            <div id="hp-awards">
                            <?php if( have_rows('awards','options') ): ?>
                                <?php while( have_rows('awards','options') ): the_row(); 
                                    $image = get_sub_field('award_image');
                                    if( !empty( $image ) ): ?>  
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; 
                                endwhile; 
                            endif;?>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
            <div class="columns">
                <div class="column-33">
                    <h4>What Our Clients Say About Us</h4>
                </div>
                <div class="column-66">
                    <?php $featured_testimonial = get_field('p4_featured_testimonial'); ?>
                    <div class="testimonial">
                        <p><?php echo esc_html($featured_testimonial->post_content); ?></p>
                        <p class="author">
                            — <?php echo esc_html( get_field('testimonial_author', $featured_testimonial->ID) ); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="columns benefits">
                <div class="column-full block">
                    <h3><?php echo esc_html(get_field('p4_sub_section_title')); ?></h3>
                    <?php if( have_rows('p4_benefits_list') ) : ?>
                        <div class="benefits-wrapper">
                        <?php while( have_rows('p4_benefits_list') ) : the_row(); ?>
                            <div class="benefit">
                                <p><?php echo esc_html(get_sub_field('benefit')); ?></p>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <p><?php echo esc_html(get_field('p4_cta_copy')); ?></p>
                    <?php $p4_schedule_button = get_field('p4_schedule_button'); ?>
                    <a href="<?php echo esc_attr( $p4_schedule_button['url'] ); ?>" class="btn green">
                        <?php echo esc_html( $p4_schedule_button['title'] ); ?>  
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-5">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h3><?php echo esc_html(get_field('p5_section_title')); ?></h3>
                    <?php if( have_rows('p5_attorneys')) : ?>
                        <div class="attorney-wrapper">
                            <?php while( have_rows('p5_attorneys') ) : the_row(); ?>
                                <div class="attorney">
                                    <div class="row">
                                        <?php if( get_sub_field('headshot')) : $headshot = get_sub_field('headshot'); ?>
                                            <?php echo wp_get_attachment_image( $headshot['id'], 'full'); ?>
                                        <?php endif; ?>
                                        <?php $name = get_sub_field('name'); ?>
                                        <p class="name"><?php echo $name; ?></p>
                                    </div>
                                    <div class="row">
                                        <p><?php echo esc_html(get_sub_field('excerpt')); ?></p>
                                    </div>
                                    <div class="row">
                                        <a href="<?php echo esc_url(get_sub_field('bio_link')); ?>" class="btn">
                                            More About <?php echo substr($name, 0, strpos($name, " ")); ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-6">
        <div class="container full">
            <div class="columns">
                <div class="column-33 pattern-bg">
                    <?php if( get_field('p6_book_image') ) : $p6_book_img = get_field('p6_book_image'); ?>
                        <?php echo wp_get_attachment_image( $p6_book_img['id'], 'full'); ?>
                    <?php endif; ?>
                </div>
                <div class="column-66 block">
                    <div class="inner-wrapper">
                        <p class="body-sub-title"><?php echo esc_html(get_field('p6_sub_title')); ?></p>
                        <p class="small-title"><?php echo esc_html(get_field('p6_section_title')) ?></p>
                        <?php $p6_download_btn = get_field('book_download_button'); ?>
                        <a href="<?php echo esc_url($p6_download_btn['url']); ?>" class="btn green"><?php echo esc_html($p6_download_btn['title']); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-7">
        <div class="container">
            <div class="columns center">
                <div class="column-25 block">
                    <h2><?php echo esc_html(get_field('p7_section_title')); ?></h2>
                    <p class="body-sub-title"><?php echo esc_html(get_field('p7_copy')) ?></p>
                    <div class="spacer-30"></div>
                    <?php $p7_button = get_field('p7_blog_link_button'); ?>
                    <a href="<?php echo esc_url($p7_button['url']); ?>" class="btn desktop"><?php echo esc_html($p7_button['title']); ?></a>
                </div>
                <div class="column-75">
                        <?php $args = [
                            'post_type'     => 'post',
                            'posts_per_page' =>  2,
                            'post_status'   =>  'publish',
                            'order'         =>  'DESC'
                        ];
                        $posts_query = new WP_Query($args);
                        
                        if( $posts_query->have_posts() ) : ?>
                            <div class="featured-posts-wrapper">
                                <?php while( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
                                    <div class="featured-post">
                                        <?php if( get_post_thumbnail_id( ) ) : $post_img = get_post_thumbnail_id(); ?>
                                            <?php echo wp_get_attachment_image( $post_img, 'full'); ?>
                                        <?php endif; ?>
                                        <div class="copy">
                                            <p class="post-title"><?php echo esc_html( get_the_title() ); ?></p>
                                            <p><?php echo acf_esc_html( get_the_excerpt() ); ?></p>
                                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn">Read More</a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; wp_reset_postdata(); ?>
                        <a href="<?php echo esc_url($p7_button['url']); ?>" class="btn mobile"><?php echo esc_html($p7_button['title']); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-8">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h3><?php echo esc_html( get_field('p8_section_title') ); ?></h3>
                </div>
            </div>
            <?php if( have_rows('p8_category') ) : ?>
            <div class="columns">
                <?php while( have_rows('p8_category') ) : the_row(); ?>
                <div class="column-33">
                    <p class="body-sub-title"><?php echo esc_html( get_sub_field('category_title') ) ?></p>
                        <?php $faqs =  get_sub_field('faqs'); 
                            $count = 0; 
                            foreach( $faqs as $faq ) :
                                $count++;
                                $question = $faq['question'];
                                $answer = $faq['answer']; ?>
                                <div class="accordions<?php echo $count == 1 ? ' active' : ''; ?>">
                                    <div class="accordions_title<?php echo $count == 1 ? ' active' : ''; ?>"><p><?php echo esc_html( $question ); ?><span></span></p></div>
                                    <div class="accordions_content" <?php echo $count == 1 ? ' style="display:block;"' : ''; ?>><p><?php echo acf_esc_html( $answer ); ?></p></div>
                                </div>
                        <?php endforeach; ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!--<section id="panel-9" class="blue-bg">
        <div class="container full">
            <div class="columns">
                <div class="column-full block">
                    <h3><?php echo esc_html( get_field('p9_section_title') ); ?></h3>
                    <p><?php echo esc_html( get_field('p9_copy') ); ?></p>
                    <div id="newsletter"></div>
                    <?php echo do_shortcode( get_field('p9_newsletter_form_embed') ); ?>
                </div>
            </div>
        </div>
    </section>-->

    <section id="panel-10">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php $p10_image = get_field('p10_section_banner'); ?>
                    <?php echo wp_get_attachment_image( $p10_image['id'], 'full'); ?>
                </div>
                <div class="column-50">
                    <h3><?php echo esc_html( get_field('p10_section_title') ); ?></h3>
                    <?php echo acf_esc_html( get_field('p10_copy') ); 
                    $p10_button = get_field('p10_schedule_button'); ?>
                    <a href="<?php echo esc_url( $p10_button['url'] ); ?>" class="btn"><?php echo esc_html( $p10_button['title'] ); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-11" class="blue-bg pattern-bg">
        <div class="container">
            <div class="columns">
                <div class="column-75 block center">
                    <h3><?php echo esc_html( get_field('p11_section_title') ); ?></h3>
                    <iframe src="<?php echo esc_url( get_field('map_embed','options') ); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="copy">
                        <?php echo acf_esc_html( get_field('p11_copy') ); ?>
                    </div>
                    <div class="row">
                        <p class="body-sub-title">Address</p>
                        <p><?php echo acf_esc_html( get_field('address','options') ); ?></p>
                        <a class="btn green" href="<?php the_field('driving_directions','options'); ?>" title="Driving directions" target="blank">Directions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-12">
        <div class="container">
            <div class="columns center">
                <div class="column-33 block">
                    <h2><?php echo esc_html( get_field('p12_section_title') ); ?></h2>
                    <p class="body-sub-title"><?php echo esc_html( get_field('p12_sub_title') ); ?></p>
                    <a class="btn" href="tel:<?php the_field('phone_number','options'); ?>" title="Call Today"><?php the_field('phone_number','options'); ?></a>
                    <div class="spacer-15"></div>
                    <a class="btn" href="https://legacy-counsel.us20.list-manage.com/subscribe?u=bcf0533783644fb38de88613c&id=1c80a7e8a6" title="Sign up for our email newsletter" target="blank">Sign up for our free email newsletter</a>
                </div>
                <div class="column-66">
                    <!-- Start Lawmatics Embedded Snippet -->
                    <script id="lm-embedded-script">
                    !function(e,t,n,a,s,c,i){if(!e[s]){i=e[s]=function(){i.process?i.process.apply(i,arguments):i.queue.push(arguments)},i.queue=[],i.t=1*new Date;var o=t.createElement(n);o.async=1,o.src=a+"?t="+Math.ceil(new Date/c)*c;var r=t.getElementsByTagName(n)[0];r.parentNode.insertBefore(o,r)}}(window,document,"script","https://navi.lawmatics.com/intake.min.js","lm_intake",864e5),lm_intake("3dff9d5e-be75-432b-9c3c-d36c62bd6e67");
                    </script>
                    <!-- End Lawmatics Embedded Snippet -->
                </div>
            </div>
        </div>
    </section>

</div><!-- #front-page -->

<?php get_footer();?>