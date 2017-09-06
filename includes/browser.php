<?php
/**
 * Browser shortcode
 *
 * @package Device_Mockups
 * @version 1.8.1
 */

/**
 * Adds browser wrapper shortcode
 *
 * @param $atts
 * @param null $content
 *
 * @return string
 */
function device_mockups_browser_wrapper( $atts, $content = null ) {
	$specs = shortcode_atts(
		array(
			'type'    => 'chrome',
			'link'    => '',
			'width'   => '',
			'scroll'  => false,
			'gallery' => false,
		), $atts
	);

	$browser_output = '';
	$browser_classes[] = 'dm-browser';
	$screen_classes[] = 'screen';

	if ( 'true' === $specs['gallery'] ) {
		$screen_classes[] = 'has-gallery';
		wp_enqueue_script( 'device-mockups-scripts' );
	}

	if ( 'true' === $specs['scroll'] ) {
		$browser_classes[] = 'dm-scroll';
	}

	$browser_output .= ! empty( $specs['width'] ) ? '<div class="dm-width" style="width:' . esc_attr( $specs['width'] ) . ';">' . "\n" : '';
	$browser_output .= '<div class="' . join( ' ', $browser_classes ) . '" data-device="' . esc_attr( $specs['type'] ) . '">' . "\n";
	$browser_output .= '<div class="device">' . "\n";
	$browser_output .= '<div class="' . join( ' ', $screen_classes ) . '">' . "\n";
	$browser_output .= ! empty( $specs['link'] ) ? "\t" . '<a href="' . esc_url( $specs['link'] ) . '">' . "\n" : '';
	$browser_output .= do_shortcode( $content ) . "\n";
	$browser_output .= ! empty( $specs['link'] ) ? '</a>' . "\n" : '';
	$browser_output .= '</div><!-- /.screen -->' . "\n";
	$browser_output .= '</div><!-- /.device -->' . "\n";
	$browser_output .= '</div><!-- /.dm-browser -->' . "\n";
	$browser_output .= ! empty( $specs['width'] ) ? '</div><!-- /.dm-width -->' . "\n" : '';

	wp_enqueue_style( 'device-mockups-styles' );

	return $browser_output;
}

add_shortcode( 'browser', 'device_mockups_browser_wrapper' );
