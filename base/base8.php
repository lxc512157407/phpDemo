<?php
/**
 * PHP 字符串变量
 */
echo <<<'EOF'
1.字符串变量用于包含字符的值<br />
2.在创建字符串之后我们就可以对他进行操作了。<br />
3.给变量赋值时记得给文本加上单引号或双引号。<br />
4.常用的字符串操作的函数和运算符：<br />
EOF;
$txt = 'hello world';
echo $txt;

/**
 * php并值运算符 .
 */
echo 'PHP并值运算符(.)<br />';
$txt.=',我爱php';
echo '这是并值之后的$txt='.$txt.'<br />';

/**
 * php strlen()函数 返回字符串的长度。
 */
echo 'strlen 函数返回字符的长度<br />';
echo '字符串$txt的长度是'.strlen($txt).'<br />';

/**
 * php strpos() 函数 用于在字符串内查找一个字符或一段指定的文本。
 * 若果匹配则返回字符或文本在字符串的位置。未找到则返货FALSE 。
 */

echo 'hello在字符串'.$txt.'位置是：'.strpos($txt,'hello').'<br/>';
echo 'o在字符串'.$txt.'位置是：'.strpos($txt,'o',2).'从索引2开始<br />';
echo 'o在字符串'.$txt.'位置是：'.strpos($txt,'o',5).'从索引5开始<br />';

/**
 * @param int $age
 * @return int
 */
function test(int $age):int{
    echo '输入的年龄是:'.$age;
    return $age;
}
test(28);
