<?php
function copyDir($dirSrc,$dirTo)
{
    if(is_file($dirTo))
    {
        echo 'Ŀ�겻��Ŀ¼���ܴ�����';
        return;
    }
    if(!file_exists($dirTo))
    {
        mkdir($dirTo);
    }
    $dir_handle = @opendir($dirSrc);
    if($dir_handle)
    {
        while($filename = readdir($dir_handle))
        {
            if($filename!="." && $filename!="..")
            {
                $subSrcFile = $dirSrc . "\\".$filename;
                 $subToFile = $dirTo . "\\".$filename;
                 
                 if(is_dir($subSrcFile))
                 {
                     copyDir($subSrcFile, $subToFile);
                 }
                 if(is_file($subSrcFile))
                 {
                      copy($subSrcFile, $subToFile);
                 }
            }
        }
        closedir($dir_handle);
    }
}

?>