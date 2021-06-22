<?php
/*
Plugin Name: Bairro e Telefone Obrigatório no Checkout
Description: Plugin para tornar obrigatório os campos de checkout Bairro e Telefone. Pré-requisito: Brazilian Market on WooCommerce
Author: Diogo Bratti
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'woocommerce_billing_fields', function( $fields ) {
    $fields['billing_neighborhood']['required'] = true;
    $fields['billing_cellphone']['required'] = true;

    return $fields;
}, 20 );

add_filter( 'woocommerce_shipping_fields', function( $fields ) {
    $fields['shipping_neighborhood']['required'] = true;

    return $fields;
}, 20 );