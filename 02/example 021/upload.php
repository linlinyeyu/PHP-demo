<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php 
include("check.php");
$uploaddir = "./files/";
$type = array("jpg","gif","bmp","jpeg","png");
if(!in_array(strtolower(fileext($_FILES['file']['name'])), $type)) {
	$text = implode(",",$type);
	echo "你只能上传以下类型文件".$text."<br>";
 } else {
 	$filename[0] = randomName(10);
 	$name = implode(".",$filename);
 	$uploadfile = $upload.$name;
 }
 while (file_exists($uploadfile));
 if(is_uploaded_file($_FILES['file']['tmp_name'])) {
 	if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)) {
 		echo "<center>您的文件已经上传完毕 上传图片预览：</center><br><center><img src = '$uploadfile'></center>";
 		echo "<br><center><a href = 'javascript:history.go(-1)'>继续上传</a></center>";
 	}else {
 		echo "上传失败";
 	}
 }
?>