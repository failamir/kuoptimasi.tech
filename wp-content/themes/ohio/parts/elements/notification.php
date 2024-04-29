<?php
	if ( !OhioOptions::get_global( 'notification_bar', false ) ) return; // exif if not visible
	$notification_link = OhioOptions::get_global( 'notification_link' );
	$notification_button = OhioOptions::get_global( 'notification_button' );
	$notification_blur = OhioOptions::get_global( 'notification_blur_effect', true );

	if ( $notification_button ) {
		$notification_button_link = OhioOptions::get_global( 'notification_button_link' );
	}
?>

<?php if ( !isset( $_COOKIE['notification'] ) && !OhioSettings::is_coming_soon_page() ) : ?>

	<div class="notification">
		<div class="alert -small -fixed<?php if ( $notification_blur ) { echo esc_attr( ' -blur' ); } ?>">
		    <p class="alert-message -unspace">
		    	<?php echo wp_kses( OhioOptions::get_global( 'notification_text' ), 'post' ); ?>

		    	<?php if ( $notification_link ) : ?>
					<a target="<?php echo esc_html( $notification_link['target'] ); ?>" href="<?php echo esc_url( $notification_link['url'] ); ?>">
						<?php echo esc_html( $notification_link['title'] ); ?>
					</a>
				<?php endif; ?>
	    	</p>
			<?php if ( $notification_button && $notification_button_link ) : ?>
				<a target="<?php echo esc_html( $notification_button_link['target'] ); ?>" href="<?php echo esc_url( $notification_button_link['url'] ); ?>" class="button -small">
					<?php echo esc_html( $notification_button_link['title'] ) ?>
				</a>
			<?php endif; ?>
	        <button aria-label="close" class="icon-button -small">
	    		<?php get_template_part( 'parts/elements/icon_close' ); ?>
			</button>
		</div>
    </div>

<?php endif; ?>