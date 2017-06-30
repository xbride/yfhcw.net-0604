<?php
//定义删除文件函数
function deleteFile($dirName) {
    // 判断是否为有效句柄
    if ($handle = opendir( $dirName )) {
        // 循环打开的句柄条目（打开成功，则返回文件名；打开失败，则返回false）
        while ( false !== ($item = readdir ($handle))) {
            if ($item != "." && $item != "..") {
                // 判断是否为目录
                if (is_dir($dirName . "/" . $item )) {
                    // 递归删除
                    deleteFile($dirName . "/" . $item);
                } else {
                    if (unlink($dirName . "/" . $item)) {
                        echo "成功删除{$dirName}文件夹下的{$item}文件<br/>";
                    }
                }
            }
        }
        // 关闭打开的句柄
        closedir( $handle );
    }
}

//测试【testFile目录下有NewFile.html】
//deleteFile("gallery-images");
//成功删除testFile文件夹下的NewFile.html文件
?>