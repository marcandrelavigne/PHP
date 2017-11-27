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

## Download the Zip when created (With AJAX)
```
$.ajax({
	type: "POST",
	url: "/path/to/file.php",
	success: function () {
		window.location.href= "filename.zip";
	}
});
```

## Deleting the file created on the server (With AJAX)
To delete the files, you must implement a version system with your filenames (in the exemple below, I used a version number + a user ID). This will prevent any conflicts with users generating Zip files at the same time. 

```
var currentVersion = 1;
var userID = 123;
var fileType = 'flyer';

$.ajax({
	type: "POST",
	url: "cleanup.php",
	data: {
		'fileType' : fileType,
		'currentVersion' : currentVersion,
		'userID' : userID
	}
});
```
