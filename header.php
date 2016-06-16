<!DOCTYPE HTML>
<html>

	<head lang="en">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
		<?php wp_head(); ?>
	</head>

	<?php

		if ( is_front_page() ):
			$body_classes = array( '' );
		else:
			$body_classes = array( '' );
		endif;

	?>

	<body <?php body_class( $body_classes ); ?>>
		<div id="wrapper">

			<div id="header">
				<nav class="menubar">
					<div class="menubar-header">
						<button class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				          <span class="icon-bar"></span>
				          <span class="icon-bar"></span>
				          <span class="icon-bar"></span>
				     	</button>

						<?php
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							}
						?>
					</div>

					<div class="navbar-collapse collapse">
						<?php 
							wp_nav_menu( array( 
								'theme_location' => 'primary', 
								'container' => false,
								'menu_class' => 'menubar-menu'
								)
							);
						?>
					</div> <!-- .navbar-collapse -->
				</nav>
			</div> <!-- #header -->