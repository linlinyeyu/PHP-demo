<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>简单图片轮播</title>
<style>
p.now{ display:block; border:1px solid #ccc}
li.now{ color:#ccc}
li{ list-style:none;float:left; padding:0 10px; border:1px solid #ccc;background:#eee;}
#fd{position:absolute; left:450px; top:100px;height:20px; width:401px; background:#ccc}
img{width:400px;height:200px;padding-top:18px;}
</style>
</head>

<body>
<div id="fd">
<p class="now"><img src="./images/pic1.jpg"></p>
<p style="display:none"><img src="./images/pic2.jpg"></p>
<p style="display:none"><img src="./images/pic3.jpg"></p>
<p style="display:none"><img src="./images/pic4.jpg"></p>
<ul>
<li class="now">1</li>
<li>2</li>
<li>3</li>
<li>4</li>
</ul>
</div>
<script>
var tags=$("fd").getElementsByTagName("li");//获取切换按钮节点
var cats=$("fd").getElementsByTagName("p");//获取切换内容节点
var current;//设置当前帧的变量容器
var timer=2000;//设置两秒循环一次	 
function disAll(){//初始所有标签样式
 for(var i=0; i<tags.length; i++){
       tags[i].className="";
       cats[i].className="";
	   cats[i].style.display="none";
     }
  }
function setNow(){//获取当前帧的索引值
  for(var i=0; i<tags.length; i++){
    if(tags[i].className=="now"){
          current=i;		  
         }
	  } 
}
for(var j=0; j<tags.length; j++){//设置手动切换
tags[j].onmouseover=function(){
clearInterval(h);	 
disAll();	  
this.className="now";
setNow();
cats[current].style.display="block";
cats[current].className="now";	  
}
tags[j].onmouseout=function(){
setNow();	   
h=setInterval("goNext()",3000);
}
}
function goNext(){//自动切换
setNow();//获取当前帧索引
current+=1;//帧自增1
if(current>=parseInt(tags.length)){//判断：如果当前帧索引值是否大于切换按钮总数，如果大于按钮总数则回到初始状态
current=0;
disAll();
cats[0].style.display="block";
tags[0].className="now";
cats[0].className="now";
}
else{
disAll();
cats[current].style.display="block";
cats[current].className="now";
tags[current].className="now";
}
}
var h=setInterval("goNext()",timer)//开始自动切换
function $(obj){//获取ID节点的简介方法
	return document.getElementById(obj)
}
</script>
</body>
</html>