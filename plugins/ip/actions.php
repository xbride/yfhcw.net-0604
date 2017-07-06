<?php
/**
 * ����һ��Hello World�򵥲����ʵ��
 *
 * @link    http://www.jb51.net/
 */
/**
 *��Ҫע��ļ���Ĭ�Ϲ���
 *  1. ���������ļ���������action
 *  2. ���������Ʊ�����{�����_actions}
 */
class IP_actions
{
  //���������Ĳ�����pluginManager������
  function __construct(&$pluginManager)
  {
    //ע��������
    //��һ�������ǹ��ӵ�����
    //�ڶ���������pluginManager������
    //�������ǲ����ִ�еķ���
    $pluginManager->register('ip', $this, 'getip');
  }
  
  function getip()
  {
     static $realip;
		if (isset($_SERVER)){
			if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
				$realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
			} else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
				$realip = $_SERVER["HTTP_CLIENT_IP"];
			} else {
				$realip = $_SERVER["REMOTE_ADDR"];
			}
		} else {
			if (getenv("HTTP_X_FORWARDED_FOR")){
				$realip = getenv("HTTP_X_FORWARDED_FOR");
			} else if (getenv("HTTP_CLIENT_IP")) {
				$realip = getenv("HTTP_CLIENT_IP");
			} else {
				$realip = getenv("REMOTE_ADDR");
			}
		}
		
		echo $realip;
  }
}

?>