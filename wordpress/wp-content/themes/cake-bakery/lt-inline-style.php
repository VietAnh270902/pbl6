<?php 

	$cake_bakery_custom_css = '';

	// Site Title Color
	$cake_bakery_site_title_color = get_theme_mod('cake_bakery_site_title_color');
	$cake_bakery_custom_css .= '.logo h1 a, .logo p.site-title a {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_site_title_color) . ';';
	$cake_bakery_custom_css .= '}';

	// Site Tagline Color
	$cake_bakery_site_tagline_color = get_theme_mod('cake_bakery_site_tagline_color');
	$cake_bakery_custom_css .= '.logo p.site-description {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_site_tagline_color) . ';';
	$cake_bakery_custom_css .= '}';

	// Slider
	$cake_bakery_slider_hide_show = get_theme_mod('cake_bakery_slider_hide_show',false);
	if($cake_bakery_slider_hide_show == true){
		$cake_bakery_custom_css .= '.page-template-home-custom .inner-head {';
			$cake_bakery_custom_css .= 'display: none;';
		$cake_bakery_custom_css .= '}';
	}

	// Menus Color
	$cake_bakery_menu_color = get_theme_mod('cake_bakery_menu_color');
	$cake_bakery_custom_css .= '.primary-navigation ul li a {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_menu_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_menu_hover_color = get_theme_mod('cake_bakery_menu_hover_color');
	$cake_bakery_custom_css .= '.primary-navigation ul li a:hover {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_menu_hover_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_submenu_color = get_theme_mod('cake_bakery_submenu_color');
	$cake_bakery_custom_css .= '.primary-navigation ul.sub-menu li a {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_submenu_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_submenu_hover_color = get_theme_mod('cake_bakery_submenu_hover_color');
	$cake_bakery_custom_css .= '.primary-navigation ul.sub-menu li a:hover {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_submenu_hover_color) . ';';
	$cake_bakery_custom_css .= '}';

	//Topbar color
	$cake_bakery_timing_color = get_theme_mod('cake_bakery_timing_color');
	$cake_bakery_custom_css .= '.contact-detail p {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_timing_color) . ';';
	$cake_bakery_custom_css .= '}';

	// Slider Color
	$cake_bakery_slider_title_color = get_theme_mod('cake_bakery_slider_title_color');
	$cake_bakery_custom_css .= '#slider .inner_carousel h1 {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_slider_title_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_slider_text_color = get_theme_mod('cake_bakery_slider_text_color');
	$cake_bakery_custom_css .= '#slider .inner_carousel p {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_slider_text_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_slider_btn_text_color = get_theme_mod('cake_bakery_slider_btn_text_color');
	$cake_bakery_slider_btn_border_color = get_theme_mod('cake_bakery_slider_btn_border_color');
	$cake_bakery_custom_css .= '#slider .read-btn a {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_slider_btn_text_color) . '; border-color: ' . esc_attr($cake_bakery_slider_btn_border_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_slider_btn_text_hover_color = get_theme_mod('cake_bakery_slider_btn_text_hover_color');
	$cake_bakery_slider_btnbg_hover_color = get_theme_mod('cake_bakery_slider_btnbg_hover_color');
	$cake_bakery_slider_btn_border_hover_color = get_theme_mod('cake_bakery_slider_btn_border_hover_color');
	$cake_bakery_custom_css .= '#slider .read-btn a:hover {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_slider_btn_text_hover_color) . '; border-color: ' . esc_attr($cake_bakery_slider_btn_border_hover_color) . '; background-color: ' . esc_attr($cake_bakery_slider_btnbg_hover_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_slider_npbtn_color = get_theme_mod('cake_bakery_slider_npbtn_color');
	$cake_bakery_slider_npbtnbg_color = get_theme_mod('cake_bakery_slider_npbtnbg_color');
	$cake_bakery_custom_css .= '#slider .carousel-control-next-icon i, #slider .carousel-control-prev-icon i {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_slider_npbtn_color) . '; background-color: ' . esc_attr($cake_bakery_slider_npbtnbg_color) . ';';
	$cake_bakery_custom_css .= '}';

	// Product color options
	$cake_bakery_product_title_color = get_theme_mod('cake_bakery_product_title_color');
	$cake_bakery_custom_css .= '.woocommerce ul.products li.product .woocommerce-loop-product__title {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_product_title_color) . ' !important;';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_product_price_color = get_theme_mod('cake_bakery_product_price_color');
	$cake_bakery_custom_css .= '.woocommerce ul.products li.product .price {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_product_price_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_product_btn_color = get_theme_mod('cake_bakery_product_btn_color');
	$cake_bakery_product_btn_bg_color = get_theme_mod('cake_bakery_product_btn_bg_color');
	$cake_bakery_custom_css .= '.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, a.added_to_cart.wc-forward {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_product_btn_color) . '; background-color: ' . esc_attr($cake_bakery_product_btn_bg_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_product_btn_hover_color = get_theme_mod('cake_bakery_product_btn_hover_color');
	$cake_bakery_product_sale_color = get_theme_mod('cake_bakery_product_sale_color');
	$cake_bakery_custom_css .= '.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, a.added_to_cart.wc-forward:hover {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_product_sale_color) . '; background-color: ' . esc_attr($cake_bakery_product_btn_hover_color) . ';';
	$cake_bakery_custom_css .= '}';

	$cake_bakery_product_sale_bg_color = get_theme_mod('cake_bakery_product_sale_bg_color');
	$cake_bakery_product_sale_color = get_theme_mod('cake_bakery_product_sale_color');
	$cake_bakery_custom_css .= '.woocommerce span.onsale {';
		$cake_bakery_custom_css .= 'color: ' . esc_attr($cake_bakery_product_sale_color) . '; background-color: ' . esc_attr($cake_bakery_product_sale_bg_color) . ';';
	$cake_bakery_custom_css .= '}';