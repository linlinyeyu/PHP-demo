<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf8 ">
	<title>批量操作表格元素</title>
	<style type="text/css">
table{
    border:#0FF 1px solid;
    border-collapse:collapse;
    }
   
table th{
        text-align:center;
        }
table td{
    border:1px solid #999;
    text-align:center;
        }
.one{
    background:#6cf;
    }
.two{
    background:#FC6;
    }
</style>
	<script type="text/javascript">
		function changebox(type) {
			var tbs = document.getElementById('tbs');
			var chks = tbs.getElementsByTagName('input');
			switch(type) {
				case "qx":
				for(var i=0;i<chks.length;i++) {
					chks[i].checked=true;
				}
				break;
				case "qxx":
				for(var i=0;i<chks.length;i++) {
					chks[i].checked=false;
				}
				break;
				case "fx":
				for(var i=0;i<chks.length;i++) {
					if(chks[i].checked) {
						chks[i].checked=false;
					}else{
						chks[i].checked=true;
					}
				}
			}
		}
		function changecolor() {
			var tr = document.getElementsByTagName('tr');
			tr[0].style.background="#0066ff";
			tr[tr.length-1].style.background="#0066ff";
		}
		function del() {
			var input=document.getElementsByName("check[]");
			for (var i = input.length-1; i >= 0; i--) {
				if(input[i].checked==true) {
					var td = input[i].parentNode;
					var tr = td.parentNode;
					var table = tr.parentNode;
					table.removeChild(tr);
				}
			}
		}
	</script>
</head>
<body>
<table width="400" border="0" align="center">
	<tr>
		<th>选项</th>
		<th>发件人</th>
		<th>邮件名称</th>
		<th>邮件附属信息</th>
	</tr>
	<tbody id="tbs">
		<tr class="one">
			<td>
				<input type="checkbox" name="check[]"></input>
			</td>
			<td>王大力</td>
			<td>wdl@163.com</td>
			<td>个人邮箱</td>
		</tr>
		<tr class="two">
    <td><input type="checkbox" name="check[]"></td>
    <td>无双</td>
    <td>ws1187@163.com</td>
    <td>个人邮箱</td>
  </tr>
  <tr class="one">
    <td><input type="checkbox" name="check[]" /></td>
    <td>溧阳费</td>
    <td>lyf@163.com</td>
    <td>企业邮箱</td>
  </tr>
  <tr class="two">
    <td><input type="checkbox" name="check[]"></td>
    <td>张树新</td>
    <td>wdlzl1212@163.com</td>
    <td>个人邮箱</td>
  </tr>
  <tr class="one">
    <td><input type="checkbox" name="check[]"></td>
    <td>刘易阳</td>
    <td>lyy@126.com</td>
    <td>企业邮箱</td>
  </tr>
  <tr class="two">
    <td><input type="checkbox" name="check[]"></td>
    <td>飞翔</td>
    <td>fx@163.com</td>
    <td>企业邮箱</td>
  </tr>
  <tr class="one">
    <td><input type="checkbox" name="check[]"></td>
    <td>王强</td>
    <td>wq@163.com</td>
    <td>个人邮箱</td>
  </tr>
  <tr class="two">
    <td><input type="checkbox" name="check[]"></td>
    <td>李飞</td>
    <td>lf@163.com</td>
    <td>企业邮箱</td>
  </tr>
  <tr class="one">
    <td><input type="checkbox" name="check[]"></td>
    <td>赵峰</td>
    <td>zhaofeng@163.com</td>
    <td>个人邮箱</td>
  </tr>
  </tbody>
	</tbody>
	<tr>
		<th>选项</th>
		<td colspan="3" align="center">
			<input type="button" id="qx" onclick="changebox('qx')" value="全选"></input>
			<input type="button" id="qxx" onclick="changebox('qxx')" value="取消全选"></input>
			<input type="button" id="fx" onclick="changebox('fx')" value="反选"></input>
			<input type="button" id="del" onclick="del()" value="删除所选附件"></input>
		</td>
	</tr>
</table>
</body>
</html>