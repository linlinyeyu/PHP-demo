<meta http-equiv="Content-Type" content="text/html;charset=utf8">
<form method="post" action="calculator.php">
	结果:<input type="text" name="sum" id="sum" size="15"></input><br>
	数字1:<input type="text" name="num1" size="10"></input><br>
	运算符:<select name="sub">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<br>
	数字2：<input type="text" name="num2" size="10"></input><br>
	<input type="submit" value="计算"></input>&nbsp;
	<input type="reset" value="重置"></input>
</form>
<?php 
if(!empty($_POST['num1'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$sub = $_POST['sub'];
	$sum = 0;
	switch ($sub) {
		case '+':
			$sum = $num1+$num2;
			break;
		case '-':
			$sum = $num1-$num2;
			break;
		case '*':
			$sum = $num1*$num2;
			break;
		case '/':
			$sum = $num1/$num2;
			break;
	}
	echo "<script>alert('计算结果为:".$sum."');</script>";
	echo "<script>document.getElementById('sum').value='".$sum."'</script>";
}
?>
