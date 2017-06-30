  
 
<html>
<body>



<?php
	echo '<script>';
	echo 'if(true!=confirm("确定要清空所有图片吗？")){';
	echo 'window.close();';
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