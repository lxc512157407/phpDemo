<?php
echo 'php 变量:<br/>';
print('变量以\$符号开始,后跟着变量的名称<br />');
print('变量名必须以字母或着下划线字符开始<br />');
print('变量名只能包含字母、数字、字符以及下划线（A-z、0-9 和  _）<br />');
print('变量名不能包含空格<br />');
print('变量名是区分大小写的<br />');
$x = 5;
$y = 6;
$z = $x + $y;
echo '$x = 5<br />';
echo '$y =6<br />';
echo '$z = \$x + \$y<br />';
echo '$z = '.($x + $y).'<br />';

echo 'php是一门弱类型语言，不必向php声明该变量的数据类型，php会根据变量的值自动把变量转换为正确的数据类型<br />';
echo 'php变量作用域是脚本变量可被引用/使用的部分:local global static parameter(参数类型)<br />';
echo '定义在函数外部的就是全局变量，他的作用域从定义处一直到文件结尾<br />';
echo '函数内定义的变量就是局部变量，它的作用域为函数定义范围内<br />';
echo '函数之间存在作用域互不影响<br />';
echo "函数内访问全局变量需要global 关键字或者使用\$GLOBALS[index]数组<br />";
/**
 * @param $name string;
 */
function test($name){
    static $times=0;
    $times++;
    echo 'test函数第${times}次调用<br />';
    echo "输入的姓名是：${name}<br />全局变量\$x=${GLOBALS['x']}<br />";
}
test('李现成');
test('杨萍');
test('呼啦啦啦');
