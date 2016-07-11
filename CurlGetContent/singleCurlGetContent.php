<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<?php 
$ch = curl_init();
$save_to = './test2.txt';
$st = fopen($save_to,"a");
curl_setopt($ch, CURLOPT_URL, 'http://www.jb51.net');
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_FILE,$st);
$output = curl_exec($ch);
curl_close($ch);
 ?>