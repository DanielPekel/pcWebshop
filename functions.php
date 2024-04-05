<?php
if (is_user_logged_in()) {
	show_admin_bar(true);
}
global $templatename;
$templatename = 'PcWebshop';

function getTemplateName(){
    global $templatename;
    return $templatename;
}

require_once('assets/class-wp-bootstrap-navwalker.php');
require_once(__DIR__ . '/core/framework.php');
$menu = array(
    'primary' => 'Primary Menu',
    'sidebar' => 'Sociaal Menu',
);
$widget1 = array(
    'name' => 'Footer',
    'id' => 'footer',
    'description' => 'Geeft widgets weer in de footer (onderaan de pagina).',
    'before_widget' => '<div id="%1$s" class="widget %2$s col-md-4">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
);
$theme_setup = new theme_setup($templatename, 'https://'.$templatename.'.nl');
$customizer = new customizer($templatename, 'https://'.$templatename.'.nl');
//$cpt = new customposttype(
//    $templatename,
//    'Tractoren',
//    'Tractor',
//    'Tractoren',
//    'dashicons-media-spreadsheet',
//    1
//);
//
//$cpt_repair = new customposttype_1(
//	$templatename,
//	'Onderdelen',
//	'Onderdeel',
//	'Onderdelen',
//	'dashicons-media-spreadsheet',
//	2
//);

//$theme_setup->add_woocommerce_support();
$theme_setup->add_post_thumbnails_support();

$theme_setup->add_header_support('banner.png');
$theme_setup->add_custom_logo_support(250, 80);

$theme_setup->add_nav($menu);
$theme_setup->add_widget_area($widget1);


$theme_setup->add_css('main.min');
$theme_setup->add_login_css();
$theme_setup->add_admin_css();


$theme_setup->add_dashboard_footer();
$theme_setup->add_dashboard_admin_bar();
$theme_setup->add_support_widget();

$theme_setup->remove_action_welcome_panel();
$theme_setup->remove_action_dashboard_logo();

$theme_setup->enable_thumnail_size();

// Add the URL Metabox

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
?>
