<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php 
$conn = mysqli_connect("localhost","root","");
$database = $_POST['database'];
if($database === '0') {
	echo "<script>alert('没有选择数据库');</script>";
}
else{
	mysqli_select_db($conn,$_POST['database']);
	echo "<script>alert('选择数据库成功');</script>";
}
?>
