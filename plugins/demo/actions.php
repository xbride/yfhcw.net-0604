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
class DEMO_actions
{
  //���������Ĳ�����pluginManager������
  function __construct(&$pluginManager)
  {
    //ע��������
    //��һ�������ǹ��ӵ�����
    //�ڶ���������pluginManager������
    //�������ǲ����ִ�еķ���
    $pluginManager->register('demo', $this, 'say_hello');
  }
  
  function say_hello()
  {
    echo 'Hello World';
  }
}

?>