<?php
//����ɾ���ļ�����
function deleteFile($dirName) {
    // �ж��Ƿ�Ϊ��Ч���
    if ($handle = opendir( $dirName )) {
        // ѭ���򿪵ľ����Ŀ���򿪳ɹ����򷵻��ļ�������ʧ�ܣ��򷵻�false��
        while ( false !== ($item = readdir ($handle))) {
            if ($item != "." && $item != "..") {
                // �ж��Ƿ�ΪĿ¼
                if (is_dir($dirName . "/" . $item )) {
                    // �ݹ�ɾ��
                    deleteFile($dirName . "/" . $item);
                } else {
                    if (unlink($dirName . "/" . $item)) {
                        echo "�ɹ�ɾ��{$dirName}�ļ����µ�{$item}�ļ�<br/>";
                    }
                }
            }
        }
        // �رմ򿪵ľ��
        closedir( $handle );
    }
}

//���ԡ�testFileĿ¼����NewFile.html��
//deleteFile("gallery-images");
//�ɹ�ɾ��testFile�ļ����µ�NewFile.html�ļ�
?>