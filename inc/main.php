<?php

/*
MAIN CLASS
*/

class RemarketingBoss
{
	function __construct()
	{
		add_action( 'admin_enqueue_scripts', array( $this,'enqueue_admin_scripts' ) );
		add_action( 'admin_menu', array( $this,'register_admin_menus' ) );
		add_action( 'admin_init', array( $this,'register_settings' ) );
		add_action( 'add_meta_boxes', array( $this,'register_meta_field' ) );
		add_action( 'save_post', array( $this, 'save_meta_field' ) );
		add_action( 'wp_footer', array( $this, 'output_to_footer' ) );
	}

	function enqueue_admin_scripts()
	{
		wp_enqueue_style( 'rb-styles', REMARKETING_URL.'/assets/css/rb-styles.css' );
	}

	function register_admin_menus()
	{
	    add_menu_page(
	        'Remarketing',
	        'Remarketing',
	        'manage_options',
	        'remarketing-boss',
	        array($this,'settings'),
	        'dashicons-media-interactive',
	        81
	    );
	}

	function settings()
	{
		require_once(REMARKETING_PATH.'admin/settings.php');
	}

	function register_settings()
	{
		register_setting( 'remakerting-boss', 'rb_google', array( $this, 'sanitize_settings' ) );
		register_setting( 'remakerting-boss', 'rb_facebook', array( $this, 'sanitize_settings' ) );
		register_setting( 'remakerting-boss', 'rb_bing', array( $this, 'sanitize_settings' ) );
		register_setting( 'remakerting-boss', 'rb_adroll', array( $this, 'sanitize_settings' ) );
		register_setting( 'remakerting-boss', 'rb_retargeter', array( $this, 'sanitize_settings' ) );
		register_setting( 'remakerting-boss', 'rb_perfectaudience', array( $this, 'sanitize_settings' ) );
		register_setting( 'remakerting-boss', 'rb_googleanalytics', array( $this, 'sanitize_settings' ) );
		register_setting( 'remakerting-boss', 'rb_other', array( $this, 'sanitize_settings' ) );
	}

	function sanitize_settings( $value )
	{
		return htmlentities( addslashes( $value ) );
	}

	function register_meta_field()
	{
		$meta_post_types = array('post','page');

		for($x=0;$x<count($meta_post_types);$x++) {

		    add_meta_box(
		        'remarketing_boss_meta_field',
		        'Custom Retargetting Code',
		        array( $this,'meta_field' ),
		        $meta_post_types[$x],
		        'normal',
		        'low'
		    );

		}
	}

	function meta_field( $post )
	{
		wp_nonce_field( 'rb_meta_fields', 'rb_meta_fields_nonce' );
		require_once(REMARKETING_PATH.'admin/meta-field.php');
	}

	function save_meta_field( $post_id ) {
 
        if ( ! isset( $_POST['rb_meta_fields_nonce'] ) ) {
            return $post_id;
        }
 
        $nonce = $_POST['rb_meta_fields_nonce'];
 
        if ( ! wp_verify_nonce( $nonce, 'rb_meta_fields' ) ) {
            return $post_id;
        }
 
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }
 
        if ( 'page' == $_POST['post_type'] ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            }
        } else {
            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }
        }
 
        $data = is_array( $_POST['remarketingboss'] ) ? $_POST['remarketingboss'] : array();

        foreach ($data as $key => $value) {
        	update_post_meta( $post_id, 'rb_'.$key, htmlentities( addslashes( $value ) ) );	
        }
 
        
    }

    function output_to_footer()
    {
    	global $post;
    	if ( is_singular( array('post','page') ) ) {

    		echo ( get_post_meta($post->ID,'rb_google',true)!=null ? htmlspecialchars_decode( stripslashes( get_post_meta($post->ID,'rb_google',true) ) ) : htmlspecialchars_decode( get_option('rb_google') ) );

    		echo ( get_post_meta($post->ID,'rb_facebook',true)!=null ? htmlspecialchars_decode( stripslashes( get_post_meta($post->ID,'rb_facebook',true) ) ) : htmlspecialchars_decode( get_option('rb_facebook') ) );

    		echo ( get_post_meta($post->ID,'rb_bing',true)!=null ? htmlspecialchars_decode( stripslashes( get_post_meta($post->ID,'rb_bing',true) ) ) : htmlspecialchars_decode( get_option('rb_bing') ) );

    		echo ( get_post_meta($post->ID,'rb_adroll',true)!=null ? htmlspecialchars_decode( stripslashes( get_post_meta($post->ID,'rb_adroll',true) ) ) : htmlspecialchars_decode( get_option('rb_adroll') ) );

    		echo ( get_post_meta($post->ID,'rb_perfectaudience',true)!=null ? htmlspecialchars_decode( stripslashes( get_post_meta($post->ID,'rb_perfectaudience',true) ) ) : htmlspecialchars_decode( get_option('rb_perfectaudience') ) );

    		echo ( get_post_meta($post->ID,'rb_retargeter',true)!=null ? htmlspecialchars_decode( stripslashes( get_post_meta($post->ID,'rb_retargeter',true) ) ) : htmlspecialchars_decode( get_option('rb_retargeter') ) );

    		echo ( get_post_meta($post->ID,'rb_googleanalytics',true)!=null ? htmlspecialchars_decode( stripslashes( get_post_meta($post->ID,'rb_googleanalytics',true) ) ) : htmlspecialchars_decode( get_option('rb_googleanalytics') ) );

    		echo ( get_post_meta($post->ID,'rb_other',true)!=null ? htmlspecialchars_decode( stripslashes( get_post_meta($post->ID,'rb_other',true) ) ) : htmlspecialchars_decode( get_option('rb_other') ) );

    	} else {

    		echo htmlspecialchars_decode( stripslashes( get_option('rb_google') ) );
    		echo htmlspecialchars_decode( stripslashes( get_option('rb_facebook') ) );
    		echo htmlspecialchars_decode( stripslashes( get_option('rb_bing') ) );
    		echo htmlspecialchars_decode( stripslashes( get_option('rb_adroll') ) );
    		echo htmlspecialchars_decode( stripslashes( get_option('rb_perfectaudience') ) );
    		echo htmlspecialchars_decode( stripslashes( get_option('rb_retargeter') ) );
    		echo htmlspecialchars_decode( stripslashes( get_option('rb_googleanalytics') ) );
    		echo htmlspecialchars_decode( stripslashes( get_option('rb_other') ) );

    	}
    }


}