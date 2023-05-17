<?php 

function woo_related_products_after_price_section(){
	echo do_shortcode('[related_products limit="12"]');
}
add_action('woocommerce_before_add_to_cart_form','woo_related_products_after_price_section');

?>