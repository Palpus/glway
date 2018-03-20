<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glway
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- === Header ===	-->
	<header>
		<div class="container">
			<div class="row">
				<nav class="navbar">
						<div class="navbar-header col-md-12">
							<div class="lang">
								<a href="#" data-toggle="dropdown">Выберите язык</a>
								 <ul class="dropdown-menu">
										<li><a href="#">Русский</a></li>
										<li><a href="#">Украинский</a></li>
										<li><a href="#">Казахстанский</a></li>
								 </ul>
							</div>
							<div class="enter">
								<a href="#" data-toggle="dropdown">Войти</a>
							</div>
							<?php
							the_custom_logo();?>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse col-md-12" id="navbar-main">
							<?php
							    wp_nav_menu( array(
							    	'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu', 
									'container'       =>  False, 
									'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
									'walker' => new wp_bootstrap_navwalker,
							    ))
							?>
						</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- === /Header ===	-->
