# Zipper
A simple function used to zip files on the server. Zip it!


## Calling the function
```
<?php
  $filesToZip = array(
      '../files/documents/path.pdf',
      '../files/images/path.jpg'
  );
  $zipFilename = 'filename.zip';
  $result = create_zip($filesToZip,$zipFilename);
?>
```

## Deleting the file created on the server
```
<?php
  ignore_user_abort(true);
  unlink($zipFilename);
?>
```

## Download the Zip when created (Ajax)
```
$.ajax({
  type: "POST",
  url: "/path/to/file.php",
	success: function () {
		window.location.href= "filename.zip";
	}
});
```
