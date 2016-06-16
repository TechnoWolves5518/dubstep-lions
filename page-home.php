<?php get_header(); ?>

<?php
	$desc_img = esc_attr( get_option( 'desc_img' ) );
?>

<div id="content">

	<?php 
		if ( have_posts() ):
			while ( have_posts() ): the_post();
				the_content();
			endwhile;
		endif;
	?>

	<div class="description">
	    <div class="image" 
	    style="background-image: url(<?php print $desc_img; ?>)">

	    <?php 
	    	$args = array(
				'type' => 'post',
				'posts_per_page' => 1,
				'category_name' => 'posts-home'
			);
			$post = new WP_Query( $args );

	    	if( $post -> have_posts() ): $post -> the_post(); ?>

	      <article>
	          <h1><?php the_title(); ?></h1>
	          <p><?php the_content(); ?></p>
	      </article>

	      <?php 
	      	endif;
	      	wp_reset_postdata();
	      ?>

	    </div> <!-- .image -->
	</div> <!-- .description -->

	<div class="section">
		<h3 class="center">MEDIA</h3>
	</div> <!-- .section -->

	<div class="container">

		<div class="row">

			<div class="recent col-xs-12 col-md-8">
				<?php
					$args = array(
						'type' => 'post',
						'posts_per_page' => 4,
						'category_name' => 'posts-news'
					);
					$posts = new WP_Query( $args );

					if ( $posts -> have_posts() ):
						while ( $posts -> have_posts() ): $posts -> the_post();
							get_template_part( 'content', get_post_format() );
						endwhile;
					endif;

					wp_reset_postdata();
				?>
			</div> <!-- .recent -->

			<div class="col-xs-12 col-md-4">
				<?php get_sidebar(); ?>	
			</div> <!-- .col-md-4 -->

		</div> <!-- .row -->

	</div> <!-- .container -->

</div> <!-- #content -->

<?php get_footer(); ?>