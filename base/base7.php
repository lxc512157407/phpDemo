<?php
/**
 * php 常量
 * nowdoc 字符串
 */
echo <<<'EOF'
1.常量是一个简单的值标识符。该值在脚本中不能被改变。<br />
2.一个常量有英文字母、下划线和数字组成，但是数字不能作为首字母出现（常量名不需要加$修饰符）<br />
3.设置常量使用define()函数，语法如下：<br />
bool define (string $name, mixed $value [,bool $case_insensitive = false])<br />
该函数有三个参数:<br />
name:必选参数，常量名称，即标志符<br />
value:必选参数，常量的值。<br />
case_insensitive:可选参数，如果设置为true,则对大小写不敏感，默认是大小写敏感的。<br />
EOF;
define('GREET','hello world,这是php常量<br />');
echo(GREET);
function myTest(){
    echo GREET;
}
myTest();
