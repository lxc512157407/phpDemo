<?php
/**
 * php超级全局变量
 * php超级全局变量列表：
 *              $GLOBALS
 *              $_SERVER
 *              $_REQUEST
 *              $_POST
 *              $_GET
 *              $_FILES
 *              $_ENV
 *              $_COOKIE
 *              $_SESSION
 *
 */

echo <<<'EOT'
$GLOBALS 是php的一个超级全局变量组，在一个php脚本的全部作用域中都可以访问<br />
$GLOBALS 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键。<br />
EOT;

$x = 75;
$y = 25;

/**
 * @return int
 */
function addition():int {
    return $GLOBALS['z']=$GLOBALS['y']+$GLOBALS['x'];
}
addition();
echo 'addition计算的结果是'.$z;

/**
 * $_SERVER 是一个包含了诸如头信息（header）、路径（path）、以及脚本位置（script locations）等等信息的数组
 *
 */
echo '<h4>$_SERVER相关信息打印如下：</h4>';
foreach ($_SERVER as $name=>$value){
    echo '<p>'.$name.' : '.$value.'</p>';
}
echo '<h4>$_ENV相关信息打印如下：</h4>';
foreach ($_ENV as $name=>$value){
    echo '<p>'.$name.' : '.$value.'</p>';
}
