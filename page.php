<?php get_header(); ?>

<div id="content">

	<div class="subcontainer">

		<?php if ( have_posts() ):

			while ( have_posts() ): the_post(); ?>

				<h3><?php the_title(); ?></h3>

				<p><?php the_content(); ?></p>

				<hr />

			<?php endwhile;

			endif;
		?>

	</div> <!-- .subcontainer -->

</div> <!-- #content -->

<?php get_footer(); ?>