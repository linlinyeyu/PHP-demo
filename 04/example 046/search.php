<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
	<title>搜索</title>
	<style type="text/css">
		#search{
			width: 350px;
			height: 25px;
			margin: 30px auto;
			padding: 4px 10px;
			line-height: 20px;
			color: #000;
			background: #ddd;
			overflow: hidden;
		}
		#search label{
			float: left;
			line-height: 25px;
			font-weight: 800;
			color: #c00;
		}
		#search #insert{
			padding: 2px 4px;
			border: 1px solid #06c;
			margin-top: 1px;
			color: #666;
			float: left;
			margin: 0 5px;
			width: 150px;
			height: 16px;
		}
	</style>
</head>
<body>
	<div id="search">
		<form action="" method="post">
			<label>PHP经典案例查询</label>
			<input name="chepai" type="text" id="insert" value="输入查询关键字">
			<input name="btn" id="btn" type="button" value="查询">
		</form>
	</div>
</body>
</html>