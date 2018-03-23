
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
				<div class="modal-dialog">
				    <div class="modal-content">
				      <!-- Заголовок модального окна -->
				      <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Пользовательское соглашение</h4>
				      </div>
				      <!-- Основное содержимое модального окна -->
				      <div class="modal-body">
					<?php echo $agreement ?>
				       </div>
				    </div>
				  </div>
				</div>
			<?php endif ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
