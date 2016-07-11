<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<title>秒表计时器</title>
</head>
<body>
<b>简单秒表计时器</b><br><br>
<input type="text" value="0秒" id="show" size="10"></input><br><br>
<input type="button" value="开始" onclick="_start()"></input>
<input type="button" value="暂停" onclick="pause()"></input>
<input type="button" value="完全停止" onclick="_stop()"></input>
<div id="contain">
	<b>历史纪录区域:</b>
	<div id="his"></div>
</div>
	<script type="text/javascript">
		var temp = true;
		var num = 0;
		var t;
		var div = document.getElementById('show');
		var div1 = document.getElementById('his');
		function showTime() {
			num++;
			div.value = num+"秒";
		}
		function _start() {
			if(temp) {
				t = setInterval("showTime()",1000);
				temp = false;
			}
		}
		function pause() {
			clearInterval(t);
			temp = true;
			div1.innerHTML += "<b>记录秒数为："+num+"</b><br><br>";
		}
		function _stop() {
			clearInterval(t);
			temp = true;
			num = 0;
			div.value = "0秒";
		}
	</script>
</body>
</html>