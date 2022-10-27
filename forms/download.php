<?php  
$file_url = 'media/Nitheshwaran T Resume.pdf';  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: Binary");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
readfile($file_url);  
echo"downloaded";
?>  