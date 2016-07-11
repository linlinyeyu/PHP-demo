<?php 
		$num=0;
		if(!empty($_POST['str'])) {
			$str=$_POST['str'];
			do{
				echo "<font class='font'>".$str."</font>";
				$num++;
			}while($num<2);
		}
	?>
