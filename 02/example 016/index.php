<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>文件引入</title>
<?php include("header.php") ?>
<div style="color: red";>
<center>
	<a href="index.php?id=index">首页</a>
	<a href="index.php?id=second">简介</a>
</center>
</div>
<?php
switch ($_GET['id']) {
	case 'index':
		require("main.php");
		break;
	case 'second':
		require("main2.php");
		break;
	
	default:
		require("main.php");
		break;
}
 ?>
<?php include("footer.php") ?>