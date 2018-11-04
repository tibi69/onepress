<?php
/**
 * Theme Option: Navigation.
 *
 * @package OnePress\Customizer
 * @since Unknown
 */

// Add settings section.
$wp_customize->add_section(
	'onepress_nav',
	array(
		'priority'    => null,
		'title'       => esc_html__( 'Navigation', 'onepress' ),
		'description' => '',
		'panel'       => 'onepress_options',
	)
);

// Menu item padding setting.
$wp_customize->add_setting(
	'onepress_menu_item_padding',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '',
		'transport'         => 'postMessage',
	)
);

// Menu item padding control.
$wp_customize->add_control(
	'onepress_menu_item_padding',
	array(
		'label'       => esc_html__( 'Menu Item Padding', 'onepress' ),
		'description' => esc_html__( 'Padding left and right for Navigation items (pixels).', 'onepress' ),
		'section'     => 'onepress_nav',
	)
);
