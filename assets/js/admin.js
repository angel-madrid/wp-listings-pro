jQuery(document).ready(function($) {
	jQuery(".feed-select").select2();

	// Save dismiss state
	jQuery( '.notice.is-dismissible' ).on('click', '.notice-dismiss', function ( event ) {
		event.preventDefault();
		var $this = jQuery(this);
		if( ! $this.parent().data( 'key' ) ){
			return;
		}
		$.post( wp_listings_adminL10n.ajaxurl, {
			action: "wp_listings_admin_notice",
			url: wp_listings_adminL10n.ajaxurl,
			nag: $this.parent().data( 'key' ),
			nonce: wp_listings_adminL10n.nonce || ''
		});

	});

	// Make notices dismissible - backward compatabity -4.2 - copied from WordPress 4.2
	jQuery( '.notice.is-dismissible' ).each( function() {
		if( wp_listings_adminL10n.wp_version ){
			return;
		}

		var $this = jQuery( this ),
			$button = jQuery( '<button type="button" class="notice-dismiss"><span class="screen-reader-text"></span></button>' ),
			btnText = wp_listings_adminL10n.dismiss || '';

		// Ensure plain text
		$button.find( '.screen-reader-text' ).text( btnText );

		$this.append( $button );

		$button.on( 'click.wp-dismiss-notice', function( event ) {
			event.preventDefault();
			$this.fadeTo( 100 , 0, function() {
				jQuery(this).slideUp( 100, function() {
					jQuery(this).remove();
				});
			});
		});
	});
});
