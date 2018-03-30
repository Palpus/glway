
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
					<div class="social text-center">
					<?php
					$vk = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('vk') : '';
					if( !empty( $vk ) ) :
						?>
						<a href="<?php echo $vk ?>"><img src="<?php echo get_template_directory_uri() ?>/img/vk.png"/></a>
					<?php endif ?>

					<?php
					$inst = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('inst') : '';
					if( !empty( $inst ) ) :
						?>
						<a href="<?php echo $inst ?>"><img src="<?php echo get_template_directory_uri() ?>/img/instagram.png"/></a>
					<?php endif ?>

					<?php
					$facebook = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('facebook') : '';
					if( !empty( $facebook ) ) :
						?>
						<a href="<?php echo $facebook ?>"><img src="<?php echo get_template_directory_uri() ?>/img/facebook.png"/></a>
					<?php endif ?>

					<?php
					$twitter = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('twitter') : '';
					if( !empty( $twitter ) ) :
						?>
						<a href="<?php echo $twitter ?>"><img src="<?php echo get_template_directory_uri() ?>/img/twitter.png"/></a>
					<?php endif ?>
						
					<?php
					$youtube = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('youtube') : '';
					if( !empty( $youtube ) ) :
						?>
						<a href="<?php echo $youtube ?>"><img src="<?php echo get_template_directory_uri() ?>/img/youtube.png"/></a>
					<?php endif ?>
				</div>
				<?php
				$agreement = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('agreement') : '';
				if( !empty( $agreement ) ) :
					?>
					<a href="#myModal" data-toggle="modal">Пользовательское соглашение</a>
				<?php endif ?>
				<br>
				glway.com &copy 2018
			</div>
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

		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
