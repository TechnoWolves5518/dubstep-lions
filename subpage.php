<?php
	/*
	*	Template Name: Subpage
	*/
?>

<div id="subcontent">

	<?php if ( have_posts() ):

		while ( have_posts() ): the_post(); ?>

			<p><?php the_content(); ?></p>

			<hr />

		<?php endwhile;

		endif;
	?>

</div> <!-- #content -->