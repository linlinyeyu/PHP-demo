<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form action="index.php" method="post">检测文件名后缀<br>
<input type="file" value="" name="file"></input>
<input type="submit" value="检测"></input>
</form>
<?php 
$pic=$_POST['file'];
$pics=explode(".", $pic);
$num = count($pics);
echo "<br>上传部分扩展名为:".$pics[$num-1];
 ?>