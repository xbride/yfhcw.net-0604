<?php

include "f_copydir.php";
include "f_delfiles.php";

copyDir("gallery-images", "gallery-images" . date('y-m-d-h-i-s',time()));
deleteFile("gallery-images");

echo "操作已完成。";

?>