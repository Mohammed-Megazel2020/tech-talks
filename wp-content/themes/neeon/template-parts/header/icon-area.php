<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

?>
<div class="header-icon-area">
	<?php	
	if ( NeeonTheme::$options['search_icon'] ) {
		get_template_part( 'template-parts/header/icon', 'search' );
	}
	if ( NeeonTheme::$options['cart_icon'] && class_exists( 'WC_Widget_Cart' ) ){
		get_template_part( 'template-parts/header/icon', 'cart' );
	}
	if ( NeeonTheme::$options['vertical_menu_icon'] && has_nav_menu( 'topright' ) ){
		get_template_part( 'template-parts/header/icon', 'offcanvas' );
	}
	?>
</div>