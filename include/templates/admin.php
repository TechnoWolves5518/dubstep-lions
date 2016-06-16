<h1>Dubstep Lions Theme Options</h1>
<p>Customize theme options.</p>

<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'dblions-settings-group' ); ?>
	<?php do_settings_sections( 'dblions' ); ?>
	<?php submit_button(); ?>
</form>