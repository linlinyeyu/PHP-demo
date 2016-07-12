<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>完整日期显示</title>
<script type="text/javascript">
function getDayTime(){
today = new Date();
var date;
var arr=new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
date = "日期："+(today.getYear())+"年"+(today.getMonth() + 1 )+"月"+today.getDate()+"日"+arr[today.getDay()]+"";
document.write(date);
}
function getNowTime(){
var digital = new Date();
var hours = digital.getHours();
var minutes = digital.getMinutes();
var seconds = digital.getSeconds();
var amOrPm = "上午";
if (hours > 11) amOrPm = "下午";
if (hours > 12) hours = hours - 12;
if (hours == 0) hours = 12;
if (minutes < 10) minutes = "0" + minutes;
if (seconds < 10) seconds = "0" + seconds;
displayTime=hours+":"+minutes+":"+seconds+" "+amOrPm;
$('nowTime').innerHTML = "时间："+displayTime;
setTimeout("getNowTime()", 1000);
} 
function $(id){
return document.getElementById(id);
}
</script>
</head>

<body>
	<table width="298"  border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<th height="30"	bgcolor="#cccccc">完整日期时间显示</th>
		</tr>
		<tr>
			<td height="50" bgcolor="#f4f4f4" align="center">
			<script>
				getDayTime();
			</script>
			</td>
		</tr>
		<tr>
			<td height="50" bgcolor="#f4f4f4" align="center">
				<span id='nowTime'></span>
				<script>
				getNowTime();
				</script>
			</td>
		</tr>
	</table>
</body>
</html>