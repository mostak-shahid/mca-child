<?php
/**
 * @snippet       Remove shop page title - WooCommerce Shop
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.5.7
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_filter( 'woocommerce_show_page_title', 'bbloomer_hide_shop_page_title' );
 
function bbloomer_hide_shop_page_title( $title ) {
   if ( is_shop() ) $title = false;
   return $title;
}
/**
 * @snippet       Remove cat page title - WooCommerce Cat pages
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.5.7
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_filter( 'woocommerce_show_page_title', 'bbloomer_hide_cat_page_title' );
 
function bbloomer_hide_cat_page_title( $title ) {
   if ( is_product_category() ) $title = false;
   return $title;
}

/**
 * Remove the breadcrumbs 
 */
add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}