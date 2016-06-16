		<?php
			$footer = esc_attr( get_option( 'footer_text' ) );
			$fb = esc_attr( get_option( 'facebook_link' ) );
			$tw = esc_attr( get_option( 'twitter_link' ) );
			$ig = esc_attr( get_option( 'instagram_link' ) );
			$tumblr = esc_attr( get_option( 'tumblr_link' ) );
			$gplus = esc_attr( get_option( 'gplus_link' ) );
		?>

		<div id="footer">

            <p class="vert">
                &copy; <?php echo date( 'Y' ). ' ' . $footer; ?>
            </p>

            <div id="socialbar">

            <?php
            	if ($fb) {
            		echo '<a href="' . $fb . '">
            			<img src="' . get_template_directory_uri() . '/img/icons/facebook.png' . '"></img>
            		</a>';
            	}

            	if ($tw) {
            		echo '<a href="' . $tw . '">
            			<img src="' . get_template_directory_uri() . '/img/icons/twitter.png' . '"></img>
            		</a>';
            	}

            	if ($ig) {
            		echo '<a href="' . $ig . '">
            			<img src="' . get_template_directory_uri() . '/img/icons/instagram.png' . '"></img>
            		</a>';
            	}

            	if ($tumblr) {
            		echo '<a href="' . $tumblr . '">
            			<img src="' . get_template_directory_uri() . '/img/icons/tumblr.png' . '"></img>
            		</a>';
            	}

            	if ($gplus) {
            		echo '<a href="' . $gplus . '">
            			<img src="' . get_template_directory_uri() . '/img/icons/google+.png' . '"></img>
            		</a>';
            	}
            ?>

            </div> <!-- #socialbar -->

        </div>

		<?php wp_footer(); ?>
	</body>
	
</html>