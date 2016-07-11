<?php 
header("Content-Type:text/html;charset=utf8");
echo "<b>倒序输出乘法表</b><br>";
for($i=9;$i>0;$i--){
	for($j=$i;$j>0;$j--) {
		echo "$j*$i=".($j*$i)."&nbsp;";
	}
	echo "<br>";
}
?>