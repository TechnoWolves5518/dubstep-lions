<h1>Dubstep Lions Sidebar Options</h1>
<p>Customize theme sidebar options.</p>

<?php settings_errors(); ?>

<form method="post" action="options.php">
	<?php settings_fields( 'dblions-sidebar-group' ); ?>
	<?php do_settings_sections( 'dblions_sidebar' ); ?>
	<?php submit_button(); ?>
</form>