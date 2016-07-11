<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<form action="user_table.php" method="post">
	<b>输入行列生成表格</b><br><br>
	输入列:<input type="text" name="cols"></input><br><br>
	输入行:<input type="text" name="rows"></input><br><br>
	<input type="submit" value="生成表格"></input>&nbsp;
	<input type="reset" value="重置行列"></input>
</form>
<?php 
if(!empty($_POST['cols'])) {
	echo "<center><b>用户动态输出表格行".$_POST['cols'].",列".$_POST['rows']."<b></center>";
	$color = "";
	echo "<table border='1' width='200px' height='200px' aligh='center' cellspacing='0'>";
	for($i = 0; $i<$_POST['cols'];$i++) {
		if($i%2==0) {
			$color = 'red';
		}else{
			$color = 'blue';
		}
		echo "<tr bgcolor='".$color."'>";
		for($j=0;$j<$_POST['rows'];$j++) {
			echo "<td>".$j."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
?>