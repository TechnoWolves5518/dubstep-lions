<h1>Dubstep Lions Social Options</h1>
<p>Customize theme social media options.</p>

<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'dblions-social-group' ); ?>
	<?php do_settings_sections( 'dblions_social' ); ?>
	<?php submit_button(); ?>
</form>