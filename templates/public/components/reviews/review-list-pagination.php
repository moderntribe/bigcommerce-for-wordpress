<?php
/**
 * Renders the button to load the next page of product reviews
 *
 * @var string $next_page_url
 */
?>

<?php if ( ! empty( $next_page_url ) ) { ?>
	<div class="bc-load-items__trigger bc-load-items__trigger--reviews" data-js="load-items-trigger">
		<button type="button" class="bc-load-items__trigger-btn bc-load-items__trigger-btn--reviews" data-js="load-items-trigger-btn"
		        data-href="<?php echo esc_url( $next_page_url ); ?>">
			<?php echo esc_html( apply_filters( 'bigcommerce/product/reviews/load_more_text', __( 'Load More', 'bigcommerce' ) ) ); ?>
			<i class="bc-icon icon-bc-chevron-down"></i>
		</button>
	</div>
<?php } ?>
