<?php
//for ($i=0;$i<300000;$i++){
//    $arr[$i] = rand(1,10000);
//}
//$begin = time();
//function quick_sort($arr) {
//    //先判断是否需要继续进行
//    $length = count($arr);
//    if($length <= 1) {
//        return $arr;
//    }
//    //选择第一个元素作为基准
//    $base_num = $arr[0];
//    //遍历除了标尺外的所有元素，按照大小关系放入两个数组内
//    //初始化两个数组
//    $left_array = array();  //小于基准的
//    $right_array = array();  //大于基准的
//    for($i=1; $i<$length; $i++) {
//        if($base_num > $arr[$i]) {
//            //放入左边数组
//            $left_array[] = $arr[$i];
//        } else {
//            //放入右边
//            $right_array[] = $arr[$i];
//        }
//    }
//    //再分别对左边和右边的数组进行相同的排序处理方式递归调用这个函数
//    $left_array = quick_sort($left_array);
//    $right_array = quick_sort($right_array);
//    //合并
//    return array_merge($left_array, array($base_num), $right_array);
//}
//$res = quick_sort($arr);
//$end = time();

// region 反射API
//class Person{
//    public $name;
//    public $gender;
//
//    public function Info()
//    {
//        echo $this->name.' age:'.$this->age.' height:'.$this->height;
//    }
//
//    public function __set($name,$value)
//    {
//        $this->$name = $value;
//    }
//
//    public function __get($name)
//    {
//        return $this->$name;
//    }
//}
//$student = new Person();
//$student->name = 'james';
//$student->gender = 'male';
//$student->age = 18;
//$student->height = 170;
//
//$reflect = new ReflectionObject($student);
//$props = $reflect->getProperties();
//foreach ($props as $prop){
//    print_r($prop);
//}
//echo "<br/>";
//$method = $reflect->getMethods();
//foreach ($method as $m){
//    print_r($m);
//}
// endregion 反射API

// region 闭包函数
//function CountNumber($num){
//    return function ($const) use ($num){
//        return $const+$num;
//    };
//}
//
//$func = CountNumber(5);
//echo $func(10);
// endregion 闭包函数

// region 闭包函数--bindTo()
class App
{
    protected $routes = array();
    protected $responseStatus = '200ok';
    public $responseContentType = 'text/html';
    protected $responseBody = 'hello world';

    public function addRoute($routePath, $routeCallback)
    {
        $this->routes[$routePath] = $routeCallback->bindTo($this, __CLASS__);
    }

    public function dispatch($currentPath)
    {
        foreach ($this->routes as $routePath => $callback) {
            if ($routePath === $currentPath) {
                $callback();
            }
        }

        header('HTTP/1.1 ' . $this->responseStatus);
        header('Content-type: ' . $this->responseContentType);
        header('Content-length: ' . $this->responseContentType);
        echo $this->responseBody;
    }
}

$app = new App();
$app->addRoute('/users/josh', function () {
    $this->responseContentType = 'application/json;charset=utf8';
    $this->responseBody = '{"name":"josh"}';
});
$app->dispatch('/users/josh');
// endregion 闭包函数--bindTo()