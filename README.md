# woocommerce-limit-access

the plugin is still in development 

to select change the user role you want to limit access
change the default administrator on line 19 to the user role you want for example: shop-manager , editor.
Use user role slug
   if ( in_array( 'administrator', (array) $user->roles ) ) {
