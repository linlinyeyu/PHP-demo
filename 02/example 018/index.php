<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
$stime = microtime(true);
echo "该脚本运行时间为:";
$etime = microtime(true);
$strtime = var_export($etime,true);
if(substr_count($strtime,"E")) {
	$float_val = floatval(substr($strtime,5));
	$total = $float_val/100000;
	echo $total;
	echo "$total"."秒";
}
 ?>