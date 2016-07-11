<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php 
if(isset($_POST['username'])) {
	$username = strtolower($_POST['username']);
	echo "<script>alert('".$username."')</script>";
 }
 ?>
