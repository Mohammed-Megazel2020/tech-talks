<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */
namespace radiustheme\neeon\Customizer\Settings;

use radiustheme\neeon\Customizer\NeeonTheme_Customizer;
use radiustheme\neeon\Customizer\Controls\Customizer_Switch_Control;
use radiustheme\neeon\Customizer\Controls\Customizer_Separator_Control;
use radiustheme\neeon\Customizer\Controls\Customizer_Image_Radio_Control;
use WP_Customize_Media_Control;
use WP_Customize_Color_Control;
/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
class NeeonTheme_WooCommerce_Single_Layout_Settings extends NeeonTheme_Customizer {

	public function __construct() {
        parent::instance();
        $this->populated_default_data();
        // Register Page Controls
        add_action( 'customize_register', array( $this, 'register_woo_single_layout_controls' ) );
	}

    public function register_woo_single_layout_controls( $wp_customize ) {

	
		// Content padding top
        $wp_customize->add_setting( 'product_padding_top',
            array(
                'default' => $this->defaults['product_padding_top'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_sanitize_integer',
            )
        );
        $wp_customize->add_control( 'product_padding_top',
            array(
                'label' => __( 'Content Padding Top', 'neeon' ),
                'section' => 'wc_product_layout_section',
                'type' => 'number',
            )
        );
        // Content padding bottom
        $wp_customize->add_setting( 'product_padding_bottom',
            array(
                'default' => $this->defaults['product_padding_bottom'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_sanitize_integer',
            )
        );
        $wp_customize->add_control( 'product_padding_bottom',
            array(
                'label' => __( 'Content Padding Bottom', 'neeon' ),
                'section' => 'wc_product_layout_section',
                'type' => 'number',
            )
        );
		
		$wp_customize->add_setting( 'product_banner',
            array(
                'default' => $this->defaults['product_banner'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_switch_sanitization',
            )
        );
        $wp_customize->add_control( new Customizer_Switch_Control( $wp_customize, 'product_banner',
            array(
                'label' => __( 'Banner', 'neeon' ),
                'section' => 'wc_product_layout_section',
            )
        ) );
		
		$wp_customize->add_setting( 'product_breadcrumb',
            array(
                'default' => $this->defaults['product_breadcrumb'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_switch_sanitization',
            )
        );
        $wp_customize->add_control( new Customizer_Switch_Control( $wp_customize, 'product_breadcrumb',
            array(
                'label' => __( 'Breadcrumb', 'neeon' ),
                'section' => 'wc_product_layout_section',
            )
        ) );
		
        // Banner BG Type 
        $wp_customize->add_setting( 'product_bgtype',
            array(
                'default' => $this->defaults['product_bgtype'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_radio_sanitization',
            )
        );
        $wp_customize->add_control( 'product_bgtype',
            array(
                'label' => __( 'Banner Background Type', 'neeon' ),
                'section' => 'wc_product_layout_section',
                'description' => esc_html__( 'This is banner background type.', 'neeon' ),
                'type' => 'select',
                'choices' => array(
                    'bgimg' => esc_html__( 'BG Image', 'neeon' ),
                    'bgcolor' => esc_html__( 'BG Color', 'neeon' ),
                ),
            )
        );

        $wp_customize->add_setting( 'product_bgimg',
            array(
                'default' => $this->defaults['product_bgimg'],
                'transport' => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );
        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'product_bgimg',
            array(
                'label' => __( 'Banner Background Image', 'neeon' ),
                'description' => esc_html__( 'This is the description for the Media Control', 'neeon' ),
                'section' => 'wc_product_layout_section',
                'mime_type' => 'image',
                'button_labels' => array(
                    'select' => __( 'Select File', 'neeon' ),
                    'change' => __( 'Change File', 'neeon' ),
                    'default' => __( 'Default', 'neeon' ),
                    'remove' => __( 'Remove', 'neeon' ),
                    'placeholder' => __( 'No file selected', 'neeon' ),
                    'frame_title' => __( 'Select File', 'neeon' ),
                    'frame_button' => __( 'Choose File', 'neeon' ),
                ),
            )
        ) );

        // Banner background color
        $wp_customize->add_setting('product_bgcolor', 
            array(
                'default' => $this->defaults['product_bgcolor'],
                'type' => 'theme_mod', 
                'capability' => 'edit_theme_options', 
                'transport' => 'refresh', 
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_bgcolor',
            array(
                'label' => esc_html__('Banner Background Color', 'neeon'),
                'settings' => 'product_bgcolor', 
                'priority' => 10, 
                'section' => 'wc_product_layout_section', 
            )
        ));
		
		// Page background image
		$wp_customize->add_setting( 'product_page_bgimg',
            array(
                'default' => $this->defaults['product_page_bgimg'],
                'transport' => 'refresh',
                'sanitize_callback' => 'absint',
            )
        );
        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'product_page_bgimg',
            array(
                'label' => __( 'Page / Post Background Image', 'neeon' ),
                'description' => esc_html__( 'This is the description for the Media Control', 'neeon' ),
                'section' => 'wc_product_layout_section',
                'mime_type' => 'image',
                'button_labels' => array(
                    'select' => __( 'Select File', 'neeon' ),
                    'change' => __( 'Change File', 'neeon' ),
                    'default' => __( 'Default', 'neeon' ),
                    'remove' => __( 'Remove', 'neeon' ),
                    'placeholder' => __( 'No file selected', 'neeon' ),
                    'frame_title' => __( 'Select File', 'neeon' ),
                    'frame_button' => __( 'Choose File', 'neeon' ),
                ),
            )
        ) );
		
		$wp_customize->add_setting('product_page_bgcolor', 
            array(
                'default' => $this->defaults['product_page_bgcolor'],
                'type' => 'theme_mod', 
                'capability' => 'edit_theme_options', 
                'transport' => 'refresh', 
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_page_bgcolor',
            array(
                'label' => esc_html__('Page / Post Background Color', 'neeon'),
                'settings' => 'product_page_bgcolor', 
                'section' => 'wc_product_layout_section', 
            )
        ));
        

    }

}

/**
 * Initialise our Customizer settings only when they're required
 */
if ( class_exists( 'WP_Customize_Control' ) ) {
	new NeeonTheme_WooCommerce_Single_Layout_Settings();
}