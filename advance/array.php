<?php
/**
 * 一个数组中的值可以是另一个数组，另一个数组的值可以是一个数组。依照这种方式我们可以创建二维数组或者是三维数组
 */

/**
 * 多维数组
 */
$cars =array(array('Volvo',100,96),array('BMW',60,59),array('Toyota',110,100));
var_dump($cars);

$sites = array(
  'baidu'   =>array('百度','www.baidu.com'),
   'runoob' =>array('菜鸟教程','www.runoob.com'),
   'google' =>array('淘宝','www.taobao.com'),
);
print '<pre>';
print_r($sites);
print '</pre>';
