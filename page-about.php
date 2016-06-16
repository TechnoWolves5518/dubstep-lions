<?php get_header(); ?>

<div id="content">

	<div class="subcontainer">

		<?php if ( have_posts() ):

			while ( have_posts() ): the_post(); ?>

				<h3><?php the_title(); ?></h3>

			<?php endwhile;

			endif;
		?>

		<?php 
			wp_nav_menu( array( 
				'theme_location' => 'about', 
				'container' => false,
				'menu_class' => 'nav nav-tabs'
				)
			);
		?>

		<div id="target" class="col-xs-12 col-md-9">
			<div class="modal"></div>
		</div>

		<div class="col-xs-12 col-md-3">
			<?php get_sidebar(); ?>
		</div>

	</div> <!-- .subcontainer -->

</div> <!-- #content -->

<?php get_footer(); ?>

<script>
	jQuery(document).ready(function($) {
		startAnimation();
		loadPage();

		$('#menu-about-nav > li').on('click', function() {
			startAnimation();
	    	setTimeout(loadPage, 50);
	    });

	    function loadPage() {
			var hash = window.location.hash;

			if (!hash) {
		    	hash = $('#menu-about-nav > li').first().text()
		    		.toLowerCase().replace(' ', '-');
	    	}

	    	$('#target').load('<?php the_permalink(); ?>'
	    		+ hash.replace('#', '/'), function() {
	    			stopAnimation();
	    	});
		}

		function startAnimation() {
			$('#target').addClass('loading');
			$('#subcontent').replaceWith('<div class="modal"></div>');
		}

		function stopAnimation() {
			$('#target').removeClass('loading');
		}
	});
</script>