  
 
<html>
<body>

<script>
function closeWebPage(){  
 if (navigator.userAgent.indexOf("MSIE") > 0) {//close IE  
  if (navigator.userAgent.indexOf("MSIE 6.0") > 0) {  
   window.opener = null;  
   window.close();  
  } else {  
   window.open('', '_top');  
   window.top.close();  
  }  
 }  
 else if (navigator.userAgent.indexOf("Firefox") > 0) {//close firefox  
  window.location.href = 'about:blank ';  
 } else {//close chrome;It is effective when it is only one.  
  window.opener = null;  
  window.open('', '_self');  
  window.close();  
 }  
}
</script>


<?php
	echo '<script>';
	echo 'if(confirm("确定要清空所有图片吗？")!=true){';
	echo 'closeWebPage();';
	echo '}';
	echo '</script>';
	
	include "f_copydir.php";
	include "f_delfiles.php";		
	copyDir("gallery-images", "gallery-images" . date('y-m-d-h-i-s',time()));
	deleteFile("gallery-images");		
	echo "操作已完成。";
?>


</body>
</html>