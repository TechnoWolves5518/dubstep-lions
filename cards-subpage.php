<?php
	/*
	*	Template Name: Cards Subpage
	*/
?>

<div id="subcontent">

	<?php if ( have_posts() ):

		while ( have_posts() ): the_post(); ?>

			<p><?php the_content(); ?></p>

		<?php endwhile;

		endif;
	?>

	<?php
		global $post;
		$slug = get_post( $post )->post_name;

		$args = array(
			'type' => 'post',
			'category_name' => 'posts-' . $slug
		);
		$posts = new WP_Query( $args );

		if ( $posts -> have_posts() ):
			while ( $posts -> have_posts() ): $posts -> the_post(); ?>
				<div class="row">
					<div class="card">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			<?php endwhile;
		endif;

		wp_reset_postdata();
	?>

</div> <!-- #subcontent -->