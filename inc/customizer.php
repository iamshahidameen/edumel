<?php
/**
 * Edumel Theme Customizer
 *
 * @package Edumel
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function edumel_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'edumel_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'edumel_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'edumel_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function edumel_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function edumel_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function edumel_customize_preview_js() {
	wp_enqueue_script( 'edumel-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), EDUMEL_VERSION, true );
}
add_action( 'customize_preview_init', 'edumel_customize_preview_js' );

/**
 * Edumel Contact Info Customizer Options
 */

function contact_info_customizer($wp_customize){
    $wp_customize->add_panel( 'theme_options',
        array(
            'title' => __( 'Theme Options' )
        )
    );
    $wp_customize->add_section('contact_info_section', array(
        'title'=> 'Contact Info',
        'panel'=> 'theme_options'
    ));
    //  Contact Number
    $wp_customize->add_setting('contact_info_setting', array(
        'type'=>'theme_mod',
        'default'=> '+92-312-8317766',
    ));
    $wp_customize->add_control('contact_info_control', array(
        'label'=> 'Contact Number',
        'section' => 'contact_info_section',
        'settings'=> 'contact_info_setting',
        'type' => 'text'
    ));
    //  Email
    $wp_customize->add_setting('email_info_setting', array(
        'type'=>'theme_mod',
        'default'=> 'test@gmail.com',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize->add_control('email_info_control', array(
        'label'=> 'Email Address',
        'description'=>'Please, type your Email here',
        'section' => 'contact_info_section',
        'settings' => 'email_info_setting',
        'type' => 'text'
    ));

    //  Contact Address
    $wp_customize->add_setting('address_info_setting', array(
        'type'=>'theme_mod',
        'default'=> '123 Fifth Floor East 26th Street,New York, NY 10011'
    ));
    $wp_customize->add_control('address_info_control', array(
        'label'=> 'Office Address',
        'section' => 'contact_info_section',
        'settings'=> 'address_info_setting',
        'type' => 'text'
    ));

    //  Social Media Links
    $wp_customize-> add_section('social_media_links', array(
        'title'=> 'Social Media',
        'description'=> 'Add your Social Media Accounts below',
        'panel'=> 'theme_options'
    ));
    //  Facebook Link
    $wp_customize-> add_setting('social_fb_setting', array(
        'type'=>'theme_mod',
        'default'=> 'https://www.facebook.com/',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('social_fb_control', array(
        'label'=> 'Facebook Link',
        'description'=>'Please, type your Facebook Account here',
        'section' => 'social_media_links',
        'settings' => 'social_fb_setting',
        'type' => 'text'
    ));

    //  Twitter Link
    $wp_customize-> add_setting('social_tw_setting', array(
        'type'=>'theme_mod',
        'default'=> 'https://www.twitter.com/',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('social_tw_control', array(
        'label'=> 'Twitter Link',
        'description'=>'Please, type your Twitter Account here',
        'section' => 'social_media_links',
        'settings' => 'social_tw_setting',
        'type' => 'text'
    ));

    //  LinkedIn Link
    $wp_customize-> add_setting('social_in_setting', array(
        'type'=>'theme_mod',
        'default'=> 'https://www.linkedin.com/',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('social_in_control', array(
        'label'=> 'LinkedIn Link',
        'description'=>'Please, type your LinkedIn Account here',
        'section' => 'social_media_links',
        'settings' => 'social_in_setting',
        'type' => 'text'
    ));

    //  Pinterest Link
    $wp_customize-> add_setting('social_pt_setting', array(
        'type'=>'theme_mod',
        'default'=> 'https://www.pinterest.com/',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('social_pt_control', array(
        'label'=> 'Pinterest Link',
        'description'=>'Please, type your Pinterest Account here',
        'section' => 'social_media_links',
        'settings' => 'social_pt_setting',
        'type' => 'text'
    ));

    //  YouTube Link
    $wp_customize-> add_setting('social_fb_setting', array(
        'type'=>'theme_mod',
        'default'=> 'https://www.facebook.com/',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('social_fb_control', array(
        'label'=> 'Facebook Link',
        'description'=>'Please, type your Facebook Account here',
        'section' => 'social_media_links',
        'settings' => 'social_fb_setting',
        'type' => 'text'
    ));

    //  YouTube Link
    $wp_customize-> add_setting('social_yt_setting', array(
        'type'=>'theme_mod',
        'default'=> 'https://www.youtube.com/',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('social_yt_control', array(
        'label'=> 'YouTube Link',
        'description'=>'Please, type your YouTube Channel here',
        'section' => 'social_media_links',
        'settings' => 'social_yt_setting',
        'type' => 'text'
    ));

    //Footer Logo

    $wp_customize->add_setting('footer_logo', array(
            'type' => 'theme_mod', // you can also use 'theme_mod'
        ));

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'footer_logo', array(
        'label'    => 'Footer Logo',
        'settings' => 'footer_logo',
        'section'  => 'title_tagline',
        'priority' => 10
    ))
    );

    //    Copyright Text
    $wp_customize-> add_section('copyrights_footer', array(
        'title'=> 'Footer Copyrights',
        'description'=> 'Add Copyrights detail in Footer',
        'panel'=> 'theme_options'
    ));
    //  Copyright Text Field
    $wp_customize-> add_setting('copyright_text_setting', array(
        'type'=>'theme_mod',
        'default'=> '© 2021 Edumel All rights reserved by',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('copyright_text_control', array(
        'label'=> 'Copyright Text',
        'description'=>'Please, type your Copyrights Text here',
        'section' => 'copyrights_footer',
        'settings' => 'copyright_text_setting',
        'type' => 'text'
    ));

    //  Company Name Field
    $wp_customize-> add_setting('company_name_setting', array(
        'type'=>'theme_mod',
        'default'=> 'Edumel',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('company_name_control', array(
        'label'=> 'Company Name',
        'description'=>'Please, type your Company Name here',
        'section' => 'copyrights_footer',
        'settings' => 'company_name_setting',
        'type' => 'text'
    ));
}
add_action('customize_register', 'contact_info_customizer');

