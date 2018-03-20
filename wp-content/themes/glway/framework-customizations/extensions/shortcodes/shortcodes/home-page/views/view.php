<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */

?>


<section class="video">
	<?php echo do_shortcode( $atts['youtube'] ); ?>
</section>
<section class="info">
	<div class="row">
		<div class="col-md-12 about">
			<h2><?php echo do_shortcode( $atts['head'] ); ?></h2>
			<a href="#about-img"  data-toggle="modal"><img src="<?php echo $atts['image']['url']; ?>" class="img-responsive"></a>
			<div id="about-img" class="modal fade" tabindex="-1" role="dialog">
			  <div class="modal-dialog">
			    <div class="modal-content">
			        <div class="modal-body">
			        	<img src="<?php echo $atts['image']['url']; ?>" class="img-responsive">
			        </div>
			    </div>
			  </div>
			</div>
			<p>
				<?php echo do_shortcode( $atts['desc'] ); ?>
			</p>
		</div>
	</div>
</section>