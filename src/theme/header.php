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
    <!-- <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="./assets/fonts/stylesheet.css" /> -->
    <!-- <link rel="stylesheet" href="./assets/css/styles.css" /> -->
    <!-- <link
      rel="stylesheet"
      href="https://unpkg.com/lenis@1.3.4/dist/lenis.css"
    /> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script> -->
    <!-- <script src="./assets/libs/swiper/swiper-bundle.min.js"></script> -->
    <!-- <script src="https://unpkg.com/lenis@1.3.4/dist/lenis.min.js"></script> -->
    <!-- <script src="./assets/js/main.js"></script> -->
    <!-- <script src="./assets/js/sliders.js"></script> -->

    <!-- <script
      type="module"
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"
    ></script> -->
    <!-- Проверка номера -->
    <!-- CSS -->
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.7.4/build/css/intlTelInput.css"
    /> -->

    <!-- JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.7.4/build/js/intlTelInput.min.js"></script>
    Нужен для форматирования/валидации -->


	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
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

