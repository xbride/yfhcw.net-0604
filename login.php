<?php 
//作者:www.tongqiong.com
$password = "12345"; // 这里是密码 
$p = ""; 
if(isset($_COOKIE["isview"]) and $_COOKIE["isview"] == $password){ 
	$isview = true; 
}else{ 
	if(isset($_POST["pwd"])){ 
		if($_POST["pwd"] == $password){ 
			setcookie("isview",$_POST["pwd"],time()+3600*3); 
			$isview = true; 
		}else{ 
			$p = (empty($_POST["pwd"])) ? "需要密码才能查看，请输入密码。" : "密码不正确，请重新输入。"; 
		} 
	}else{ 
		$isview = false; 
		$p = "请输入密码查看，获取密码可联系我。"; 
	} 
} 
 
if($isview){ ?> 
 
<h3>网站管理<h3>
<ul>
  <li>文本编辑</li>
  <li>图库管理</li>
  <ul>
  	<li><a href="#browse">1. 打开产品图库<a></li>
  	<li><a href="#clear">2. 清空图库内容<a></li>
  	<li><a href="#addimg">3. 添加产品图片<a></li>
  	<li><a href="#review">4. 查看效果<a></li>
  </ul>
</ul> 

<hr/>

<a name="browse"><br><pre>
1. 打开产品图库
	点击链接<a href="/gallery/index.php">/gallery/index.php<a>查看产品图库。
	
	
	
	
	
</pre>
<a name="clear"><br><pre>
2. 清空图库内容
	点击链接<a href="/gallery/cleardir.php">/gallery/cleardir.php<a>清空图库内容图片。 

	
	
	
	
</pre>
<a name="addimg"><br><pre>
3. 添加产品图片
	点击链接<a href="/gallery/index.php">/gallery/index.php<a>查看产品图库，滚动到下方拖动要添加的图片到方框内。
	
	
	
	
	
</pre>
<a name="review"><br><pre>
4. 查看效果
	点击首页链接<a href="http://yfhcw.net/home">http://yfhcw.net<a>查看效果。
	
	
	
	
	
</pre>





<pre><!-- 填补页末空白 -->



























</pre>


 
 
<?php }else{ ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=" http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta http-equiv="pragma" content="no-cache" /> 
<meta http-equiv="cache-control" content="no-cache" /> 
<meta http-equiv="expires" content="0" /> 
<title>后台登陆</title> 
<!--[if lt IE 6]> 
<style type="text/css"> 
	.z3_ie_fix{ 
	float:left; 
	} 
</style> 
<![endif]--> 
<style type="text/css"> 
<!-- 
body{ 
background:none; 
} 
.passport{ 
	border:1px solid red; 
	background-color:#FFFFCC; 
	width:400px; 
	height:100px; 
	position:absolute; 
	left:49.9%; 
	top:49.9%; 
	margin-left:-200px; 
	margin-top:-55px; 
	font-size:14px; 
	text-align:center; 
	line-height:30px; 
	color:#746A6A; 
} 
--> 
</style> 
</head>
<body>
<div class="passport"> 
<div style="padding-top:20px;"> 
<form action="?yes" method="post" style="margin:0px;">输入查看密码 
<input type="password" name="pwd" /> <input type="submit" value="查看" /> 
</form> 
<?php echo $p; ?> 
</div> 
</div> 
<?php 
//作者:www.tongqiong.com    
} ?> 
</body> 
</html>