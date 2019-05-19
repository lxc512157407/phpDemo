<?php
echo '<h4>php数组</h4>';
echo <<<'EOF'
1.数组能够在当个变量中存储多个值<br />
2.php中创建数组：array()<br />
3.数组类型：<br />
数值数组--带有数字ID键的数组,a.自动分配键值，b.人工分配键值<br />
关联数组--带有指定键的数组，每个键关联一个值<br />
多维数组--包含一个或多个数组的数组<br />
EOF;
//$arr=['你好','李现成'];
$arr[]='你好';
$arr[]='李现成';
var_dump($arr);
$arr[]='杨萍';
var_dump($arr);
echo '<br />$arr的数组的长度是'.count($arr).'<br />';
echo '遍历数组$arr:';
for($x=0;$x<count($arr);$x++){
    echo'<p>'.$arr[$x].'</p>';
}

