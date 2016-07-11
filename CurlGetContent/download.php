<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<?php 
$urls = array(
	'http://www.scutephp.com/5w.zip',
	'http://www.scutephp.com/5w.zip',
	'http://www.scutephp.com/5w.zip',
	);
$save_to = './home/';
$mh = curl_multi_init();
foreach ($urls as $i => $url) {
	$g = $save_to.basename($url);
	if(!is_file($g)) {
		$conn[$i] = curl_init($url);
		$fg[$i] = fopen($g,"w");
		curl_setopt($conn[$i],CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)");
		curl_setopt($conn[$i],CURLOPT_FILE,$fg[$i]);
		curl_setopt($conn[$i],CURLOPT_HEADER,0);
		curl_setopt($conn[$i],CURLOPT_CONNECTTIMEOUT, 60);
		curl_multi_add_handle($mh, $conn[$i]);
	}
}
do{
	$n = curl_multi_exec($mh, $active);
 }while($active);
 foreach ($urls as $i => $url) {
 	curl_multi_remove_handle($mh, $conn[$i]);
 	curl_close($conn[$i]);
 	fclose($fg[$i]);
 }
 curl_multi_close($mh);
 ?>
