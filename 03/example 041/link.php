<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
	<title>连接</title>
	<style type="text/css">
		#footer ul {
			width:900px;
			margin: auto;
			list-style-type: none;
		}
		#footer ul li{
			float: left;
			height: 103px;
			margin-left:3px;
			margin-right: 3px;
		}
		#footer ul li a{
			margin-top: 13px;
		}
		#foot{
			width: 100%;
			height: 32px;
			background: #eee url('./links.gif') repeat;
			text-align: center;
			line-height: 32px;
		}
	</style>
</head>
<body>
	<div id="footer">
		<ul>
			<?php 
				for ($i=0; $i <=5; $i++) { 
					echo "<li><a href=\"http://www.baidu.com\"><img src=\"./images/link".$i.".gif\" width=\"160\" height=\"70\"></a></li>";
				}
			?>
		</ul>
	</div>
</body>
</html>