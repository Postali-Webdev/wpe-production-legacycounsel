<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<?php if( is_page_template( ['page-interior.php', 'page-practice-parent.php'] ) ) : 
	if (!empty(get_field('banner_background_image'))) { 
		$bg_image = get_field('banner_background_image');
	} else { 
		$bg_image = get_field('default_background_image','options');
	} ?>
	<link rel="preload" as="image" href="<?php echo checkWebpCompatibility($bg_image); ?>" />
<?php endif; ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MZNWKND5');</script>
<!-- End Google Tag Manager -->

<!-- Add JSON Schema here -->
<?php 
// Global Schema
$global_schema = get_field('global_schema', 'options');
if ( !empty($global_schema) ) :
    echo '<script type="application/ld+json">' . $global_schema . '</script>';
endif;

// Single Page Schema
$single_schema = get_field('single_schema');
if ( !empty($single_schema) ) :
    echo '<script type="application/ld+json">' . $single_schema . '</script>';
endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>

<?php get_template_part('block','design'); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<?php get_template_part('block','font-select'); ?>

</head>

<body <?php body_class(); ?>>
	<a class="skip-link" href="#main-content">Skip to Main Content</a>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZNWKND5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<a href="/" class="custom-logo-link" rel="home" aria-current="page">
					<img width="610" height="220" src="/wp-content/uploads/2024/03/Legacy-Counsel-Full-Color-Logo-Email-White.png" class="custom-logo" alt="Legacy Counsel PLC" decoding="async" fetchpriority="high">
				</a>
			</div>

            <div class="client-portal">
                <a href="https://app.decisionvault.com/login/legacycounselplc" target="blank">Client Portal <img src="/wp-content/uploads/2026/01/client_2.svg" alt="client portal"></a>
            </div>
			
			<div id="header-top_right">
				<div id="header-top_right_menu">
                    <nav role="navigation">
                    <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'header-nav'
                        );
                        wp_nav_menu( $args );
                    ?>	
                    </nav>
					<div id="header-top_mobile">
						<div id="menu-icon" class="toggle-nav">
							<span class="line line-1"></span>
							<span class="line line-2"></span>
							<span class="line line-3"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> 

    <span id="main-content"></span>