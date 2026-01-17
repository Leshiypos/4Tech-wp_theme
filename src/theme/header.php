<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fourtech
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-62R8Y096ZF"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-62R8Y096ZF');
	</script>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- Выпадающее меню -->
	<div class="drop_down_menu_desktop" id="drop_down_menu_desktop">
		<div class="wrap_menu">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" class="close_menu" alt="">
			<div class="logo">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_section_big.webp" alt=""></a>

			</div>
			<ul class="links_page">
				<li><a href="/office-equipment/"> <?php pll_e("Оргтехника"); ?> </a></li>
				<li><a href="/licensed-software/"><?php pll_e("Лицензионное ПО"); ?></a></li>
				<li><a href="/network_equipment/"><?php pll_e("Сетевое оборудование"); ?></a></li>
				<li><a href="/it-services/"><?php pll_e("IT-услуги"); ?></a></li>
			</ul>
		</div>
	</div>
	<div id="preloader">
		<div class="wrap_preloader">
			<div class="wrap_img back">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" />
			</div>
			<div class="wrap_img front">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" />
			</div>
		</div>
	</div>