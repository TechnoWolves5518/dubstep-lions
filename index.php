<?php get_header(); ?>

<div id="content" class="subcontainer">

	<div class="row">

		<div class="col-xs-12 col-md-9">

			<?php if ( have_posts() ):

				while ( have_posts() ): the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile;

				endif;
			?>

		</div>

		<div class="col-xs-12 col-md-3">
			<?php get_sidebar(); ?>
		</div>

	</div>

</div>

<?php get_footer(); ?>