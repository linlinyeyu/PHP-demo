<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="header"><b>文本文件内容分页显示</b></div>
	<div id="content">
	<div id="show">
	<p>
		<?php
			function m_substr($str,$start,$length) {
			$str_length = $start+$length;
			$tmp_str = "";
			for($i = 0;$i<$str_length;$i++) {
			if(ord(substr($st,$i,1))==0x0a) {
				$tmp_str .= '<br/>';
			}
			if(ord(substr($str,$i,1))>0xa0) {
				$tmp_str .= substr($str,$i,2);
				$i++;
			}else {
				$tmp_str .= substr($str,$i,1);
			}
			}
				return $tmp_str;
			}

			if(isset($_GET['page'])) {
				$page = $_GET['page'];
			}else{
				$page = 1;
			}
			$counter = file_get_contents("example.txt");
			$length = strlen($counter);
			$page_count = ceil($length/400);
			$str = m_substr($counter,0,($page-1)*400);
			$str1 = m_substr($counter,0,$page*400);
			echo substr($str1,strlen($str),strlen($str1)-strlen($str));
		?>
	</p>
	</div>
	<center>
		<span>
			<?php 
				echo "当前页:".$page."/".$page_count."&nbsp";
				echo "<a href=index.php?page=1>首页</a>";
				if($page>1) {
					echo "<a href=index.php?page=".($page-1).">上一页</a>";
				}
				if($page<$page_count) {
					echo "<a href=index.php?page=".($page+1).">下一页</a>";
				}
				echo "<a href=index.php?page".$page_count.">尾页</a>";
			?>
		</span>
	</center>
	</div>
	<div id="footer"><br>文本分页</div>
</body>