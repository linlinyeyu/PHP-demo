<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php 
$urls = array(
	'http://www.scutephp.com/',
	'http://www.baidu.com/',
	'http://www.example.com'
	);
$save_to='./test.txt';//把抓取的代码写入该文件
$st = fopen($save_to,"a");
$mh = curl_multi_init();
foreach ($urls as $i => $url) {
	$conn[$i] = curl_init($url);
	curl_setopt($conn[$i], CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)");
	curl_setopt($conn[$i], CURLOPT_HEADER, 0);
	curl_setopt($conn[$i], CURLOPT_CONNECTTIMEOUT,60);
	curl_setopt($conn[$i], CURLOPT_FILE,$st);
	curl_multi_add_handle($mh,$conn[$i]);
}
do{
	curl_multi_exec($mh, $active);
}while($active);
foreach ($urls as $i => $url) {
	curl_multi_remove_handle($mh, $conn[$i]);
	curl_close($conn[$i]);
}
curl_multi_close($mh);
fclose($st);
?>