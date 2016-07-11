<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<form method="post" action="date.php">
	<b>单机查询日程</b>
	<br><br>
	输入查询日期:<br>
	<input type="text" value="" name="date"></input><br><br>
	<input type="submit" value="查询"></input>&nbsp;
	<input type="reset"></input>
</form>
<?php 
if(!empty($_POST['date'])) {
	$date = $_POST['date'];
	$rc = array(
		'07-07' => '外地出差',
		'07-12' => '同学聚会',
		'07-21' => '信用还贷',
		'07-23' => '购买商品',
		'07-29' => '收发邮件'
		);
	foreach ($rc as $key => $value) {
		if($date == $key) {
			echo "<script>alert('".$key."日备忘".$value."')</script>";
			break;
		}
		}
		echo "<scrip>alert('无备忘')</script>";
	}
?>