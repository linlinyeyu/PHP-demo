<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<!--文本加载区域-->
<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<td bgcolor="#FFFFFF">
			<?php 
			$str = file_get_contents("test.txt");
			echo $str;
			 ?>
		</td>
	</tr>
</table>
<!--同意注册按钮-->
<form action="zhuce.php" method="post" name=register id="form">
	<input name="action" type="hidden" id="action" value="agree">&nbsp;</input>
	<input name="Submit" type="submit" value="同意注册"></input>
</form>
<!--不同意注册按钮-->
<form action="" method="post" name="form" id="form">
&nbsp;
	<a href="index.php">
	<input name="Reset2" type="reset" id="Reset2" value="我不同意"></input>
	</a>
</form>