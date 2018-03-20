<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */

?>

<section class="product-header">
	<div class="row">
		<div class="col-md-12">
			<h2><?php echo do_shortcode( $atts['title'] ); ?></h2>
			<p><?php echo do_shortcode( $atts['sub_title'] ); ?></p>
			<img src="<?php echo $atts['image']['url']; ?>" class="img-responsive">
		</div>
	</div>
</section>
<section class="product-body">
	<div class="row">
		<div class="col-md-12">
			<h2><?php echo do_shortcode( $atts['title2'] ); ?></h2>
			<?php 
			foreach ( $atts['tabs'] as $key => $tab ) : ?>
				<div class="row item" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
					<div class="col-md-6"><img src="<?php echo $tab['tab_image']['url']; ?>" alt="" class="img-responsive"></div>
					<div class="col-md-6">
						<h3><?php echo do_shortcode( $tab['tab_title'] ) ?></h3>
						<p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>