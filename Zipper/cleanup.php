<?php

	**
	 * ZIPPER - Cleanup
	 * ---------------------------------
	 *
	 * Delete the Zip file created on the server after being downloaded by the user.
   *
	 */

	$currentversion = $_POST['currentVersion'];
	$userID = $_POST['userID'];
	$fileType = $_POST['fileType'];

	$outputZiPpath = '../' . $fileType . '-' . $userID . '-' . $currentversion . '.zip';

	ignore_user_abort(true);
	unlink($outputZipPath);

?>
