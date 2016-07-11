<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<title>登录</title>
</head>
<body>
<form action="check.php" method="post">
	<table width="250px" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
		<tbody>
		<tr>
			<td colspan="2" height="25" bgcolor="#F7F7F7" align="center">用户登录-不区分大小写</td>
		</tr>
		</tbody>
		<tr>
			<td width="20%" height="25" align="right" bgcolor="#F7F7F7">用户名:</td>
			<td height="25" bgcolor="#F7F7F7"><input name="username" id="username" type="text"></input></td>
		</tr>
		<tr>
			<td height="25" align="right" bgcolor="#F7F7F7">密&nbsp;&nbsp;码:</td>
			<td height="25" bgcolor="#F7F7F7"><input name="userpwd" id="userpwd" type="password"></input></td>
		</tr>
		<tr align="center">
			<td height="25" colspan="2" align="right" bgcolor="#F7F7F7"></td><table width="100%" border="0" cellspacing="0" cellpadding="0"></table>
		</tr>
		<tr>
		<td width="39%" align="right"><span style="word-spacing: 0pt;margin-top: 0pt;margin-bottom: 0pt;"><input name="Login" id="Login" value="登录" type="submit"></input></span>&nbsp;</td>
		<td width="61%"><input name="Reset" id="Reset" type="reset" value="重置"></input></td>
		</tr>
	</table>
</form>
</body>
</html>