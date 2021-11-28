<?php
/*
    Plugin Name: Woocommerce Limit Access
    Plugin URI: https://github.com/K4H3NY4
    Description:       This plugin will Limit access to woocommerce product edit option to the user role selected
    Author: John Kahenya
    Version: 0.3
    Author URI: https://github.com/K4H3NY4
    License:           GPL-2.0+
    License URI:       http://www.gnu.org/licenses/gpl-2.0.txt

 */

//Hide duplicate buttons

add_filter( 'woocommerce_register_post_type_shop_order','your_function_name' );
function your_function_name($fields) {
    $user = wp_get_current_user();
    if ( in_array( 'administrator', (array) $user->roles ) ) {
      echo(' <style>
	span.duplicate {
    display: none !important;
}
	
	div#export-action {
    display: none !important;
}
	div#duplicate-action {
    display: none !important;
}

div#general_product_data {
   display: none !important;
}

li.general_options.general_tab {
   display: none !important;
}


li.shipping_options.shipping_tab {
   display: none !important;
}


li.product_labels {
   display: none !important;
}


li.marketplace-suggestions_options.marketplace-suggestions_tab {
   display: none !important;
}


li.linked_product_options.linked_product_tab {
   display: none !important;
}


li.advanced_options.advanced_tab {
   display: none !important;
}


input#title {
 pointer-events: none !important;
}

#delete-action {
    float: left;
    line-height: 2.30769231;
    display: none !important;
}

div#catalog-visibility {
    display: none !important;
}

div#misc-publishing-actions {
    display: none !important;
}

div#preview-action {
    display: none !important;
}

li.preorder_options.preorder_tab {
    display: none !important;
}

span.trash {
    display: none !important;
}

span.inline.hide-if-no-js {
    display: none;
}

</style> ');
    } else {
        return $fields;
    }
}



