<?php

use Carbon_Fields\Helper\Helper;

if ( ! function_exists( 'carbon_get_the_post_meta' ) ) {
	function carbon_get_the_post_meta( $name, $container_id = '' ) {
		return Helper::get_the_post_meta( $name, $container_id );
	}
}

if ( ! function_exists( 'carbon_get_post_meta' ) ) {
	function carbon_get_post_meta( $id, $name, $container_id = '' ) {
		return Helper::get_post_meta( $id, $name, $container_id );
	}
}

if ( ! function_exists( 'carbon_set_post_meta' ) ) {
	function carbon_set_post_meta( $id, $name, $value, $container_id = '' ) {
		return Helper::set_post_meta( $id, $name, $value, $container_id );
	}
}

if ( ! function_exists( 'carbon_get_theme_option' ) ) {
	function carbon_get_theme_option( $name, $container_id = '' ) {
		return Helper::get_theme_option( $name, $container_id );
	}
}

if ( ! function_exists( 'carbon_set_theme_option' ) ) {
	function carbon_set_theme_option( $name, $value, $container_id = '' ) {
		return Helper::set_theme_option( $name, $value, $container_id );
	}
}

if ( ! function_exists( 'carbon_get_term_meta' ) ) {
	function carbon_get_term_meta( $id, $name, $container_id = '' ) {
		return Helper::get_term_meta( $id, $name, $container_id );
	}
}

if ( ! function_exists( 'carbon_set_term_meta' ) ) {
	function carbon_set_term_meta( $id, $name, $value, $container_id = '' ) {
		return Helper::set_term_meta( $id, $name, $value, $container_id );
	}
}

if ( ! function_exists( 'carbon_get_user_meta' ) ) {
	function carbon_get_user_meta( $id, $name, $container_id = '' ) {
		return Helper::get_user_meta( $id, $name, $container_id );
	}
}

if ( ! function_exists( 'carbon_set_user_meta' ) ) {
	function carbon_set_user_meta( $id, $name, $value, $container_id = '' ) {
		return Helper::set_user_meta( $id, $name, $value, $container_id );
	}
}

if ( ! function_exists( 'carbon_get_comment_meta' ) ) {
	function carbon_get_comment_meta( $id, $name, $container_id = '' ) {
		return Helper::get_comment_meta( $id, $name, $container_id );
	}
}

if ( ! function_exists( 'carbon_set_comment_meta' ) ) {
	function carbon_set_comment_meta( $id, $name, $value, $container_id = '' ) {
		return Helper::set_comment_meta( $id, $name, $value, $container_id );
	}
}

if ( ! function_exists( 'carbon_get_nav_menu_item_meta' ) ) {
	function carbon_get_nav_menu_item_meta( $id, $name, $container_id = '' ) {
		return Helper::get_nav_menu_item_meta( $id, $name, $container_id );
	}
}

if ( ! function_exists( 'carbon_set_nav_menu_item_meta' ) ) {
	function carbon_set_nav_menu_item_meta( $id, $name, $value, $container_id = '' ) {
		return Helper::set_nav_menu_item_meta( $id, $name, $value, $container_id );
	}
}
