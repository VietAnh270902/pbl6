<?php
/**
 * Display Header.
 * @package Cake Bakery
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	<header role="banner" class="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'cake-bakery' ); ?></a>
		<div id="header">
			<svg id="header_design" data-name="header design" xmlns="http://www.w3.org/2000/svg" width="100%" height="40" viewBox="0 0 100% 40">
				  <path id="Rectangle_3" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-2" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(56)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-3" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(112)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-4" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(168)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-5" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(224)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-6" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(280)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-7" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(336)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-8" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(392)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-9" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(448)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-10" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(504)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-11" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(560)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-12" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(616)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-13" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(672)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-14" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(728)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-15" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(784)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-16" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(840)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-17" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(896)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-18" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(952)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-19" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1008)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-20" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1064)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-21" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1120)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-22" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1176)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-23" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1232)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-24" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1288)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-25" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1344)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-26" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1400)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-27" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1456)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-28" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1512)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-29" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1568)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-30" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1624)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-31" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1680)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-32" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1736)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-33" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1792)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-34" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1848)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-35" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1904)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-36" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(1960)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-37" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2016)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-38" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2072)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-39" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2128)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-40" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2184)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-41" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2240)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-42" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2296)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-43" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2352)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-44" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2408)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-45" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2464)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-46" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2520)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-47" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2576)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-48" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2632)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-49" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2688)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-50" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2744)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-51" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2800)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-52" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2856)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-53" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2912)" fill="#fdb5c1"></path>
				  <path id="Rectangle_3-54" data-name="Rectangle 3" d="M0,0H56a0,0,0,0,1,0,0V13A27,27,0,0,1,29,40H27A27,27,0,0,1,0,13V0A0,0,0,0,1,0,0Z" transform="translate(2968)" fill="#fdb5c1"></path>
				</svg>
			<div class="container position-relative">
				<div class="header-box">
					<div class="row marrgin-0">
						<div class="logo col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-12 padding-0">
							<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
						</div>
						<div class="col-xl-7 col-lg-7 col-md-2 col-sm-2 col-xs-12 padding-0 HeaderRbx">
							<div class="menu-section">
								<div class="<?php if( get_theme_mod( 'cake_bakery_sticky_header', false) != '') { ?>sticky-menubox<?php } else { ?>close-sticky <?php } ?>">
						    		<?php get_template_part( 'template-parts/navigation/site', 'nav' ); ?>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-0 mobdisplayHide">
							<div class="row marrgin-0">
								<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4">
								<?php if(class_exists('woocommerce')){ ?>
									<div class="cart_no">              
										<a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fa fa-shopping-cart"></i></a>

										<span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span>
									</div>
								<?php } ?>
								</div>

								<div class="col-xl-9 col-lg-8 col-md-8 col-sm-8 padding-0">
									<div class="contactusbtn">
									<?php if(get_theme_mod('cake_bakery_btn_link') != ''){ ?>
										<a href="<?php echo esc_html(get_theme_mod('cake_bakery_btn_link')); ?>"><?php echo esc_html('Order Now', 'cake-bakery'); ?> </a>
									<?php }?>
									</div>
								</div>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if(is_singular()) {?>
		<div class="inner-head">
			<img src="<?php if ( get_header_image() ){ echo esc_url(get_header_image()); } else { echo esc_url(get_template_directory_uri()) ?>/assets/images/head-bg.jpg<?php }?>" class="head-img" alt="<?php echo esc_html('Header Background Image', 'cake-bakery'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 align-self-center">
						<div class="header-content">
							<h1><?php single_post_title(); ?></h1>
							<div class="lt-breadcrumbs">
								<?php cake_bakery_breadcrumb(); ?>
							</div>
						</div>
					</div>
					<?php if(has_post_thumbnail()){?>
						<div class="col-lg-6 col-md-6 align-self-end">
							
						</div>
					<?php }?>
				</div>
				
			</div>
		</div>
	<?php }?>