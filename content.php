<article id="post-<?php the_id(); ?>" <?php post_class('card'); ?>>

	<div class="post-header">
		<?php the_title( sprintf( '<h1 class="post-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<small>
			By <?php the_author(); ?> on <?php the_time( 'l, F j, Y' ); ?><!-- at <?php the_time( 'g:i a' ); ?>, in <?php the_category(); ?> -->
		</small>
	</div>

	<p><?php the_content(); ?></p>

</article>