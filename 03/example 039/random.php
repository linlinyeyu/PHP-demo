<?php 
header("Content-type:text/html;charset=utf-8");
$num=5;
$start=0;
$end=9;
$connt=0;
while ($connt<$num) {
	$a[]=rand($start,$end);
	$ary=array_unique($a);
	$connt=count($ary);
}
$str="";
foreach ($ary as $key => $value) {
	$str.="&nbsp;".$value;
}
echo "<b>随机输出5个随机数</b><br><br>";
echo "随机数:<b>".$str."</b>";
echo "<b><br><br><b><font color='red'>范围0~9且不重复</font><b>";
?>