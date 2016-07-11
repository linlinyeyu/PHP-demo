<?php
header("Content-type:text/html;charset=utf-8");
$conn = @mysqli_connect("localhost","root","") or die("<b>状态<b>:连接MYSQL数据库失败！<br>错误信息:".mysqli_errno());
if ($conn) {
	echo "<script>alert('MYSQL连接成功');</script>";
	$db = mysqli_select_db($conn,"da_database_02");
	if($db==1){
		echo "<script>alert('数据库选择成功');</script>";
		mysqli_query($conn,"set names utf8");
	}else{
		echo "<script>alert('数据库不存在');</script>";
	}
}
?>