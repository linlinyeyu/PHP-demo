<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台管理折叠导航菜单</title>
<meta http-equiv="Content-type" content="text/html;charset=utf8">

<style>
body {margin:0;padding:0px;text-align:center;font:normal 12px Arial,Verdana,Tahoma;text-align:center;line-height:150%;}
a:link,a:visited {color:#385065;text-decoration:none}
a:hover {text-decoration:underline}
#menu {width:150px;margin:0px 15px;padding:0px;text-align:left;list-style:none;}
#menu .item {background:#ccaaee;padding:0px;list-style:none;border:1px solid #eee;}
a.title:link, a.title:visited, a.title:hover {display:block;color:#385065;font-weight:bold;padding:2px 0 0 22px;width:128px;line-height:23px;cursor:pointer;text-decoration:none}
#menu .item ul {border:1px solid #9FACB7;margin:0;width:116px;padding:3px 0px 3px 30px;background:#fff;list-style:none;display:none}
#menu .item ul li {display:block;}
</style>
<script type="text/javascript">

function hideAllObj() {
var items = document.getElementsByClassName("optiton");
for (var j=0; j<items.length; j++){
items[j].style.display = "none";
	}
}
function check(){
document.getElementById("opt_1").style.display = "block";
var items = document.getElementsByClassName("title");
for (var j=0; j<items.length; j++) {
items[j].onclick = function() {
var obj = document.getElementById("opt_" + this.name);
if (obj.style.display != "block") {
hideAllObj();
obj.style.display = "block";
}
else {
obj.style.display = "none";
}
}
}

}
 /*自定义方法获取带有class属性值的标签对象*/
document.getElementsByClassName=function(classname){
var retnode = [];
var myclass = new RegExp('\\b'+classname+'\\b');
var elem = this.getElementsByTagName('*');
for (var j = 0; j < elem.length; j++) {
var classes = elem[j].className;
if (myclass.test(classes)){
retnode.push(elem[j]);
}
}
return retnode;
}
 </script>
</head>
<body onload="check()">
<ul id="menu">
<li class="item"><a href="javascript:void(0)"  class="title" name="1">用户管理</a>
<ul id="opt_1" class="optiton">
<li><a href="#">添加用户</a></li>
<li><a href="#">管理用户</a></li>
</ul>
</li>
<li class="item"><a href="javascript:void(0)"  class="title" name="2">新闻管理</a>
<ul id="opt_2" class="optiton">
<li><a href="#">新闻添加</a></li>
<li><a href="#">新闻管理</a></li>
</ul>
</li>
<li class="item"><a href="javascript:void(0)"  class="title" name="3">广告管理</a>
<ul id="opt_3" class="optiton">
<li><a href="#">广告添加</a></li>
<li><a href="#">广告管理</a></li>
</ul>
</li>
<li class="item"><a href="javascript:void(0)"  class="title" name="4">友情链接</a>
<ul id="opt_4" class="optiton">
<li><a href="#">添加链接</a></li>
<li><a href="#">连接管理</a></li>
<li><a href="#">退出系统</a></li>
</ul>
</li>
</ul>
</body>
</html>