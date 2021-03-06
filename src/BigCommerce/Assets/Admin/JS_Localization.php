<?php


namespace BigCommerce\Assets\Admin;


class JS_Localization {
	/**
	 * stores all text strings needed in the admin scripts.js file
	 *
	 * The code below is an example of structure. Check the readme js section for more info on how to use.
	 *
	 * @return array
	 */
	public function get_data() {
		$js_i18n_array = [
			'buttons'    => [
				'add_product'         => __( 'Add Product', 'bigcommerce' ),
				'remove_product'      => __( 'Remove Product', 'bigcommerce' ),
				'remove_selected'     => __( '(Remove)', 'bigcommerce' ),
				'oauth_popup_trigger' => __( 'Click here to authorize WordPress to connect to your BigCommerce account', 'bigcommerce' ),
			],
			'messages'   => [
				'ajax_error'                 => __( 'There was and error submitting or retrieving your request. Please try again.', 'bigcommerce' ),
				'no_results'                 => __( 'We could not find any products that matched your query. Please clear your search and try again.', 'bigcommerce' ),
				'no_products'                => __( 'We could not find any products that matched your query. Please edit this block and try again.', 'bigcommerce' ),
				'excessive_attempts'         => __( 'We are still working on connecting your account. It should not be too much longer.', 'bigcommerce' ),
				'account_connection_error'   => __( 'There was an error connecting your account:', 'bigcommerce' ),
				'account_connection_code'    => __( 'Error Code:', 'bigcommerce' ),
				'account_connection_message' => __( 'Error Message:', 'bigcommerce' ),
				'channel_confirmation'       => __( "The %s channel will point to this site's URL and its route settings will be updated in BigCommerce.", 'bigcommerce' ),
			],
			'operations' => [
				'query_string_separator' => __( '&', 'bigcommerce' ),
			],
			'text'       => [
				'id_prefix' => __( 'ID:', 'bigcommerce' ),
			],
		];

		return apply_filters( 'bigcommerce/admin/js_localization', $js_i18n_array );
	}
}