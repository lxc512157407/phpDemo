<?php
/**
 *命名空间可以解决一下两类问题：
 * 1.用户编写的代码与php内部的类、函数、常量或第三方类、函数常量之间的名字冲突
 * 2.为很长的表示符名称（通常是缓解第一类问题而定义的）创建一个别名（或简短）的名称，提高源代码的可读性。
 * 3.默认情况下，所有常量、类和函数名都放在全局空间下
 * 4.通过namespace 来声明，如果一个文件包含命名空间他必须在其他所有代码之前声明命名空间。
 */


/**
 * 在一个文件中使用多个命名空间的代码
 *
 */

namespace MyProject{
    function test(){
        echo '我的命名空间是'.__NAMESPACE__.'函数名是'.__FUNCTION__;
    }
}

namespace pp\MyProject1{
    function test(){
        echo '我的命名空间是'.__NAMESPACE__.'函数名是'.__FUNCTION__;
    }
    test();
    \MyProject\test();
}

namespace {
    function test(){
        echo '我的命名空间是'.__NAMESPACE__.'函数名是'.__FUNCTION__;
    }
    \MyProject\test();
    \pp\MyProject1\test();
    test();
}
