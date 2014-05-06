<?php 
require_once("dompdf/dompdf_config.inc.php");
$file = file_get_contents('/Users/cas/Proyectos/test/php/tema1.html');

$dompdf = new DOMPDF();
$dompdf->load_html($file);
$dompdf->render();
$dompdf->stream("sample.pdf",array('Attachment'=>0));
?>
