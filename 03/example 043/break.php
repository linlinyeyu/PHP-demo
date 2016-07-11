<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<form method="post" action="break.php">
	<b>输入个数返回偶数和</b><br><br>
	数量:<input type="text" value="" name="num"></input><br><br>
	<input type="submit" value="计算"></input>
	<input type="reset" value="重置"></input>
</form>
<?php 
if(!empty($_POST['num'])) {
	count_num($_POST['num']);
}
function count_num($num_end =10 ) {
	$sum = 0;
	$num = 0;
	for ($i=0; ; $i++) { 
		if ($num>$num_end) {
			break;
		}
		if($i%2==0) {
			$num++;
			$sum+=$i;
		}
	}
	echo "<script>alert('前".($num-1)."个偶数和为:".$sum."')</script>";
}
?>