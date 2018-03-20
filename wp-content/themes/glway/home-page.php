<?php
/*
Template Name: Home-page
*/
?>

<?php 
get_header();
?>

<!-- content -->
<main class="main-page container" id="content">
	<div class="row">
		<div class="col-md-12">
			
			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; ?>

		</div>
	</div>
</main>
<!-- end content -->
<?php
get_footer();
				