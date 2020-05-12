<?php
/**
 * corporates functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package corporates
 */
function my_acf_google_map_api($api){	
	$api['key'] = 'AIzaSyAfb5zjZrMY-38hJL-rB3HX1OVWev_cwK8';	
	return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

pll_register_string('Подробнее', 'Подробнее', 'Строки');
pll_register_string('Главная', 'Главная', 'Строки');
pll_register_string('Следующая статья', 'Следующая статья', 'Строки');
pll_register_string('Предыдущая статья', 'Предыдущая статья', 'Строки');
pll_register_string('Поделиться:', 'Поделиться:', 'Строки');
pll_register_string('Создать сайт', 'Создать сайт', 'Строки');
pll_register_string('Продвинуть сайт', 'Продвинуть сайт', 'Строки');
pll_register_string('Имя', 'Имя', 'Строки');
pll_register_string('Email', 'Email', 'Строки');
pll_register_string('Телефон', 'Телефон', 'Строки');
pll_register_string('Сообщение', 'Сообщение', 'Строки');
pll_register_string('Cмотреть все', 'Cмотреть все', 'Строки');
pll_register_string('Введите каптчу:', 'Введите каптчу:', 'Строки');
pll_register_string('*Вы не ввели или ввели не верно каптчу!', '*Вы не ввели или ввели не верно каптчу!', 'Строки');
pll_register_string('*Это поле не заполнено или заполнено не верно!', '*Это поле не заполнено или заполнено не верно!', 'Строки');
pll_register_string('Спасибо за Ваше сообщение! Наш менеджер вскоре с Вами свяжется!', 'Спасибо за Ваше сообщение! Наш менеджер вскоре с Вами свяжется!', 'Строки');
pll_register_string('Что-то пошло не так! Попробуйте еще, отправить сообщение', 'Что-то пошло не так! Попробуйте еще, отправить сообщение', 'Строки');
pll_register_string('Отправить', 'Отправить', 'Строки');
pll_register_string('Дизайнер', 'Дизайнер', 'Строки');
pll_register_string('Программист', 'Программист', 'Строки');
pll_register_string('Копирайтер', 'Копирайтер', 'Строки');
pll_register_string('Google аналитик', 'Google аналитик', 'Строки');
pll_register_string('Google аналитик', 'Google аналитик', 'Строки');
pll_register_string('Facebook маркетолог', 'Facebook маркетолог', 'Строки');
pll_register_string('Заказать', 'Заказать', 'Строки');
pll_register_string('Описание', 'Описание', 'Строки');
pll_register_string('Пример', 'Пример', 'Строки');
pll_register_string('Продвижение в google', 'Продвижение в google', 'Строки');
pll_register_string('Продвижение в facebook', 'Продвижение в facebook', 'Строки');
pll_register_string('мобильные прилoжения', 'мобильные прилoжения', 'Строки');
pll_register_string('Визитка', 'Визитка', 'Строки');
pll_register_string('Корпоративный', 'Корпоративный', 'Строки');
pll_register_string('Магазин', 'Магазин', 'Строки');
pll_register_string('Уникальный', 'Уникальный', 'Строки');
pll_register_string('Все', 'Все', 'Строки');
pll_register_string('Сервисы', 'Сервисы', 'Строки');

define('PATH','https://bucks-buddy.com/');
if ( ! function_exists( 'corporates_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function corporates_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on corporates, use a find and replace
		 * to change 'corporates' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'corporates', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'corporates' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'corporates_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'corporates_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function corporates_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'corporates_content_width', 640 );
}
add_action( 'after_setup_theme', 'corporates_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function corporates_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'corporates' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'corporates' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'corporates_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function corporates_scripts() {
	wp_enqueue_style( 'corporates-style', get_stylesheet_uri() );
	wp_deregister_script('jquery');
	wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery-3.2.1.min.js',false, null, true);
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'migrate', get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js',false, null, true);
	wp_enqueue_script( 'owl', get_template_directory_uri().'/plugins/owl.carousel/owl.carousel.js', array('jquery'), false, true);
	wp_enqueue_script( 'wow', get_template_directory_uri().'/plugins/wow/wow.js', array('jquery'), false, true);
	wp_enqueue_script( 'core', get_template_directory_uri().'/js/script.core.js', array('jquery'), false, true);
	wp_enqueue_script( 'init', get_template_directory_uri().'/js/script.init.js', array('jquery'), false, true);
	wp_enqueue_script( 'pjax', get_template_directory_uri().'/js/jquery.pjax.js', array('jquery'), false, true);
	wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array('jquery'), false, true);
	wp_enqueue_script( 'vue', get_template_directory_uri().'/plugins/vue/vue.min.js',false, true);
	wp_enqueue_script( 'vue-carousel', get_template_directory_uri().'/plugins/vue/vue-carousel-3d.min.js', false, true);
	wp_enqueue_script( 'fullpage', get_template_directory_uri() . '/plugins/fullpage/fullpage.js', array('jquery'), false, true);

	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/plugins/fullpage/fullpage.css');
	
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/plugins/owl.carousel/assets/owl.carousel.min.css');
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/plugins/owl.carousel/assets/owl.theme.default.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');

}
add_action( 'wp_enqueue_scripts', 'corporates_scripts' );

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


function register_my_session()
{
	if( !session_id() )
	{
		session_start();
	}
}

add_action('init', 'register_my_session');

function resultCaptcha(){
	$a = rand(1,10);
	$b = rand(1,10);
	return $res = $_SESSION['res'] = $a + $b;
}




add_action( 'wp_enqueue_scripts', 'my_enqueue' );
function my_enqueue() {
	wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/script.init.js', array('jquery') );
	wp_localize_script( 'ajax-script', 'my_ajax_object',
		array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action('wp_ajax_footer_form', 'footer_form');
add_action('wp_ajax_nopriv_footer_form', 'footer_form');
function footer_form(){
	$name = trim(htmlspecialchars($_POST['name']));
	$phone = trim(htmlspecialchars($_POST['phone']));
	$email = trim(htmlspecialchars($_POST['email']));
	$msg   = trim(htmlspecialchars($_POST['msg']));
	$mail_to = get_bloginfo("admin_email");
	$thm  = 'Пользователь заказал консультацию';
	$thm  = "=?utf-8?b?". base64_encode($thm) ."?=";
	$headers = "Content-Type: text/html; charset=utf-8\n";
	$headers .= 'From: Разработка сайтов' . "\r\n";
	$content = "Имя: " . $name . '<br />';
	$content .= "E-mail: " . $email . '<br />';
	$content .= "Телефон: " . $phone . '<br />';
	$content .= "Сообщение: " . $msg . '<br />';
	$title  = 'Пользователь заказал консультацию';
	if(mail($mail_to, $thm, $msg, $headers)){
		$data =  pll__('Спасибо за Ваше сообщение! Наш менеджер вскоре с Вами свяжется!');	
		
	}else
	$data = pll__('Что-то пошло не так! Попробуйте еще, отправить сообщение');


	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ){
		echo $data;
		wp_die();
	}
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Контакты',
		'menu_title'	=> 'Контакты',
	));
	
}



// `Disable Emojis` Plugin Version: 1.7.2
if( 'Отключаем Emojis в WordPress' ){

	/**
	 * Disable the emoji's
	 */
	function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );    
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
		add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
	}
	add_action( 'init', 'disable_emojis' );

	/**
	 * Filter function used to remove the tinymce emoji plugin.
	 * 
	 * @param    array  $plugins  
	 * @return   array             Difference betwen the two arrays
	 */
	function disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		}

		return array();
	}

	/**
	 * Remove emoji CDN hostname from DNS prefetching hints.
	 *
	 * @param  array  $urls          URLs to print for resource hints.
	 * @param  string $relation_type The relation type the URLs are printed for.
	 * @return array                 Difference betwen the two arrays.
	 */
	function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {

		if ( 'dns-prefetch' == $relation_type ) {

			// Strip out any URLs referencing the WordPress.org emoji location
			$emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
			foreach ( $urls as $key => $url ) {
				if ( strpos( $url, $emoji_svg_url_bit ) !== false ) {
					unset( $urls[$key] );
				}
			}

		}

		return $urls;
	}

}
function itsme_disable_feed() {
	wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
}
function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );
add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

remove_action( 'wp_head', 'wlwmanifest_link');

function crunchify_cleanup_query_string( $src ){ 
	$parts = explode( '?', $src ); 
	return $parts[0]; 
} 
add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 ); 
add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action ('wp_head', 'rsd_link');
define('IMG_SIZE', [
	'programming' => [
		'width' => 244,
		'height' => 244,
		'crop' => true
	],
	'event-thumbnail' => [
		'width' => 370,
		'height' => 220,
		'crop' => true
	],
	'carousel' => [
		'width' => 229,
		'height' => 420,
		'crop' => true
	],
	'product' => [
		'width' => 385,
		'height' => 230,
		'crop'  => true
	],
	'icon' => [
		'width' => 90,
		'height' => 90,
		'crop'  => true,
	],
	'slider-big' => [
		'width' => 930,
		'height' => 660,
		'crop'  => true,
	]
]);
function wp_img_resize( $url, $size = '') {

	if(!$url OR !$size) return $url;

	$url = str_replace('http:', 'https:', $url);
	if(mb_strpos($url, '-150x150.') !== false){

		$url = str_replace('-150x150.', '.', $url);
	}

	if(is_array($size)){
		$size_data = $size;
	}
	else{
		$size_data = IMG_SIZE[$size] ?? [];
	}

	if(!$size_data || !isset($size_data['width']) || !$size_data['width'] || mb_strpos(basename($url), '.svg') !== false) return $url;


	$width = (int)$size_data['width'];
	$height = isset($size_data['height']) ? $size_data['height'] : null;
	$crop = isset($size_data['crop']) ? $size_data['crop'] : null;
	$single = isset($size_data['crop']) ? $size_data['crop'] : true;

	$upload_info = wp_upload_dir();
	$upload_dir = $upload_info['basedir'];
	$upload_url = str_replace('http:', 'https:', $upload_info['baseurl']);



	if(mb_strpos( $url, $upload_url ) === false) return false;

	$rel_path = str_replace( $upload_url, '', $url);
	$img_path = $upload_dir . $rel_path;

	if( !file_exists($img_path) OR !getimagesize($img_path) ) return false;

	$info = pathinfo($img_path);
	$ext = $info['extension'];
	list($orig_w,$orig_h) = getimagesize($img_path);

	$dims = image_resize_dimensions($orig_w, $orig_h, $width, $height, $crop);
	$dst_w = $dims[4];
	$dst_h = $dims[5];

	$suffix = "{$dst_w}x{$dst_h}";
	$dst_rel_path = str_replace( '.'.$ext, '', $rel_path);
	$destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";

	if(!$dst_h) {
		$img_url = $url;
		$dst_w = $orig_w;
		$dst_h = $orig_h;
	} elseif(file_exists($destfilename) && getimagesize($destfilename)) {
		$img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
	} else {
		$resized_img_path = image_resize( $img_path, $width, $height, $crop );
		if(!is_wp_error($resized_img_path)) {
			$resized_rel_path = str_replace( $upload_dir, '', $resized_img_path);
			$img_url = $upload_url . $resized_rel_path;
		} else {
			return false;
		}
	}
	if($single) {
		$image = $img_url;
	} else {
		$image = array (
			0 => $img_url,
			1 => $dst_w,
			2 => $dst_h
		);
	}

    /*if($size == 'thumb-max'){
        global $post;
        print_array_server_die(wp_get_attachment_image_url(get_post_meta($post->ID,'thumb_max',true)));
    }*/


    return $image;
}

/*
function true_remove_category_from_category($cat_url) {
	$cat_url = str_replace('/category', '', $cat_url);
	return $cat_url;
}
add_filter('category_link', 'true_remove_category_from_category', 1, 1);*/



/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2019.03.03
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home']     = pll__('Главная'); // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author']   = 'Статьи автора %s'; // текст для страницы автора
	$text['404']      = 'Ошибка 404'; // текст для страницы 404
	$text['page']     = 'Страница %s'; // текст 'Страница N'
	$text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	$wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep            = '<span class="breadcrumbs__separator"> / </span>'; // разделитель между "крошками"
	$before         = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
	$after          = '</span>'; // тег после текущей "крошки"

	$show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_url       = home_url('/');
	$link           = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
	$link          .= '<meta itemprop="position" content="%3$s" />';
	$link          .= '</span>';
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

	} else {

		$position = 0;

		echo $wrap_before;

		if ( $show_home_link ) {
			$position += 1;
			echo $home_link;
		}

		if ( is_category() ) {
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			foreach ( array_reverse( $parents ) as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$cat = get_query_var('cat');
				echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_search() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $show_home_link ) echo $sep;
				echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_time('Y') . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_month() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_day() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
			$position += 1;
			echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$position += 1;
				$post_type = get_post_type_object( get_post_type() );
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;
			} else {
				$cat = get_the_category(); $catID = $cat[0]->cat_ID;
				$parents = get_ancestors( $catID, 'category' );
				$parents = array_reverse( $parents );
				$parents[] = $catID;
				foreach ( $parents as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				if ( get_query_var( 'cpage' ) ) {
					$position += 1;
					echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
					echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					$string = get_the_title();
					$string = strip_tags($string);
					$string = substr($string, 0, 80);
					$string = rtrim($string, "!,.-");
					$string = substr($string, 0, strrpos($string, ' '));
					if ( $show_current ) echo $sep . $before . $string. "… " . $after;
					elseif ( $show_last_sep ) echo $sep;
				}
			}

		} elseif ( is_post_type_archive() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . $post_type->label . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_attachment() ) {
			$parent = get_post( $parent_id );
			$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
			$parents = get_ancestors( $catID, 'category' );
			$parents = array_reverse( $parents );
			$parents[] = $catID;
			foreach ( $parents as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			$position += 1;
			echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_title() . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_page() && $parent_id ) {
			$parents = get_post_ancestors( get_the_ID() );
			foreach ( array_reverse( $parents ) as $pageID ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
			}
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$tagID = get_query_var( 'tag_id' );
				echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . $text['404'] . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
} // end of dimox_breadcrumbs()		


function the_truncated_post($symbol_amount){
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}

/*
 * Постраничная навигация
 */
function posts_pagination(){
    global $wp_query;
    $nav = get_the_posts_pagination( $args = array(
         'show_all' => false,
         'prev_next' => true,
         'end_size' => 2,
         'mid_size' => 2,
         'before_page_number' => '',
         'after_page_number' => '',
         'prev_text' => '‹',
         'next_text' => '›',
    ));
    $nav = preg_replace('#(role)=".+?"#s', '', $nav);
    $nav = preg_replace('~<h2.*?h2>~', '', $nav);
    $nav = str_replace('<a ', '<a rel="nofollow" ', $nav);
    echo $nav;
}