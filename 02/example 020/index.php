<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<style>
body{
background:#ccc;
}</style>
<body>
<b>数据库选择列表<b><br>
<form action="check.php" method="post">
<select name="database" size="10">
<option value="0" selected>请选择</option>
<?php
$conn = mysql_connect("localhost","root","687091");
$re = mysql_query("show databases");
while($arr = mysql_fetch_assoc($re)){?>
<option value="<?echo $arr['Database'];?>"><?echo $arr['Database']."<br>";?></option>
<?
}
?>
</select>
<input type="submit" value="选择">
</form>
</body>
</html>

