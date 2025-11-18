<?php
/**
 * fourtech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fourtech
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fourtech_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on fourtech, use a find and replace
		* to change 'fourtech' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fourtech', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'fourtech' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'fourtech_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

		// Добавляем произвольные тумбы
	add_image_size( 'goods_thumb', 441, 441, true );
	add_image_size( 'icon_ig', 85, 85, true );

}
add_action( 'after_setup_theme', 'fourtech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fourtech_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fourtech_content_width', 640 );
}
add_action( 'after_setup_theme', 'fourtech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fourtech_widgets_init() {
	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar', 'fourtech' ),
	// 		'id'            => 'sidebar-1',
	// 		'description'   => esc_html__( 'Add widgets here.', 'fourtech' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );
}
add_action( 'widgets_init', 'fourtech_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fourtech_scripts() {
	wp_enqueue_style( 'fourtech-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fourtech-style', 'rtl', 'replace' );

	// Поключаем Стили
	wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/assets/libs/swiper/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'fourtech-font-style', get_template_directory_uri().'/assets/fonts/stylesheet.css', array(), _S_VERSION );
	wp_enqueue_style( 'fourtech-main-style', get_template_directory_uri().'/assets/css/styles.css', array(), _S_VERSION );
	wp_enqueue_style( 'fourtech-lenis-style', 'https://unpkg.com/lenis@1.3.4/dist/lenis.css', array(), _S_VERSION );
	wp_enqueue_style( 'fourtech-intlTelInput-style', 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.7.4/build/css/intlTelInput.css', array(), _S_VERSION );

	// Подключаем скрипты
	wp_enqueue_script( 'voltuum-gsap-swiper-script', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'voltuum-ScrollTrigger-script', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'voltuum-swiper-script', get_template_directory_uri() . '/assets/libs/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'voltuum-lenis-script', 'https://unpkg.com/lenis@1.3.4/dist/lenis.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'voltuum-sliders-script', get_template_directory_uri() . '/assets/js/sliders.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'voltuum-intlTelInput-script', 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.7.4/build/js/intlTelInput.min.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'voltuum-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	
	wp_localize_script('voltuum-main-script', 'my_ajax_object', array(
		'ajax_url' => admin_url('admin-ajax.php'),
    ));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fourtech_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custome posts type
 */
require get_template_directory() . '/inc/cpt.php';

// Отправка формы AJAX main form
function handle_custom_contact_form_ajax() {
    if ( !isset($_POST['custom_contact_form_nonce']) || !wp_verify_nonce($_POST['custom_contact_form_nonce'], 'custom_contact_form') ) {
        wp_send_json_error(array('message' => 'Security error!'));
    }

    $number = sanitize_text_field($_POST['phone_e164']);

    $to = get_option('admin_email');
	$from = defined('SMTP_USER') ? constant('SMTP_USER') : 'info@4tech.kz';
    $subject = 'A message has been sent from your 4Tech website.';
    $message = "Number: $number \n ------- \nThis message was received from the 4TECH website";
    $headers = array('From: '. get_bloginfo('name') .' <'. $from .'>'); //Заголовок должен содержать адрес почты, зарегестрированный в SMTP

    $sent = wp_mail($to, $subject, $message, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Спасибо! Ваш номер телефона отправлен'));
    } else {
        wp_send_json_error(array('message' => 'Ошибка отправки. Попробуйте позже'));
    }

    wp_die();
}
add_action('wp_ajax_custom_contact_form', 'handle_custom_contact_form_ajax');
add_action('wp_ajax_nopriv_custom_contact_form', 'handle_custom_contact_form_ajax');

// Отправка формы AJAX popup form
function handle_custom_contact_form_popup_ajax() {
    if ( !isset($_POST['custom_contact_form_popup_nonce']) || !wp_verify_nonce($_POST['custom_contact_form_popup_nonce'], 'custom_contact_form_popup') ) {
        wp_send_json_error(array('message' => 'Security error!'));
    }

    $number = sanitize_text_field($_POST['phone_e164']);
    $name = sanitize_text_field($_POST['your_name']);

    $to = get_option('admin_email');
	$from = defined('SMTP_USER') ? constant('SMTP_USER') : 'info@4tech.kz';
    $subject = 'A message has been sent from your 4Tech website.';
    $message = "Name: $name\nNumber: $number \n ------- \nThis message was received from the 4TECH website";
    $headers = array('From: '. get_bloginfo('name') .' <'. $from .'>'); //Заголовок должен содержать адрес почты, зарегестрированный в SMTP

    $sent = wp_mail($to, $subject, $message, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Спасибо! Ваш данные отправлены'));
    } else {
        wp_send_json_error(array('message' => 'Ошибка отправки. Попробуйте позже'));
    }

    wp_die();
}
add_action('wp_ajax_custom_contact_form_popup', 'handle_custom_contact_form_popup_ajax');
add_action('wp_ajax_nopriv_custom_contact_form_popup', 'handle_custom_contact_form_popup_ajax');

// Тестовая настройка почтового сервера через Docker
add_action('phpmailer_init', function ($m) {
	$host = defined('SMTP_HOST') ? constant('SMTP_HOST') : 'smtp.gmail.com';
    $port = defined('SMTP_PORT') ? (int) constant('SMTP_PORT') : 587;
    $user = defined('SMTP_USER') ? constant('SMTP_USER') : '';
    $pass = defined('SMTP_PASS') ? constant('SMTP_PASS') : '';
    $secure = defined('SMTP_SECURE') ? constant('SMTP_SECURE') : 'tls';


  $m->isSMTP();
  $m->Host = $host;
  $m->Port = $port;           // или 465 + 'ssl'
  $m->SMTPSecure = $secure;
  $m->SMTPAuth = true;
  $m->Username = $user;
  $m->Password = $pass; // пароль приложения
});



// разрешить загрузку SVG только администраторам
// Разрешаем SVG только администраторам
add_filter('upload_mimes', function ($mimes) {
    if (current_user_can('manage_options')) {
        $mimes['svg']  = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
    } else {
        // на всякий случай запретим, если кто-то добавил ранее
        unset($mimes['svg'], $mimes['svgz']);
    }
    return $mimes;
});
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if (in_array($ext, ['svg','svgz'], true)) {
        $data['ext']             = 'svg';
        $data['type']            = 'image/svg+xml';
        $data['proper_filename'] = $data['proper_filename'] ?: $filename;
    }
    return $data;
}, 10, 4);
// Минимальный фикс превью в админке
add_action('admin_head', function () {
    echo '<style>
      .attachment .thumbnail img[src$=".svg"],
      .media-icon img[src$=".svg"]{ width:100%; height:auto; }
    </style>';
});

// убираем админ-бар
add_filter('show_admin_bar', '__return_false'); 