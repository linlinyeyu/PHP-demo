<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
	<title>验证中文输入和显示</title>
	<script type="text/javascript">
		function check() {
			var str = $('int').value;
			if(!isChinese(str)) {
				alert("字符串中有其他字符");
				$('int').focus();
			}else{
				$('showarea').innerHTML +="中文:<font color='red'>"+str+"</font><br>";
				alert("字符串为中文显示");
			}
		}

		function isChinese(str) {
			for(var i=0;i<str.length;i++) {
				if(str.charCodeAt(i)>=10000) {
					return true;
				}
			}
		}

		function $(obj) {
			return document.getElementById(obj);
		}
	</script>
</head>
<body>
<b>中文输入验证显示</b><br><br>
<input type="text" name="int" id="int" value="请输入纯中文字符"></input><br>
<input type="button" value="显示" onclick="check()"></input><br>
<div id="showarea"></div>
</body>
</html>