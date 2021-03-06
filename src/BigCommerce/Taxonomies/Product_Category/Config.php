<?php


namespace BigCommerce\Taxonomies\Product_Category;


use BigCommerce\Post_Types\Product\Product;
use BigCommerce\Taxonomies\Taxonomy_Config;

class Config extends Taxonomy_Config {

	/**
	 * Arguments to pass when registering the taxonomy.
	 *
	 * Filterable with register_taxonomy_args
	 *
	 * @see register_taxonomy() for accepted args.
	 * @return array
	 */
	public function get_args() {
		return [
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => false,
			'show_in_nav_menus' => true,
			'labels'            => $this->get_labels(),
			'rewrite'           => [
				'slug'       => $this->get_slug(),
				'with_front' => false,
			],
		];
	}

	private function get_slug() {
		return trailingslashit( $this->get_products_slug() ) . _x( 'categories', 'taxonomy rewrite slug', 'bigcommerce' );
	}

	/**
	 * Get labels for the taxonomy.
	 * Filterable with taxonomy_labels_{$taxonomy_name}
	 *
	 * @return array
	 */
	public function get_labels() {
		return [
			'name'                       => _x( 'Product Categories', 'taxonomy general name', 'bigcommerce' ),
			'menu_name'                  => _x( 'Categories', 'taxonomy menu name', 'bigcommerce' ),
			'singular_name'              => _x( 'Category', 'taxonomy singular name', 'bigcommerce' ),
			'search_items'               => __( 'Search Categories', 'bigcommerce' ),
			'popular_items'              => __( 'Popular Categories', 'bigcommerce' ),
			'all_items'                  => __( 'All Categories', 'bigcommerce' ),
			'parent_item'                => __( 'Parent Category', 'bigcommerce' ),
			'parent_item_colon'          => __( 'Parent Category:', 'bigcommerce' ),
			'edit_item'                  => __( 'Edit Category', 'bigcommerce' ),
			'view_item'                  => __( 'View Category', 'bigcommerce' ),
			'update_item'                => __( 'Update Category', 'bigcommerce' ),
			'add_new_item'               => __( 'Add New Category', 'bigcommerce' ),
			'new_item_name'              => __( 'New Category Name', 'bigcommerce' ),
			'separate_items_with_commas' => __( 'Separate categories with commas', 'bigcommerce' ),
			'add_or_remove_items'        => __( 'Add or remove categories', 'bigcommerce' ),
			'choose_from_most_used'      => __( 'Choose from the most used categories', 'bigcommerce' ),
			'not_found'                  => __( 'No categories found.', 'bigcommerce' ),
			'no_terms'                   => __( 'No categories', 'bigcommerce' ),
			'items_list_navigation'      => __( 'Categories list navigation', 'bigcommerce' ),
			'items_list'                 => __( 'Categories list', 'bigcommerce' ),
			'most_used'                  => _x( 'Most Used', 'categories tab header', 'bigcommerce' ),
			'back_to_items'              => __( '&larr; Back to Categories', 'bigcommerce' ),
		];
	}
}