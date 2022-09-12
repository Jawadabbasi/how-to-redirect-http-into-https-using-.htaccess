Please use that plugin https://wordpress.org/plugins/code-snippets/ & put below the code

<?php 
function woo_related_products_after_price_section(){
	echo do_shortcode('[related_products limit="12"]');
}
add_action('woocommerce_before_add_to_cart_form','woo_related_products_after_price_section');
?>

Note: Make sure products price there on single product page if you can't enter price for any of the specific product then not show in that specific single product page
