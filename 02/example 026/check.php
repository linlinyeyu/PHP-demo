<?php 
header("Content-type:text/html;charset=utf-8");
include("conn.php");
if(!empty($_POST['id'])) {
	$arr = $_POST['id'];
	$str_key="";
	foreach ($arr as $key => $value) {
		$sql = "delete from db_members where id =".$value;
		mysqli_query($conn,$sql);
		$str_key.=$value.",";
	}
	$new_str=substr($str_key,0,strlen($str_key)-1);
	echo "<script>alert('删除编号为".$new_str."的信息成功!');location='user.php'</script>";
}
?>