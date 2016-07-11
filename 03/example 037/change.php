<meta http-equiv="Content-Type" content="text/html; charset=utf8 ">
<div id="header">
	<ul>
		<li><a href="?id=shop1">基本商品</a></li>
		<li><a href="?id=shop2">推荐商品</a></li>
		<li><a href="#">分类产品</a></li>
		<li><a href="#">其他产品</a></li>
	</ul>
</div>
<div id="pic">
	<b>热点购物网</b>
</div>
<div id="content">
<?php 
$shop_id = $_GET['id'];
switch ($shop_id) {
	case 'shop1':
		require("shop1.php");
		break;
	case 'shop2':
		require("shop2.php");
		break;
	default:
		require("shop1.php");
		break;
}
?>
</div>
<div id="footer">
	北京源智天下科技有限公司&nbsp;2012
</div>