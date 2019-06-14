<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10
 * Time: 14:41
 */
class test
{
    public $str = 'hello world';
    public $arr = [1, 2, 3, 4, 5];
    private $name = 'james';
    public $res;

    public static function run()
    {
        $klass = get_called_class();
        return $klass;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __call($name, $arguments)
    {
        return self::Domain($name,$this->str);
    }

    private static function Domain($name,$str)
    {
        $klass = get_called_class();
        $domain = new $klass();
        $domain->res = call_user_func("$name",$str);
        return $domain;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "{$this->name}";
    }
}

$test = new test();
echo $test;