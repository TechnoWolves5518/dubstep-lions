<div id="sidebar">

	<?php dynamic_sidebar( 'primary-sidebar' ); ?>

	<a href="<?php echo get_site_url() . '/resources/'; ?>">
		<div class="button">
			<strong>TEAM CALENDAR</strong>
		</div>
	</a>

	<?php echo html_entity_decode( get_option( 'sidebar_embed' ) ); ?>

</div>