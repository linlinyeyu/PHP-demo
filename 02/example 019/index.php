<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form method="post" action="index.php">
	选择连接方式:
	<br>
	<select name="host">
		<option value="localhost" selected="">localhost</option>
		<option value="127.0.0.1">127.0.0.1</option>
	</select>
	<br><br>
	用户名:<input type="text" value="" name="user"><br></input>
	密&nbsp;&nbsp;&nbsp;码:<input type="password" value="" name="pwd"><br><br></input>
	<input type="submit" value="连接"></input>
	<input type="reset" value="重置"></input>
</form>

<?php
if(isset($_POST['host'])) {
	$host = $_POST['host'];
	$user = $_POST['user'];
	$pwd = $_POST['pwd'];
	$conn = new PDO('mysql:host=localhost;dbname=test',$user,$pwd);
	if($conn) {
		echo "<script>alert('数据库连接成功')</script>";
	}
	} 
?>
