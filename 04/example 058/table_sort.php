<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf8">
	<title>单击表头排序表格内容</title>
	<style type="text/css">
*{
margin:0px;
padding:0px;
}
body{
background:#ccc;
}
table{
width:350px;
margin:0 auto;
background-color: #eeeeee;
}
table th{
cursor:hand;
}
table td{
background-color: #FFFFFF;
font-size:12px;
font-weight:normal;
text-align:center;
line-height:16px;
}
</style>
	<script type="text/javascript">
		function sortCells(type) {
			var tbs = document.getElementsByTagName("table")[0];
			var arr = [];
			for(var i=1;i<tbs.rows.length;i++) {
				var text = tbs.rows[i].cells[type].innerText;
				arr.push(text);
			}
			if (type==0) {
				arr.sort(function (a,b) {return a-b});
			}else {
				arr.sort();
			}
			for(var j=1;j<tbs.rows.length;j++) {
				tbs.rows[j].cells[type].innerText = arr[j-1];
			}
		}
	</script>
</head>
<body>
<center>
	<table border="0">
		<tr>
			<th onclick="sortCells(0);">序号</th>
			<th onclick="sortCells(1);">姓名</th>
			<th onclick="sortCells(2);">日期</th>
		</tr>
		<tr>
			<td>134</td>
			<td>李四</td>
			<td>2011-09-21</td>
		</tr>
		<tr>
			<td>122</td>
			<td>dream</td>
			<td>2012-01-22</td>
		</tr>
		<tr>
			<td>121</td>
			<td>ata</td>
			<td>2011-11-21</td>
		</tr>
		<tr>
			<td>457</td>
			<td>上海</td>
			<td>2012-11-21</td>
		</tr>
		<tr>
			<td>234</td>
			<td>百度</td>
			<td>2009-07-21</td>
		</tr>
		<tr>
			<td>29</td>
			<td>新浪</td>
			<td>2010-10-21</td>
		</tr>
	</table>
</center>
</body>
</html>