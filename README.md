# woocommerce-limit-access

the plugin is still in development 

to select change the user role you want to limit access<br>
change the default administrator on line 19 to the user role you want for example: shop-manager , editor.
<br><br>
Use user role slug


<br>
   if ( in_array( 'administrator', (array) $user->roles ) ) {
