<?php // custom code

/******************************************************************************/
/* glueckkanja changes *
/******************************************************************************/

remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version


class gkcustom_Product {

	function gkcustom_Product() {
		add_action('init',array($this,'create_post_type'));
		add_filter('posts_join',array($this,'join'),10,1);
		add_filter('posts_orderby',array($this,'set_default_sort'),20,2);
	}

	function create_post_type() {
		$labels = array(
			'name'               => 'Products',
			'singular_name'      => 'Product',
			'menu_name'          => 'Products',
			'name_admin_bar'     => 'Product',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Product',
			'new_item'           => 'New Product',
			'edit_item'          => 'Edit Product',
			'view_item'          => 'View Product',
			'all_items'          => 'All Products',
			'search_items'       => 'Search Products',
			'parent_item_colon'  => 'Parent Product',
			'not_found'          => 'No Products Found',
			'not_found_in_trash' => 'No Products Found in Trash'
		);

		$args = array(
			'labels'              => $labels,
			'public'              => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-admin-appearance',
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
			'has_archive'         => true,
			'rewrite'             => array( 'slug' => 'product' ),
			'query_var'           => true
		);

		register_post_type( 'product', $args );
	}


	function join($wp_join) {
		global $wpdb;
		if(get_query_var('post_type') == 'product') {
			$wp_join .= " LEFT JOIN (
					SELECT post_id, meta_value AS awards
					FROM $wpdb->postmeta
					WHERE meta_key = 'awards' ) AS meta
					ON $wpdb->posts.ID = meta.post_id ";
		}
		return ($wp_join);
	}

	function set_default_sort($orderby,&$query) {
		global $wpdb;
		if(get_query_var('post_type') == 'product') {
			return "meta.awards DESC";
		}
	 	return $orderby;
	}
}


class gkcustom_Challenge {

	function gkcustom_Challenge() {
		add_action('init',array($this,'create_post_type'));
		add_filter('posts_join',array($this,'join'),10,1);
		add_filter('posts_orderby',array($this,'set_default_sort'),20,2);
	}

	function create_post_type() {
		$labels = array(
			'name'               => 'Challenges',
			'singular_name'      => 'Challenge',
			'menu_name'          => 'Challenges',
			'name_admin_bar'     => 'Challenge',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Challenge',
			'new_item'           => 'New Challenge',
			'edit_item'          => 'Edit Challenge',
			'view_item'          => 'View Challenge',
			'all_items'          => 'All Challenges',
			'search_items'       => 'Search Challenges',
			'parent_item_colon'  => 'Parent Challenge',
			'not_found'          => 'No Challenges Found',
			'not_found_in_trash' => 'No Challenges Found in Trash'
		);

		$args = array(
			'labels'              => $labels,
			'public'              => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 6,
			'menu_icon'           => 'dashicons-admin-appearance',
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
			'has_archive'         => true,
			'rewrite'             => array( 'slug' => 'challenge' ),
			'query_var'           => true
		);

		register_post_type( 'challenge', $args );
	}


	function join($wp_join) {
		global $wpdb;
		if(get_query_var('post_type') == 'challenge') {
			$wp_join .= " LEFT JOIN (
					SELECT post_id, meta_value AS challenge
					FROM $wpdb->postmeta
					WHERE meta_key = 'challenge' ) AS meta
					ON $wpdb->posts.ID = meta.post_id ";
		}
		return ($wp_join);
	}

	function set_default_sort($orderby,&$query) {
		global $wpdb;
		if(get_query_var('post_type') == 'challenge') {
			return "meta.challenge DESC";
		}
	 	return $orderby;
	}
}


new gkcustom_Product();
new gkcustom_Challenge();
