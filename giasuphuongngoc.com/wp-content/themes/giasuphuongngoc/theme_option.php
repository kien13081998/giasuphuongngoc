<?php
// add theme option
function my_admin_scripts() {
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');
}
function my_admin_styles() {
  wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');
add_action ('admin_print_styles','mytheme_add_init');
function mytheme_add_init() {
    if ( is_admin() ) {
        $file_dir=get_bloginfo('template_directory');
        wp_enqueue_style("functions", $file_dir."/admin/custom.css", false, "1.0", "all");
    }
}
add_action( 'wp_enqueue_scripts', 'mytheme_add_init' );
function theme_options_init(){
 register_setting( 'sample_options', 'theme_options');
}
add_action( 'admin_init', 'theme_options_init' );
function theme_options_add_page() {
 add_theme_page( __( 'Theme Options', 'giasuphuongngoc' ), __( 'Theme Options', 'giasuphuongngoc' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
add_action( 'admin_menu', 'theme_options_add_page' );
function theme_options_do_page() {
    global $select_options;
    if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
?>
<div>
<?php screen_icon(); echo "<h2>". __( 'Custom Theme Options', 'giasuphuongngoc' ) . "</h2>"; ?>
<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div>
<p><strong><?php __( 'Options saved', 'giasuphuongngoc' ); ?></strong></p></div>
<?php endif; ?>
<form method="post" action="options.php" enctype="multipart/form-data" >
<?php settings_fields( 'sample_options' ); ?>

<?php $options = get_option( 'theme_options' );
?>
<table class="theme_option">
<tr valign="top"><th scope="row">
<?php __('Logo header & footer','giasuphuongngoc');?>
</th>
<td>
<input id="urllogo" type="hidden" name="theme_options[logo]" value="<?php esc_attr_e( $options['logo'] ); ?>" />
<div id="show_img"><img src="<?php esc_attr_e($options['logo']); ?>"/>
</div>
<input id="upload_logo_button" type="button" value="Upload Image" />
<script type="text/javascript">
jQuery(document).ready(function($) {
$('#upload_logo_button').click(function() {
  formfield = $('#urllogo').attr('name');
  $('#show_img img').remove();
  tb_show('', 'media-upload.php?type=image&TB_iframe=true');
  window.send_to_editor = function(html) {
  imgurl = $.parseHTML(html)[0].src;
  //  imgurl = $('img',html).attr('src');
   $('#show_img').append("<img src='"+imgurl+"'/>");
   $('#urllogo').val(imgurl);
   tb_remove(); }
  return false;
});
});
</script>
</td>
</tr>
</table>
<p>
<input type="submit" value="<?php _e( 'Save Options', 'giasuphuongngoc' ); ?>" class="theme_option_sm"/>
</p>
</form>
</div>
<?php
}
// end add theme option
?>
