<?php
/**
 * My Account page
 * Assumes you are using bootstrap
 * @author 	WooThemes
 * @edited by 	Ibrahim Mokdad
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
if (! defined ( 'ABSPATH' )) {
	exit (); // Exit if accessed directly
}

wc_print_notices ();
?>

<ul id="myTab" class="nav nav-tabs">
	<li class="active"><a href="#dashboard" data-toggle="tab"> Dashboard </a></li>
	<li><a href="#preorders" data-toggle="tab">Pre-Orders</a></li>
	<li><a href="#orders" data-toggle="tab">Orders</a></li>
	<li><a href="#address" data-toggle="tab">Address</a></li>
	
</ul>
<div id="myTabContent" class="tab-content">
	<div class="tab-pane fade in active" id="dashboard">

		<p class="myaccount_user">
	<?php
	printf ( __ ( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ', $current_user->display_name, wc_get_endpoint_url ( 'customer-logout', '', wc_get_page_permalink ( 'myaccount' ) ) );
	
	printf ( __ ( 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">edit your password and account details</a>.', 'woocommerce' ), wc_customer_edit_account_url () );
	?>
</p>
	</div>
	<div class="tab-pane fade" id="preorders">
		 
			<?php do_action( 'woocommerce_before_my_account' ); ?>
	</div>
	<div class="tab-pane fade" id="orders">
		 
			<?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>
	</div>
	<div class="tab-pane fade" id="address">
		 
		<?php wc_get_template( 'myaccount/my-address.php' ); ?>
	</div>
	 
</div>


<?php do_action( 'woocommerce_after_my_account' ); ?>
