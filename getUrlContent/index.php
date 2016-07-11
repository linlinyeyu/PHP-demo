<?php 
$url = curl_init("http://www.w3mentor.com/robots.txt");
curl_setopt($url,CURLOPT_RETURNTRANSFER,true);
$page = curl_exec($url);
curl_close($url);
?>