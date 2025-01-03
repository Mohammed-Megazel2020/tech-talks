<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */
namespace radiustheme\neeon\Customizer\Settings;

use radiustheme\neeon\Customizer\NeeonTheme_Customizer;
use radiustheme\neeon\Customizer\Controls\Customizer_Switch_Control;
use radiustheme\neeon\Customizer\Controls\Customizer_Image_Radio_Control;

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
class NeeonTheme_Woo_Product_Settings extends NeeonTheme_Customizer {

	public function __construct() {
	    parent::instance();
        $this->populated_default_data();
        // Add Controls
        add_action( 'customize_register', array( $this, 'register_woo_product_controls' ) );
	}

    public function register_woo_product_controls( $wp_customize ) {
		
        // Social
        $wp_customize->add_setting( 'wc_product_social_icon',
            array(
                'default' => $this->defaults['wc_product_social_icon'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_switch_sanitization',
            )
        );
        $wp_customize->add_control( new Customizer_Switch_Control( $wp_customize, 'wc_product_social_icon',
            array(
                'label' => __( 'Social', 'neeon' ),
                'section' => 'product_layout_section',
            )
        ) );

        // Meta
        $wp_customize->add_setting( 'wc_product_meta',
            array(
                'default' => $this->defaults['wc_product_meta'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_switch_sanitization',
            )
        );
        $wp_customize->add_control( new Customizer_Switch_Control( $wp_customize, 'wc_product_meta',
            array(
                'label' => __( 'Meta', 'neeon' ),
                'section' => 'product_layout_section',
            )
        ) );

		// Wishlist
        // $wp_customize->add_setting( 'wc_product_wishlist_icon',
        //     array(
        //         'default' => $this->defaults['wc_product_wishlist_icon'],
        //         'transport' => 'refresh',
        //         'sanitize_callback' => 'rttheme_switch_sanitization',
        //     )
        // );
        // $wp_customize->add_control( new Customizer_Switch_Control( $wp_customize, 'wc_product_wishlist_icon',
        //     array(
        //         'label' => __( 'Wishlist', 'neeon' ),
        //         'section' => 'product_layout_section',
        //     )
        // ) );
		
        // Compare
        $wp_customize->add_setting( 'wc_product_compare_icon',
            array(
                'default' => $this->defaults['wc_product_compare_icon'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_switch_sanitization',
            )
        );
        $wp_customize->add_control( new Customizer_Switch_Control( $wp_customize, 'wc_product_compare_icon',
            array(
                'label' => __( 'Compare', 'neeon' ),
                'section' => 'product_layout_section',
            )
        ) );
		
        // Compare
        $wp_customize->add_setting( 'wc_product_quickview_icon',
            array(
                'default' => $this->defaults['wc_product_quickview_icon'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_switch_sanitization',
            )
        );
        $wp_customize->add_control( new Customizer_Switch_Control( $wp_customize, 'wc_product_quickview_icon',
            array(
                'label' => __( 'Quickview', 'neeon' ),
                'section' => 'product_layout_section',
            )
        ) );

        /*Related product*/
        $wp_customize->add_setting( 'related_woo_product',
            array(
                'default' => $this->defaults['related_woo_product'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_switch_sanitization',
            )
        );
        $wp_customize->add_control( new Customizer_Switch_Control( $wp_customize, 'related_woo_product',
            array(
                'label' => __( 'Related Product', 'neeon' ),
                'section' => 'product_layout_section',
            )
        ));

        $wp_customize->add_setting( 'related_product_title',
            array(
                'default' => $this->defaults['related_product_title'],
                'transport' => 'refresh',
                'sanitize_callback' => 'rttheme_text_sanitization',
            )
        );
        $wp_customize->add_control( 'related_product_title',
            array(
                'label' => __( 'Related Product', 'neeon' ),
                'section' => 'product_layout_section',
                'type' => 'text',
                'active_callback'   => 'rttheme_is_related_woo_enabled', 
            )
        );

    }

}

/**
 * Initialise our Customizer settings only when they're required
 */
if ( class_exists( 'WP_Customize_Control' ) ) {
	new NeeonTheme_Woo_Product_Settings();
}
