<?php
/*
	Subscribe popup custom styles

    Table of contents: (use search)
    # 1. Variables
    # 2. Overlay background color
    # 3. Background type
    # 4. Background color
    # 5. Popup height
    # 6. Popup width
    # 7. Title typo
    # 8. Description typo
    # 9. Form details typo
    # 10. Hide button typo
*/

# 1. Variables
$popup_overlay_background_color = OhioOptions::get_global( 'subscribe_popup_overlay_color', null, false, true );
$popup_close_button_color = OhioOptions::get_global( 'subscribe_popup_close_button_color', null, false, true );
$popup_background_type = OhioOptions::get_global( 'subscribe_popup_background_type', 'color' );
$popup_background_color = OhioOptions::get_global( 'subscribe_popup_background_color' );
$subscribe_popup_title_typo = OhioOptions::get_global( 'subscribe_popup_title_typo' );
$subscribe_popup_description_typo = OhioOptions::get_global( 'subscribe_popup_details_typo' );
$subscribe_popup_form_typo = OhioOptions::get_global( 'subscribe_popup_form_typo' );
$subscribe_popup_close_typo = OhioOptions::get_global( 'subscribe_popup_close_typo' );
$subscribe_popup_height = OhioOptions::get_global( 'subscribe_popup_height' );
$subscribe_popup_width = OhioOptions::get_global( 'subscribe_popup_width' );

# 2. Overlay background color
if ( $popup_overlay_background_color ) {
    $_selector = [
        '.clb-popup:not(.-slide-in)'
    ];
    $_css = 'background-color:' . $popup_overlay_background_color . ';';
    OhioBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

# 3. Close button color
if ( $popup_close_button_color ) {
    $_selector = [
        '.clb-popup .close-bar .icon-button .icon',
        '.clb-popup.-slide-in .close-bar .icon-button .icon'
    ];
    $_css = 'color:' . $popup_close_button_color . ';';
    OhioBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

# 3. Background type
if ( $popup_background_type == 'image' ) {
	$popup_background_image_css = OhioHelper::get_background_image_css_by_type( 'subscribe_popup', 'global', false, 'medium_large' );

	if ( $popup_background_image_css ) {
		$_selector = [
			'.popup-subscribe .thumbnail'
		];
		OhioBuffer::pack_dynamic_css_to_buffer( $_selector, $popup_background_image_css );
	}
}

# 4. Background color
if ( $popup_background_color ) {
    $_selector = [
		'.popup-subscribe'
	];
    $_css = 'background-color:' . $popup_background_color . ';';
    OhioBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

# 5. Popup height
if ( $subscribe_popup_height ) {
    $_selector = [
        '.popup-subscribe'
    ];
    $_css = 'height:${height}px;';
    $_css = OhioHelper::parse_responsive_height_to_css( $subscribe_popup_height, $_css );
    if ( $_css['desktop'] ) {
        $_style_block = implode( ',', $_selector ) . '{' . $_css['desktop'] . '}';
        OhioBuffer::append_to_dynamic_css_buffer( $_style_block, 'desktop' );
    }
    if ( $_css['tablet'] ) {
        $_style_block = implode( ',', $_selector ) . '{' . $_css['tablet'] . '}';
        OhioBuffer::append_to_dynamic_css_buffer( $_style_block, 'tablet' );
    }
    if ( $_css['mobile'] ) {
        $_style_block = implode( ',', $_selector ) . '{' . $_css['mobile'] . '}';
        OhioBuffer::append_to_dynamic_css_buffer( $_style_block, 'mobile' );
    }
}

# 6. Popup width
if ( $subscribe_popup_width ) {
    $_selector = [
        '.popup-subscribe'
    ];
    $_css = 'width:${height}px;';
    $_css = OhioHelper::parse_responsive_height_to_css( $subscribe_popup_width, $_css );
    if ( $_css['desktop'] ) {
        $_style_block = implode( ',', $_selector ) . '{' . $_css['desktop'] . '}';
        OhioBuffer::append_to_dynamic_css_buffer( $_style_block, 'desktop' );
    }
    if ( $_css['tablet'] ) {
        $_style_block = implode( ',', $_selector ) . '{' . $_css['tablet'] . '}';
        OhioBuffer::append_to_dynamic_css_buffer( $_style_block, 'tablet' );
    }
    if ( $_css['mobile'] ) {
        $_style_block = implode( ',', $_selector ) . '{' . $_css['mobile'] . '}';
        OhioBuffer::append_to_dynamic_css_buffer( $_style_block, 'mobile' );
    }
}

# 7. Title typo
if ( $subscribe_popup_title_typo ) {
    $subscribe_popup_title_typo_css = OhioHelper::parse_acf_typo_to_css( $subscribe_popup_title_typo );

    if ( $subscribe_popup_title_typo_css ) {
        $_selector = [
            '.popup-subscribe .title'
        ];
        $_css = $subscribe_popup_title_typo_css;
        OhioBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
    }
}

# 8. Description typo
if ( $subscribe_popup_description_typo ) {
    $subscribe_popup_description_typo_css = OhioHelper::parse_acf_typo_to_css( $subscribe_popup_description_typo );

    if ( $subscribe_popup_description_typo_css ) {
        $_selector = [
            '.popup-subscribe p'
        ];
        $_css = $subscribe_popup_description_typo_css;
        OhioBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
    }
}

# 9. Form details typo
if ( $subscribe_popup_form_typo ) {
    $subscribe_popup_form_typo_css = OhioHelper::parse_acf_typo_to_css( $subscribe_popup_form_typo );

    if ( $subscribe_popup_form_typo_css ) {
        $_selector = [
            '.popup-subscribe .contact-form .wpcf7-list-item-label',
            '.popup-subscribe .contact-form textarea',
            '.popup-subscribe .contact-form select',
            '.popup-subscribe .contact-form input',
            '.popup-subscribe .contact-form input::placeholder'
        ];
        $_css = $subscribe_popup_form_typo_css;
        OhioBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
    }
}

# 10. Hide button typo
if ( $subscribe_popup_close_typo ) {
    $subscribe_popup_close_typo_css = OhioHelper::parse_acf_typo_to_css( $subscribe_popup_close_typo );

    if ( $subscribe_popup_close_typo_css ) {
        $_selector = [
            '.popup-subscribe .close-link'
        ];
        $_css = $subscribe_popup_close_typo_css;
        OhioBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
    }
}
