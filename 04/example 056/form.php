<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
	<title>用户注册简单验证</title>
	<style type="text/css">
		*{
padding:0px;
}
.td_left{
width:142px;
height:30px;
text-align:right;
line-height:30px;
background:#E5F6BF;
}
.td_right{
width:385px;
height:30px;
text-align:left;
line-height:30px;
background:#E5F6BF;
}
#jianjie{
border-right: #6e9671 1px solid;
border-top: #6e9671 1px solid; 
border-left: #6e9671 1px solid; 
width: 230px; 
border-bottom: #6e9671 1px solid; 
height: 70px;
background-color: #ffffff;
}
.zhuce{
border-right: #6e9671 1px solid;
border-top: #6e9671 1px solid; 
border-left: #6e9671 1px solid; 
width: 50px;
border-bottom: #6e9671 1px solid; 
height: 25px;
background-color: #ffffff;
}
	</style>
	<script type="text/javascript">
		function check() {
			if(document.zcform.hy_username.value==""||document.zcform.hy_username.value.length<3) {
				alert("用户名不能为空");
				zcform.hy_username.focus();
				return false;
			}
			if(document.zcform.hy_password.value==""||document.zcform.hy_password.value.length<6) {
				alert("有效密码在6位以上");
				zcform.hy_password.value="";
				zcform.hy_password.focus();
				return false;
			}
			if(document.zcform.password2.value!=document.zcform.hy_password.value) {
				alert("确认密码有误，请重新输入");
				zcform.password2.value="";
				zcform.password2.focus();
				return false;
			}
			if(document.zcform.okname.value==""||document.zcform.okname.value.length<4) {
				alert("真实姓名不正确，长度应在4字节以上");
				zcform.okname.focus();
				return false;
			}
			if(document.zcform.tel.value==""||document.zcform.tel.value.length<7||isNaN(document.getElementById("tel").value)) {
				alert("联系电话输入错误");
				zcform.tel.value="";
				zcform.tel.focus();
				return false;
			}
			if(document.zcform.zhengjian.value==""||document.zcform.zhengjian.value.length<15||document.zcform.zhengjian.value.length>18) {
				alert("身份证号必须在15位以上");
				zcform.zhengjian.value="";
				zcform.zhengjian.focus();
				return false;
			}
			if(document.zcform.qq.value==""||isNaN(document.getElementById("qq").value)) {
				alert("qq号码有误");
				zcform.qq.value="";
				zcform.qq.focus();
				return false;
			}
			if(document.zcform.yb.value=="") {
				alert("邮编不能为空");
				zcform.yb.focus();
				return false;
			}
			if(document.zcform.email.value=="") {
				alert("email不能为空");
				zcform.email.focus();
				return false;
			}
			if(document.zcform.jianjie.value.length<20) {
				alert("提示:\n\n简历必须在20字以上");
				document.zcform.jianjie.focus();
				return false;
			}else{
				zcform.submit();
			}
		}
	</script>
</head>
<body>
<form action="#" method="post" name="zcform" onSubmit="return check();">
	<table width="678px" height="500" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" class="body">
		<tr>
			<td colspan="2" align="center" bgcolor="#E5F6BF"><b>用户注册表单</b></td>
		</tr>
		<tr>
			<td class="td_left">用户名:</td>
			<td class="td_right">&nbsp;<input name="hy_username" type="text" class="gray"
			id="hy_username" size="30"></input><input name="jiance" onclick="openwin();" type="button" id="jiance" value="检测用户名">*</input></td>
		</tr>
		<tr>
<td class="td_left" >密码：</td><td class="td_right" >&nbsp;<input name="hy_password" type="password"  class="gray"  id="hy_password" size="30" />* </td>
</tr>
<tr>
<td class="td_left">确认密码：</td>
<td class="td_right">&nbsp;
<input name="password2" type="password" class="gray" id="password2" size="30" />
*</td>
</tr>
<tr>
<td width="142" height="14" align="right" valign="middle" bgcolor="#E5F6BF" >性别：</td><td width="385" height="14" align="left" valign="middle" bgcolor="#E5F6BF" >&nbsp;<input name="sex" type="radio" value="女" checked />女<input name="sex" type="radio" value="男" />男 </td>
</tr>
<tr>
<td class="td_left">真实姓名：</td>
<td class="td_right">&nbsp;
<input name="okname" type="text" class="gray" id="okname" size="30" />
<font color="#ff0000">*</font></td>
</tr>
<tr>
<td class="td_left" >联系电话：</td>
<td class="td_right" >&nbsp;<input name="tel" type="text" class="gray" id="tel" size="30" />*</td>
</tr>
<tr>
<td width="142" height="7" align="right" valign="middle" bgcolor="#E5F6BF" >身份证：</td><td width="385" height="7" align="left" valign="middle" bgcolor="#E5F6BF" >&nbsp;<input name="zhengjian" type="text" class="gray" id="zhengjian" size="30" /></td>
</tr>
<tr>
<td width="142" height="7" align="right" valign="middle" bgcolor="#E5F6BF" >腾讯QQ：</td><td width="385" height="7" align="left" valign="middle" bgcolor="#E5F6BF" >&nbsp;<input name="qq" type="text" class="gray" id="qq" size="30" /></td>
</tr>
<tr>
<td class="td_left" >邮政编码：</td><td class="td_right" >&nbsp;<input name="yb" type="text" class="gray"   id="yb" size="30" /><font color="#ff0000">*</font></td>
</tr>
<tr>
<td height="30" align="right" valign="middle" bgcolor="#E5F6BF" >E-mail： </td><td height="30" align="left" valign="middle" bgcolor="#E5F6BF">&nbsp;<input name="email" type="text" class="gray"   id="email" size="30" />*</td>
</tr>
<tr>
<td height="30" align="right" valign="middle" bgcolor="#E5F6BF" >个人简介： </td><td height="30" align="left" valign="middle" bgcolor="#E5F6BF" >&nbsp;<textarea name="jianjie" cols="30" rows="5" class="gray" id="jianjie"></textarea></td>
</tr>
		<tr>
			<td height="35" colspan="2" align="center" valign="middle" bgcolor="#E5F6BF"><input type="submit" name="Submit" class="zhuce" value="注册"></input>&nbsp;<input type="reset" name="reset" id="reset" class="zhuce" value="取消"></input><input name="action" type="hidden" id="action" value="add"></input></td>
		</tr>
	</table>
</form>
</body>
</html>