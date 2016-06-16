jQuery(document).ready(function($) {

	var mediaUploader;

	$('#upload-btn').on('click', function(e) {
		e.preventDefault();

		if( mediaUploader ) {
			mediaUploader.open();
			return;
		}

		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose a Description Background Image',
			button: {
				text: 'Choose Picture'
			},
			multiple: false
		});

		mediaUploader.on('select', function() {
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#desc-img').val(attachment.url);
		});

		mediaUploader.open();
	});

});