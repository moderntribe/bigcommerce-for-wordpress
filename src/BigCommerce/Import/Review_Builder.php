<?php


namespace BigCommerce\Import;

class Review_Builder extends Record_Builder {
	private $data;

	public function __construct( \BigCommerce\Api\v3\Model\ProductReview $data ) {
		$this->data = $data;
	}

	/**
	 * @param int $post_id    The ID of the WordPress post for the product
	 * @param int $product_id The ID of the BigCommerce product
	 *
	 * @return array
	 */
	public function build_review_array( $post_id, $product_id ) {
		$data = [
			'review_id'     => $this->sanitize_int( $this->data[ 'id' ] ),
			'post_id'       => $this->sanitize_int( $post_id ),
			'bc_id'         => $this->sanitize_int( $product_id ),
			'title'         => wp_strip_all_tags( $this->sanitize_string( $this->data[ 'title' ] ) ),
			'content'       => wp_strip_all_tags( $this->sanitize_string( $this->data[ 'text' ] ) ),
			'status'        => $this->sanitize_string( $this->data[ 'status' ] ),
			'rating'        => $this->sanitize_int( $this->data[ 'rating' ] ),
			'author_email'  => $this->sanitize_string( $this->data[ 'email' ] ),
			'author_name'   => $this->sanitize_string( $this->data[ 'name' ] ),
			'date_reviewed' => $this->sanitize_date( $this->data[ 'date_reviewed' ] ),
			'date_created'  => $this->sanitize_date( $this->data[ 'date_created' ] ),
			'date_modified' => $this->sanitize_date( $this->data[ 'date_modified' ] ),
		];

		return $data;
	}
}