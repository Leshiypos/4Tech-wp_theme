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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    <!-- <div id="preloader">
      <div class="wrap_preloader">
        <div class="wrap_img back">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" />
        </div>
        <div class="wrap_img front">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" />
        </div>
      </div>
    </div> -->

