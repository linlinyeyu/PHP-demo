<?php 
header("Content-type:text/html;charset=utf-8");
echo "<center><b>奇数行变色</b></center>";
echo "<table border='1' width='200px' align='center'>";
for ($i=1; $i < 5; $i++) { 
	if($i%2==0){
		echo "<tr><td>1</td><td>2</td><td>3</td>";
		continue;
	}
	echo "<tr bgcolor='red'><td>1</td><td>2</td><td>3</td>";
}
echo "</table>";
?>