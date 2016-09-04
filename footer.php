	<?php
		$footer = esc_attr( get_option( 'footer_text' ) );
		$fb = esc_attr( get_option( 'facebook_link' ) );
		$tw = esc_attr( get_option( 'twitter_link' ) );
		$ig = esc_attr( get_option( 'instagram_link' ) );
		$tumblr = esc_attr( get_option( 'tumblr_link' ) );
		$gplus = esc_attr( get_option( 'gplus_link' ) );
            $yt = esc_attr( get_option('youtube_link') );
	?>

	<div id="footer">

            <!-- <div id="partner">

                  <div>
                        <a href="http://www.firstinspires.org/">
                              <img width="144" src="<?php echo get_template_directory_uri() . '/img/FIRST_HorzRGB_reverse.gif'; ?>"></img>
                        </a>

                        <p>Techno Wolves FRC Team 5518 is affiliated with <em>FIRST</em> (<strong>F</strong>or the <strong>I</strong>nspiration
                        and <strong>R</strong>ecognition of <strong>S</strong>cience and <strong>T</strong>echnology) and its state-level organization,
                        <em>FIRST</em> North Carolina. This website is created and maintained by Team 5518.</p>
                  </div>

                  <a href="http://www.firstinspires.org/">
                        <img width="144" src="<?php echo get_template_directory_uri() . '/img/wake_stem_echs.png'; ?>"></img>
                  </a>
            </div> -->

            <div id="main">

                  <div style="padding-top: 10px;">
                        <p class="vert">
                            &copy; <?php echo date( 'Y' ). ' ' . $footer; ?>
                        </p>
                  </div>

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

                              if ($yt) {
                                    echo '<a href="' . $yt . '">
                                          <img src="' . get_template_directory_uri() . '/img/icons/youtube.png' . '"></img>
                                    </a>';
                              }
                        ?>

                  </div> <!-- #socialbar -->

            </div> <!-- #main -->

        </div>

		<?php wp_footer(); ?>
	</body>
	
</html>