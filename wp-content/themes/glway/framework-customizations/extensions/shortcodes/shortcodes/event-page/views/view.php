<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */

?>

<section class="event-desc">
	<div class="row">
		<div class="col-md-6"><img src="<?php echo $atts['image']['url']; ?>" class="img-responsive"></div>
		<div class="col-md-6">
			<h2><?php echo do_shortcode( $atts['head'] ); ?></h2>
			<p>
				<?php echo do_shortcode( $atts['desc'] ); ?>
			</p>
	</div>
	</div>
</section>
<setion class="event">
	<?php 
	foreach ( $atts['tabs'] as $key => $tab ) : ?>

	<div class="item" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
		<h2><?php echo do_shortcode( $tab['tab_title'] ) ?> <span>(Дата: <?php echo do_shortcode( $tab['tab_date'] ) ?>)</span></h2>
		<a href="#about-img"  data-toggle="modal"><img src="<?php echo $tab['tab_image']['url']; ?>" /></a>
			<div id="about-img" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
							<div class="modal-body">
								<img src="<?php echo $tab['tab_image']['url']; ?>" />
							</div>
					</div>
				</div>
			</div>
		<p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
	</div>

	<?php endforeach; ?>
	
</setion>