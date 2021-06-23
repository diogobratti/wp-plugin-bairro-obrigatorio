<?php
/*
Plugin Name: Bairro Obrigatório no Checkout
Description: Plugin para tornar obrigatório o campo de checkout Bairro. Pré-requisito: Brazilian Market on WooCommerce
Author: Diogo Bratti
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'woocommerce_billing_fields', function( $fields ) {
    $fields['billing_neighborhood']['required'] = true;

    return $fields;
}, 20 );

add_filter( 'woocommerce_shipping_fields', function( $fields ) {
    $fields['shipping_neighborhood']['required'] = true;

    return $fields;
}, 20 );