<?php
	function txtout_pre($fname) {
		$content = file_get_contents($fname); 
		$array = explode("\r\n", $content);

		echo "<pre>";
		for($i=0; $i<count($array); $i++)
			echo $array[$i]."\r\n";
		echo "</pre>";
	}
?>
