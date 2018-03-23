
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				glway.com &copy 2018
			</div>
			<?php
			$agreement = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('agreement') : '';
			if( !empty( $agreement ) ) :
				?>
				<a href="#myModal" class="btn btn-primary" data-toggle="modal">Пользовательское соглашение</a>
				<!-- HTML-код модального окна-->
				<div id="myModal" class="modal fade">
					<?php echo $agreement ?>
				</div>
			<?php endif ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
