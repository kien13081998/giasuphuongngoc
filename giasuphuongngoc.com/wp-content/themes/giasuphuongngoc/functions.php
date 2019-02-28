<?php
define( 'THEME_URL', get_stylesheet_directory() );

/** Thiết lập theme có thể dịch được
*/
$language_folder = THEME_URL . '/languages';
load_theme_textdomain( 'giasuphuongngoc', $language_folder );

require_once('theme_option.php');




/*
* Thêm chức năng post thumbnail
*/
add_theme_support( 'post-thumbnails' );
/*
* Thêm chức năng title-tag để tự thêm <title>
*/
add_theme_support( 'title-tag' );

add_action( 'init', 'my_custom_menus' );
function my_custom_menus() {
  register_nav_menus(
    array(
        'primary-menu' => __( 'Header Menu' ),
     )
  );
}
function change_submenu_class($menu) {
  $menu = preg_replace('/ class="sub-menu" /','/ class="sub-menu" /',$menu);
  return $menu;
}
add_filter('wp_nav_menu','change_submenu_class');
class WPSE_78121_Sublevel_Walker extends Walker_Nav_Menu {
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
}
function customizer_contact( $wp_customize ) {
      // Tạo section
    $wp_customize->add_section (
        'contact_section',
        array(
            'title' => 'Cài đặt liên hệ',
            'description' => 'Các tùy chọn contact',
            'priority' => 25
        )
    );

    // Tạo setting
    $wp_customize->add_setting (
            'title_contact',
            array(
                'default' => 'zoneland Apartments'
            )
        );

        // Tạo coltrol
        $wp_customize->add_control (
            'title_contact',
            array(
                'label' => 'Title contact',
                'section' => 'contact_section',
                'type' => 'text',
                'settings' => 'title_contact'
            )
        );


}
add_action( 'customize_register', 'customizer_contact');

/** footer function**/
register_sidebar( array(
'name' => 'Title top footer',
'id' => 'title-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => ' ',
'after_widget' => ' ',
'before_title' => ' ',
'after_title' => ' ',
) );


register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => ' ',
'after_widget' => ' ',
'before_title' => ' ',
'after_title' => ' ',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '',
'after_widget' => '',
'before_title' => ' ',
'after_title' => ' ',
) );


 ?>
