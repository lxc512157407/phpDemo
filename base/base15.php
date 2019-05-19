<?php
//namespace base;
/**
 * php 魔术常量
 * __LINE__ 文件中的当前行
 * __FILE__ 文件中的文件名
 * __DIR__  文件中的目录
 * __FUNCTION__ 返回该函数的函数名
 * __CLASS__ 返回类的名称
 * __TRAIT__ 返回Trait的名字,实现代码复用的一个方法。
 * __METHOD__返回方法的名字
 * __NAMESPACE__ 当前命名空间的名称（区分大小写）
 */
echo '文件中的当前行'.__LINE__.'<br />';
echo '当前文件的名字'.__FILE__.'<br />';
echo '当前文件中的目录'.__DIR__.'<br />';

/**
 *
 */
function myFuction():void {
    echo '当前函数的名字：'.__FUNCTION__.'<br />';
    echo '当前命名空间的名称：'.__NAMESPACE__.'<br />';
    echo '当前方法的名称：'.__METHOD__.'<br />';
}
myFuction();

/**
 * Class Person
 */
class Person{
    private $name,$age,$sex;
    public function __construct(string $name,int $age,int $sex)
    {
        $this->name=$name;
        $this->age =$age;
        $this->sex =$sex;
        echo '当前类的名称'.__CLASS__.'<br />';
        echo '当前方法的名称'.__METHOD__.'<br />';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
        echo '当前方法的名称'.__METHOD__.'<br />';
    }
    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getSex(): int
    {
        return $this->sex;
    }

    /**
     * @param int $sex
     */
    public function setSex(int $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}
$lxc =new Person('李现成',18,1);
var_dump($lxc);
echo '<p>我的姓名是：'.$lxc->getname().'</p>';
echo '<p>我的年龄是：'.$lxc->getAge().'</p>';
echo '<p>我的性别是：'.$lxc->getSex().'</p>';
