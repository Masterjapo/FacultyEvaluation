<html>

<head>
	<title>Single File Upload in CodeIgniter 4</title>
</head>

<body>

	<h3>Upload File</h3>

	<?= form_open_multipart('demo/do_upload'); ?>
		<input type="file" name="photo" />
		<br /><br />
		<input type="submit" value="Upload" />
	<?= form_close(); ?>

</body>

</html>