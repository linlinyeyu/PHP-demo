<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<form action="result.php" method="post">
	<b>输入分数查询成绩</b><br><br>
	分数:<input type="text" value="" name="result"></input><br><br>
	<input type="submit" value="提交查询"></input>&nbsp;&nbsp;
	<input type="reset" value="重置分数"></input>
</form>
<?php 
if(!empty($_POST['result'])) {
	$result = $_POST['result'];
	if($result>=80 && $result<=100){
		echo "<script>alert('您的成绩为优秀')</script>";
	}elseif ($result<80 && $result>= 60) {
		echo "<script>alert('您的成绩为良好')</script>";
	}else {
		echo "<script>alert('您的成绩不及格')</script>";
	}
}
?>