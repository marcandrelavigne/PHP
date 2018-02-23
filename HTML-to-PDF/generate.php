<?php

	require __DIR__.'/vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;


	//Doc Content
	$content = $_POST['content'];
	$filePath = 'doc.pdf';


// 	$content = '<div style="background:yellow; padding: 20px;"><h1>HelloWorld</h1><b style="color: blue;">This is my first test.</b></div>';

	// Generate File
	// $orientation: P (Portait) or L (Landscape)
	// $format: USLETTER (8.5" x 11") or USLEGAL (8.5" x 14") or whatever other format
	// $lang: en (English) or fr (Français)
	// $unicode: bool
	// $encoding: UTF-8 mostly
	// $margins: array(left, top, right, bottom) (in millimeters)
	// pdfa: bool

	$html2pdf = new Html2Pdf('P', 'USLETTER', 'fr', true, 'UTF-8', array(10,10,10,10), false);
	$html2pdf->writeHTML($content);

	// Generate the Output
	// $name: document.pdf
	// $dest:  I (send the file inline to the browser), D (Force download), F (Save on local server with the $name as the path)
	$html2pdf->output('doc.pdf', 'D');

?>