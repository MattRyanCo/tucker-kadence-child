<?php
/**
 * Setup Child Theme Styles
 */
function taps_kadence_child_enqueue_styles() {
	wp_enqueue_style( 'taps_kadence_child-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'taps_kadence_child_enqueue_styles', 20 );


/**
 * Setup Child Theme Palettes
 *
 * @param string $palettes registered palette json.
 * @return string
 */
function taps_kadence_child_change_palette_defaults( $palettes ) {
	$palettes = '{"palette":[{"color":"#aa3437","slug":"palette1","name":"Palette Color 1"},{"color":"#707070","slug":"palette2","name":"Palette Color 2"},{"color":"#000000","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#efefef","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"},{"color":"#FfFfFf","slug":"palette10","name":"Palette Color Complement"},{"color":"#13612e","slug":"palette11","name":"Palette Color Success"},{"color":"#1159af","slug":"palette12","name":"Palette Color Info"},{"color":"#b82105","slug":"palette13","name":"Palette Color Alert"},{"color":"#f7630c","slug":"palette14","name":"Palette Color Warning"},{"color":"#f5a524","slug":"palette15","name":"Palette Color Rating"}],"second-palette":[{"color":"#2B6CB0","slug":"palette1","name":"Palette Color 1"},{"color":"#215387","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"},{"color":"#FfFfFf","slug":"palette10","name":"Palette Color Complement"},{"color":"#13612e","slug":"palette11","name":"Palette Color Success"},{"color":"#1159af","slug":"palette12","name":"Palette Color Info"},{"color":"#b82105","slug":"palette13","name":"Palette Color Alert"},{"color":"#f7630c","slug":"palette14","name":"Palette Color Warning"},{"color":"#f5a524","slug":"palette15","name":"Palette Color Rating"}],"third-palette":[{"color":"#2B6CB0","slug":"palette1","name":"Palette Color 1"},{"color":"#215387","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"},{"color":"#FfFfFf","slug":"palette10","name":"Palette Color Complement"},{"color":"#13612e","slug":"palette11","name":"Palette Color Success"},{"color":"#1159af","slug":"palette12","name":"Palette Color Info"},{"color":"#b82105","slug":"palette13","name":"Palette Color Alert"},{"color":"#f7630c","slug":"palette14","name":"Palette Color Warning"},{"color":"#f5a524","slug":"palette15","name":"Palette Color Rating"}],"active":"palette"}';
	return $palettes;
}
add_filter( 'kadence_global_palette_defaults', 'taps_kadence_child_change_palette_defaults', 20 );

/**
 * Setup Child Theme Defaults
 *
 * @param array $defaults registered option defaults with kadence theme.
 * @return array
 */
function taps_kadence_child_change_option_defaults( $defaults ) {
	$new_defaults = '{"initial_version":"1.4.1","content_width":{"size":1920,"unit":"px"},"content_narrow_width":{"size":1920,"unit":"px"},"base_font":{"size":{"desktop":17},"lineHeight":{"desktop":1.6},"family":"Helvetica Neue","google":false,"weight":"400","variant":"regular","color":"palette4","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":true},"header_desktop_items":{"top":{"top_left":[],"top_left_center":[],"top_center":[],"top_right_center":[],"top_right":[]},"main":{"main_left":[],"main_left_center":[],"main_center":[],"main_right_center":[],"main_right":[]},"bottom":{"bottom_left":[],"bottom_left_center":[],"bottom_center":[],"bottom_right_center":[],"bottom_right":[]},"flag":false},"transparent_header_enable":true}';
	$new_defaults = json_decode( $new_defaults, true );
	return wp_parse_args( $new_defaults, $defaults );
}
add_filter( 'kadence_theme_options_defaults', 'taps_kadence_child_change_option_defaults', 20 );

function taps_kadence_custom_fonts( $system_fonts ) {
 
  $system_fonts[ 'Helvetica Neue' ] = array(
    'fallback' => 'Arial, sans-serif',
    'weights' => array(
      '400',
    ),
  );
  return $system_fonts;
 
}
add_filter( 'kadence_theme_add_custom_fonts', 'taps_kadence_custom_fonts' );
add_filter( 'kadence_blocks_add_custom_fonts', 'taps_kadence_custom_fonts' );