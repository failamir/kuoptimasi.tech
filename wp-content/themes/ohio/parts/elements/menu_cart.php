<?php
	$show_sum = OhioOptions::get( 'page_header_cart_sum_visibility', true );
	$empty_cart_visibility = OhioOptions::get_global( 'woocommerce_cart_icon_empty_visibility', true );
	$cart_custom_img = OhioOptions::get_global( 'woocommerce_cart_custom_image', false );
?>

<div class="cart-button <?php if ( WC()->cart->is_empty() && $empty_cart_visibility == false ) { echo '-hidden'; } ?>">

	<?php if ( $show_sum ) : ?>
		<span class="cart-button-total">
			<a class="cart-customlocation -unlink" href="<?php echo wc_get_cart_url(); ?>"><?php echo WC()->cart->get_total(); ?></a>
		</span>
	<?php endif; ?>

	<span class="holder">
		<button aria-label="cart" class="icon-button cart">

			<?php if ( $cart_custom_img ) : ?>
				<img class="custom-icon" src="<?php echo esc_url( $cart_custom_img ); ?>" alt="<?php esc_html_e( 'Cart image', 'ohio' ); ?>">
			<?php else: ?>
				<i class="icon">
			    	<svg class="default" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 12 16" xml:space="preserve"><path class="st0" d="M9,4V3c0-1.7-1.3-3-3-3S3,1.3,3,3v1H0v10c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V4H9z M4,3c0-1.1,0.9-2,2-2s2,0.9,2,2v1H4V3z"></path></svg>
			    </i>
			<?php endif; ?>

		</button>
		<span class="badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	</span>
	<div class="cart-mini">
		<div class="headline">
			<h5 class="title"><?php esc_html_e( 'Cart review', 'ohio' ); ?></h5>
			<button aria-label="close" class="icon-button -small clb-close -reset">
			    <?php get_template_part( 'parts/elements/icon_close' ); ?>
			</button>
		</div>
		<div class="widget_shopping_cart_content">
			<?php woocommerce_mini_cart(); ?>
		</div>
	</div>
</div>