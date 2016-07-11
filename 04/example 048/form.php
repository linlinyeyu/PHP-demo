<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
	<title>注册表单</title>
	<style type="text/css">
		.bottom{
			padding: 1px 10px;
			font-size: 12px;
			border: 1px solid #1E7ACE;
			background: #D0F0FF;
		}
		.input{
			width: 100px;
		}
		.enter{
			text-align: center;
		}
		#myform{
			width: 450px;
			margin: 15px auto;
			padding: 20px;
			text-align: left;
			border: 1px solid #A4CDF2;
		}
		fieldset{
			padding: 10px;
			margin-top: 5px;
			border: 1px solid #A4CDF2;
			background: #fff;
		}
		fieldset legend{
			color: #1E7ACE;
			font-weight: bold;
			padding: 3px 20px 3px 20px;
			border: 1px solid #A4CDF2;
			background: #fff;
		}
		fieldset label{
			float:left;
			width: 120px;
			text-align: right;
			padding: 4px;
			margin: 1px;
		}
		fieldset div{
			clear:left;
			margin-bottom: 2px;
		}
	</style>
</head>
<body>
<div id="myform">
	<center><h3>创建新用户</h3></center>
	<form method="post" name="myForm" id="myForm">
		<fieldset>
			<div>
				<label for="Name">用户名</label>
				<input type="text" name="Name" class="input" id="Name" size="20" maxlength="30"></input>*(可输入字母数组下划线)<br/>
			</div>
			<div>
				<label for="Email">email</label>
				<input type="text" name="Email" class="input" id="Email" size="20" maxlength="150"></input>*
				<br/>
			</div>
			<div>
				<label for="password">输入密码</label>
				<input type="password" name="password" class="input" id="password" size="18" maxlength="15">
				*(长度不能超过15个字符)<br/>
			</div>
			<div>
				<label for="confirm_password">重复密码</label>
				<input type="password" name="confirm_password" class="input" id="confirm_password" size="18" maxlength="15"></input>*<br/>
			</div>
			<div>
				<label for="AgreeToTerms">同意用户服务条款</label>
				<input type="checkbox" name="AgreeToTerms" id="AgreeToTerms" value="1"></input>
				<a href="#" title="您是否同意服务条款">单击此查看用户条款</a>*
			</div>
			<div class="enter">
				<input name="submit" type="submit" class="buttom" value="提交"></input>
				<input name="submit" type="reset" class="buttom" value="重置"></input>
			</div>
		</fieldset>
	</form>
	<br/>
</div>
</body>
</html>