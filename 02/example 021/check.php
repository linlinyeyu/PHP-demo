<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php
//获取文件扩展名函数
function fileext($filename) {
	return substr(strrchr($filename,"."),1);
}

//生成随机文件名函数
function randomName($length) {
	$hash = "CR_";
	$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
	$max = strlen($chars) - 1;
	mt_srand((double)microtime() * 1000000);
	for($i = 0; $i<$length;$i++) {
		$hash .=$chars[mt_rand(0,$max)];
	}

	return $hash;
}
?>