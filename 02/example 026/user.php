<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
	<title>用户管理</title>
		<style>
			body{text-align:center;}
			#header{width:600px;height:50px;margin:0px auto;background:#E3EFFB;line-height:50px;font-size:20px;}
			#main{width:600px;margin:10px;margin:0px auto;}
			#main table{widt h:600px;background:#E3EFFB;cellspacing:1px;text-align:center;}
			#main table tr{background:white;}
			#main table img{border:0px;}
			#page{width:600px;height:30px;background:#E3EFFB;line-height:30px;}
		</style>
</head>
<body>
<div id="header">网站管理中心--会员列表</div>
		<div id="main">
<form action="check.php" method="post" name="myForm">
			<table >
				<tr>
					<th width="100">编号</th>
					<th width="150">用户名</th>
					<th width="200">邮件地址</th>
					<th width="200">注册日期</th>
					<th width="50">选择</th>
				</tr>
				<?php
include('./conn.php');
$page = isset($_GET['page'])?$_GET['page']:1;
$pagesize = 5;
$sql = "select count(*) from db_members";
$result = mysqli_query($conn,$sql);
$return = $result->fetch_row();
$maxrows = $return[0];
$maxpage = ceil($maxrows/$pagesize);
if($page>$maxpage) {
	$page = $maxpage;
}
if($page<1) {
	$page = 1;
}
$offset = ($page -1)*$pagesize;
$sql = "select * from db_members limit {$offset},{$pagesize}";
$result = mysqli_query($conn,$sql);
while($rows = mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>{$rows['id']}</td>";
	echo "<td>{$rows['user_name']}</td>";
	echo "<td>{$rows['address']}</td>";
	echo "<td>".date("Y-m-d H:i:s",$rows['login_date']+8*3600)."</td>";
	echo "<td><input type='checkbox' value='{$rows['id']}' name='id[]'></td>";
	echo "</tr>";
}
?>
</table>
<br/>
<div id="page">
<?php
echo "当前{$page}/{$maxpage}页 共计{$maxrows}条信息";
echo "<a href='user.php?page=1'>首页</a>";
echo "<a href='user.php?page=".($page-1)."'>上一页</a>";
echo "<a href='user.php?page=".($page+1)."'>下一页</a>";
echo "<a href='user.php>page=".($maxpage)."'>最后一页</a>";
echo "&nbsp;<input type='submit' value='批量删除'>";
?>
</div>
</form>
</div>
</body>
</html>
