<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<?php 
function compDate($Date_1,$Date_2) {
	$Date_list_1 = explode("-",$Date_1);
	$Date_list_2 = explode("-",$Date_2);
	$d1 = mktime(0,0,0,$Date_list_1[1],$Date_list_1[2],$Date_list_1[0]);
    $d2 = mktime(0,0,0,$Date_list_2[1],$Date_list_2[2],$Date_list_2[0]);
    $days = round(($d1-$d2)/3600/24);
    return $days;
 }

 $today = date("Y-m-d H:i:s");
 $day = "2018-08-01 00:00:00";
 $days = compDate($day,$today);
 echo "<b>距离宇宙毁灭还有:<font color = 'red'>".$days."<font>天</b>";
 ?>
