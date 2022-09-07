<?php
/**
Set theme constants
*/
define("URL_THEME",get_template_directory_uri());
define("URL_ASSETS",get_template_directory_uri()."/assets");
define("URL_IMAGES",get_template_directory_uri()."/assets/images");
define("URL_JS",get_template_directory_uri()."/assets/js");


/**
Adding shortcode support for html widgets
*/
add_filter('widget_text','do_shortcode');


/**
add theme support for diffrent wordpress stuff
*/
add_theme_support("automatic-feed-links");
add_theme_support("title-tag");


function crunchify_clean_header_hook(){
	wp_deregister_script( 'comment-reply' );
}
add_action('init','crunchify_clean_header_hook');

function crunchify_remove_jquery_migrate( $scripts ) {
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		$script = $scripts->registered['jquery'];

		if ( $script->deps ) {
			$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		}
	}
}
add_action( 'wp_default_scripts', 'crunchify_remove_jquery_migrate' );


/**
Remove emoji stuff from frontend
*/
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');
remove_action('admin_print_scripts','print_emoji_detection_script');
remove_action('admin_print_styles','print_emoji_styles');


/**
add custom thumbnail sizes
*/
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'square', 500, 500, true);
}


/**
MENUS
*/
register_nav_menus(array('primary' => 'Hauptnavigation'));
register_nav_menus(array('meta' => 'Metanavigation'));


/**
Disable Wordpress larger image scaling
*/
add_filter( 'big_image_size_threshold', '__return_false' );
function disable_wp_responsive_images() {
	return 1;
}
add_filter('max_srcset_image_width', 'disable_wp_responsive_images');


/**
MENUS
*/
register_nav_menus(array('primary' => 'Hauptnavigation'));


/**
remove all wordpress meta generator tags
*/
function remove_meta_generators($html){
  $pattern = '/<meta name(.*)=(.*)"generator"(.*)>/i';
  $html = preg_replace($pattern, '', $html);
  return $html;
}
function clean_meta_generators($html){
  ob_start('remove_meta_generators');
}
add_action('get_header','clean_meta_generators', 100);
add_action('wp_footer',function(){ ob_end_flush(); }, 100);


/**
fopen
*/
function esgero_fopen($attr){
  extract(shortcode_atts(array(
      'folder' => '',
      'url' => '',
      'uid' => uniqid()
  ), $attr));
  $handle = fopen(URL_IMAGES."/".$url, "r");
  $output = '<div class="svg-embed" id="svg-'.$uid.'">';
  if($handle) {
    while(($line = fgets($handle))!== false) {
      $output.= $line;
    }
    fclose($handle);
  } else {
    $output.= 'Can&apos;t open file &quot;'.$file.'&quot;';
  }
  $output.= '</div>';
  return $output;
}
add_shortcode('fopen','esgero_fopen');


/**
include styles
*/
function loening_css(){
  wp_enqueue_style('fonts', URL_ASSETS. '/fonts/font.css',null,"2.0.0");
  wp_enqueue_style('fontawesome', URL_ASSETS. '/fontawesome/css/all.min.css',null,"1.0.0");
  wp_enqueue_style('fancybox', URL_ASSETS. '/js/fancybox/jquery.fancybox.min.css',null,"2.0.0");
  // wp_enqueue_style('swiper', URL_JS. '/swiper/css/swiper.min.css',null,"5.4.5");
  wp_enqueue_style('swiper', URL_JS. '/swiper/swiper-bundle.min.css');
  wp_enqueue_style('theme', URL_ASSETS. '/css/theme.css',null,"2.0.1");
}
add_action('wp_enqueue_scripts','loening_css',20);


/**
include scripts
*/
function loening_scripts(){
  wp_enqueue_script('jquery');
  wp_enqueue_script('fancybox', URL_JS. '/fancybox/jquery.fancybox.min.js', array(), '20200519', true );
  // wp_enqueue_script('scrollmagic', URL_JS. '/scrollmagic/minified/ScrollMagic.min.js', array(), '20200319', true );
  // wp_enqueue_script('scrollmagic-debug', URL_JS. '/scrollmagic/minified/plugins/debug.addIndicators.min.js', array(), '20200319', true );
  // wp_enqueue_script('swiper', URL_JS. '/swiper/js/swiper.min.js', array(), '5.4.5', true );
  wp_enqueue_script('swiper', URL_JS. '/swiper/swiper-bundle.min.js', array(), null, true );
  wp_enqueue_script('corejs', URL_JS. '/core.js', array(), '1.3.0', true );
}
add_action('wp_enqueue_scripts','loening_scripts');


/**
Widgets
*/
function loening_widgets_init(){
  register_sidebar(array(
    'name' => 'Footer #1',
    'id' => 'widget-footer-c1',
    'description' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => 'Footer #2',
    'id' => 'widget-footer-c2',
    'description' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => 'Contact Navigation',
    'id' => 'widget-footer-c3',
    'description' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => 'Sidebar Quickcontact',
    'id' => 'widget-quickcontact',
    'description' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => 'Footer Bottom',
    'id' => 'widget-footer-bottom',
    'description' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init','loening_widgets_init');


/**
Tinymce styles
*/
function register_new_buttons( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter( 'mce_buttons_2', 'register_new_buttons' );


function my_mce_before_init_insert_formats($init_array){
    $style_formats = [
      [
        'title' => 'Button (Blue)',
        'selector' => 'a',
        'classes' => 'btn-blue'
      ],
      [
        'title' => 'Button',
        'selector' => 'a',
        'classes' => 'btn'
      ],
      [
        'title' => 'Button (Grey)',
        'selector' => 'a',
        'classes' => 'btn-grey'
      ],
      [
        'title' => 'Opening times',
        'classes' => 'opening-times',
        'inline' => 'span'
      ],
      [
        'title' => 'H3 Large',
        'selector' => 'h3',
        'classes' => 'large'
      ],
      [
        'title' => 'H2 Large',
        'selector' => 'h2',
        'classes' => 'arts'
      ]
    ];
    $init_array['style_formats'] = json_encode( $style_formats );
    return $init_array;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );



function loening_partners($attr){
	extract(shortcode_atts(array(
		'uid' => uniqid()
	),$attr));

	$html = '<div id="partners-'.$uid.'" class="partners-container">';
	$html.= '<div class="partners-grid">';

	$args = array(
		'post_type' => 'partner',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'post_status' => 'publish'
	);
	$partner = new WP_Query( $args );
	if($partner->have_posts()){
		while($partner->have_posts()){
			$partner->the_post();
			$logo = get_field("logo");
			$html.= '<div class="partner-item">';
			$html.= '<a href="'.get_field("website").'" style="background:url('.$logo["url"].') no-repeat center center; background-size:contain" target="_blank" alt="" title="'.get_the_title().'" /></a>';
			$html.= '</div>';
		}
		wp_reset_postdata();
	}
	$html.= '</div>';
	$html.= '</div>';

	return $html;
}
add_shortcode('loening_partners','loening_partners');


/**
Swiper output
*/
function swiperslides($attr){
	$args = array(
		'post_type' => 'slider',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	);
	$html.= '<div class="swiper-container swiper-hero-slider">';
	$html.= '<div class="swiper-wrapper">';
	$slides = new WP_Query( $args );
	if($slides->have_posts()){
		while($slides->have_posts()){
			$slides->the_post();
			$bgdesktop = get_field("background_desktop");
			$bgdesktop = $bgdesktop["url"];
			$bgmobile = get_field("background_mobile");
			$bgmobile = $bgmobile["url"];
			$link = get_field("link");

			$html.= '<div class="swiper-slide">';

			if($link!=""){ $html.= '<a href="'.$link.'">'; }
			$html.= '<img src="'.$bgdesktop.'" alt="" title="" style="width:100%;height:auto" class="desktop-slide" />';
			$html.= '<img src="'.$bgmobile.'" alt="" title="" style="width:100%;height:auto" class="mobile-slide" />';
			if($link!=""){ $html.= '</a>'; }

			$html.= '</div>';
		}
	}
	$html.= '</div>';
	$html.= '<div class="swiper-pagination"></div>';
	$html.= '<div class="swiper-button-prev"></div>';
	$html.= '<div class="swiper-button-next"></div>';
	// $html.= '<div class="swiper-scrollbar"></div>';
	$html.= '</div>';
	return $html;
}
add_shortcode('swiperslides','swiperslides');