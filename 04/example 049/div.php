<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>New Document</title>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="author">
	<meta name="Keywords" content="cstp">
	<meta name="Description" content="no-description">
	<meta http-equiv="Content-type" content="text/html;charset=utf8">
	<style>
		body {
				font-family: Arial, Helvetica, sans-serif;
				font-size:12px;
				color:#666666;
				background:#fff;
				text-align:center;
			}
		* 	{
				margin:0;
				padding:0;
			}
		a 	{
				color:#1E7ACE;
				text-decoration:none; 
			}
		a:hover {
			color:#000;
			text-decoration:underline;
			}
		h3{
			font-size:14px;
			font-weight:bold;
			}
		pre,p{
			color:#1E7ACE;
			margin:4px;
			}
		input,select,textarea{
			padding:1px;
			margin:2px;
			font-size:11px;
			}
		.buttom{
		padding:1px 10px;
		font-size:12px;
		border:1px #1E7ACE solid;
		background:#D0F0FF;
			}
		#myform{
		width:450px;
		margin:15px auto;
		padding:20px;
		text-align:left;
		border:1px solid #A4CDF2;
		}
		fieldset{
		padding:10px;
		margin-top:5px;
		border:1px solid #A4CDF2;
		background:#fff;
		}
		fieldset legend{
		color:#1E7ACE;
		font-weight:bold;
		padding:3px 20px 3px 20px;
		border:1px solid #A4CDF2; 
		background:#fff;
		}
		fieldset label{
		float:left;
		width:120px;
		text-align:right;
		padding:4px;
		margin:1px;
		}
		fieldset div{
		clear:left;
		margin-bottom:2px;
		}
		.input{width:120px;}
		.enter{text-align:center;}
		.clear{clear:both;}
		#close{
		position:absolute;left:440px;top:30px;width:50px;font-size:14px;
		}
	</style>
	<script type="text/javascript">
function show(){
document.getElementById("zhezhao").style.display = "";
document.getElementById("contains").style.display = "";
document.getElementById("zhezhao").style.filter = "Alpha(Opacity=50)";//透明度
}
function hide(){
document.getElementById("zhezhao").style.display = "none";
document.getElementById("contains").style.display = "none";
}
</script>
</head>
<body>
	<input onclick="show()" type="button" value="单击显示注册表单" style="font-size:15px;"/>
	<div style="width:100%; background-color:Gray; display:none; height:100%; position:absolute; left: 0; top: 0;" id="zhezhao"></div>
	<div style="width: 520px; background-color:#fff; display:none; height:auto; position:absolute; left: 400px; top: 70px;" id="contains">
		<div id="myform">
			<center>
				<h3>创建新用户</h3>
			</center>
			<input onclick='hide()' type='button' value='关闭' id="close"/>
			<form method="post" name="myForm" id="myForm">
				<fieldset>
					<legend>用户注册</legend>
					<div>
						<label for="Name">用户名</label>
						<input type="text" name="Name" class="input"
 id="Name" size="20" maxlength="30" />
						*(可输入字母数组下划线)
						<br/>
					</div>
					<div>
						<label for="Email">email</label>
						<input type="text" name="Email" class="input" id="Email" size="20" maxlength="150" />
						*
						<br/>
					</div>
					<div>
						<label for="password">输入密码</label>
						<input type="password" name="password" class="input" id="password" size="18" maxlength="15" />
						*(长度不能超过15个字符)
						<br/>
					</div>
					<div>
						<label for="confirm_password">重复密码</label>
						<input type="password" name="confirm_password" class="input" id="confirm_password" size="18" maxlength="15" />
						*
						<br/>
					</div>
					<div>
						<label for="AgreeToTerms">同意用户服务条款</label>
						<input type="checkbox" name="AgreeToTerms" id="AgreeToTerms" value="1" />
						<a href="#" title="您是否同意服务条款">点此查看用户条款</a>
						*
					</div>
					<div class="enter">
						<input name="create791" type="submit" class="buttom" value="提交" />
						<input name="Submit" type="reset" class="buttom" value="重置" />
					</div>
				</fieldset>
			</form>
			<br/>
		</div>
	</div>
	<div id="cli"></div>
</body>
</html>