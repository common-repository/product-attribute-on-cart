<?php
/*
Plugin Name: Product Attribute on Cart
Plugin URI: https://wordpress.org/plugins/product-attribute-on-cart
Description: This plugin will add product attribute on cart page
Author: Asif Ali
Author URI: http://asifalimca.wordpress.com
Version: 1.1.0
License: GPLv2
*/
add_filter( 'woocommerce_product_variation_title_include_attributes', '__return_false' );
add_filter( 'woocommerce_is_attribute_in_product_name', '__return_false' );