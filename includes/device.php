<?php
/**
 * Device shortcode
 *
 * @package Device_Mockups
 * @version 1.8.1
 */

/**
 * Adds device wrapper shortcode
 *
 * @param $atts
 * @param null $content
 *
 * @return string
 */
function device_mockups_device_wrapper( $atts, $content = null ) {
	$specs = shortcode_atts(
		array(
			'type'        => 'imac',
			'orientation' => '',
			'color'       => '',
			'stacked'     => '',
			'position'    => '',
			'link'        => '',
			'width'       => '',
			'hide'        => false,
			'scroll'      => false,
			'gallery'     => false,
		), $atts
	);

	$device_classes[]   = 'dm-device';
	$screen_classes[] = 'screen';
	$dm_position_type[] = '';
	$dm_hide            = '';
	$dm_stacked         = '';

	if ( 'true' === $specs['scroll'] ) {
		$device_classes[] = 'dm-scroll';
	}

	if ( 'true' === $specs['gallery'] ) {
		$screen_classes[] = 'has-gallery';
		wp_enqueue_script( 'device-mockups-scripts' );
	}

	if ( $specs['hide'] ) {
		$dm_hide = 'dm-hide-' . $specs['hide'];
	}

	if ( $specs['position'] ) {
		$dm_stacked = 'dm-stacked-' . $specs['position'];
	}

	if ( $dm_stacked ) {
		$dm_position_type[] = $dm_stacked;
		$dm_position_type[] = $specs['type'];
	}

	$device_output = '';
	$device_output .= 'open' === $specs['stacked'] ? '<div class="dm-stacked">' . "\n" : '';
	$device_output .= ! empty( $specs['hide'] ) ? '<div class="' . esc_attr( $dm_hide ) . '">' . "\n" : '';
	$device_output .= ! empty( $specs['width'] ) ? '<div class="dm-width" style="width:' . esc_attr( $specs['width'] ) . ';">' . "\n" : '';
	$device_output .= ! empty( $specs['position'] ) ? '<div class="' . esc_attr( join( ' ', $dm_position_type ) ) . ' ">' . "\n" : '';
	$device_output .= '<div class="' . join( ' ', $device_classes ) . '" data-device="' . esc_attr( $specs['type'] ) . '" data-orientation="' . esc_attr( $specs['orientation'] ) . '" data-color="' . esc_attr( $specs['color'] ) . '">' . "\n";
	$device_output .= '<div class="device">' . "\n";
	$device_output .= '<div class="' . esc_attr( join( ' ', $screen_classes ) ) . '">' . "\n";
	$device_output .= ! empty( $specs['link'] ) ? '<a href="' . esc_url( $specs['link'] ) . '">' . "\n" : '';
	$device_output .= do_shortcode( $content ) . "\n";
	$device_output .= ! empty( $specs['link'] ) ? '</a>' . "\n" : '';
	$device_output .= '</div><!-- /.screen -->' . "\n";
	$device_output .= '</div><!-- /.device -->' . "\n";
	$device_output .= '</div><!-- /.dm-device -->' . "\n";
	$device_output .= ! empty( $specs['position'] ) ? '</div><!-- /.dm-stacked- -->' . "\n" : '';
	$device_output .= ! empty( $specs['width'] ) ? '</div><!-- .dm-width -->' . "\n" : '';
	$device_output .= ! empty( $specs['hide'] ) ? '</div><!-- /.hide -->' . "\n" : '';
	$device_output .= 'closed' === $specs['stacked'] ? '</div><!-- /.dm-stacked -->' . "\n" : '';

	wp_enqueue_style( 'device-mockups-styles' );

	return $device_output;
}

add_shortcode( 'device', 'device_mockups_device_wrapper' );
