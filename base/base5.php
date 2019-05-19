<?php
echo ' 数据类型: String(字符串)，Integer(整型)，Float(浮点型)，Boolean(布尔型)，Array(数组)，Object(对象)，NULL(空值)<br />';
echo '字符串：是一个字符序列<br />';
/**
 * 整数描述
 */
$x=5;
echo <<<EOF
整数：是一个没有小数的数字<br />
整数必须至少有一个数字（0-9）<br />
整数不能包含逗号和空格<br />
整数是没有小数的<br />
整数是可以是整数或负数或0<br />
整型可以用三种格式来制定：十进制，十六进制（前缀为0x）或八进制（前缀为0）<br />
php中可以使用var_dump()函数返回变量的数据类型和值<br />
EOF;
/**
 * Float 浮点数描述
 */

echo '浮点数是带小数部分的数字，或者是指数形式。<br />';

/**
 * Boolean 布尔型
 */

echo '布尔型可以是TRUE 或 FALSE。<br />';

/**
 *  Array 数组描述
 */

echo '数组可以在一个变量中存储多个值。<br />';

$cars = ['BWM', 'YAMAHA'];
var_dump($cars);

/**
 * Object 对象
 */

echo <<<EOF
1.对象数据类型可以用于存储数据 <br />
2.php 中对象必须声明<br />
3.首先必须声明使用class类对象。类是可以包含属性和方法的结构。<br />
EOF;

class Car{
    var $color;
    function __construct($color ='green')
    {
        $this->color = $color;
    }

    /**
     * @return string 返回车子的颜色
     */
    function what_color(){
        echo '返回车子的颜色是:'.$this->color;
       return $this->color;
    }
}

$car =new Car('red');
$car->what_color();

/**
 * NULL 空值
 */
echo <<<EOF
NULL值表示变量没有值。NULL是数据类型为NULL的值<br />
可以通过设置变量值为NULL来清空变量数据。<br />
EOF;

/**
 * 打印输出
 */
echo <<<EOF
1.echo 输出一个或多个值<br />
2.print 输出一个值速度比echo慢<br />
3.print_r 打印变量的易于理解的信息,如果给出的是 string、integer 或 float，将打印变量值本身。如果给出的是 array，将会按照一定格式显示键和元素。object 与数组类似。 。print_r（）会将数组的指针移到最后边使用reset()可让指针回到开始出<br />
4.var_dump 打印变量的类型和值。<br />
EOF;

