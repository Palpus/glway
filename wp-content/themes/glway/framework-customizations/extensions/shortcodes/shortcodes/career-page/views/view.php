<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */

?>

<section class="career-header">
	<div class="row">
		<div class="col-md-12">
			<h2><?php echo do_shortcode( $atts['title'] ); ?></h2>
			<img src="<?php echo $atts['image']['url']; ?>" class="img-responsive">
		</div>
	</div>
</section>
<section class="career-body">
	<div class="row">
		<div class="col-md-12">
			<h2><?php echo do_shortcode( $atts['title2'] ); ?></h2>
			<?php echo do_shortcode( $atts['content'] ); ?>
		</div>
	</div>
</section>