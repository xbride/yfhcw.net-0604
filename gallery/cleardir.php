  
 
<html>
<body>



<?php
	echo '<script>';
	echo 'if(true!=confirm("ȷ��Ҫ�������ͼƬ��")){';
	echo 'window.close();';
	echo '}';
	echo '</script>';
	
	include "f_copydir.php";
	include "f_delfiles.php";		
	copyDir("gallery-images", "gallery-images" . date('y-m-d-h-i-s',time()));
	deleteFile("gallery-images");		
	echo "��������ɡ�";
?>


</body>
</html>