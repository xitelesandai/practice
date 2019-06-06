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
//class App
//{
//    protected $routes = array();
//    protected $responseStatus = '200ok';
//    public $responseContentType = 'text/html';
//    protected $responseBody = 'hello world';
//
//    public function addRoute($routePath, $routeCallback)
//    {
//        $this->routes[$routePath] = $routeCallback->bindTo($this, __CLASS__);
//    }
//
//    public function dispatch($currentPath)
//    {
//        foreach ($this->routes as $routePath => $callback) {
//            if ($routePath === $currentPath) {
//                $callback();
//            }
//        }
//
//        header('HTTP/1.1 ' . $this->responseStatus);
//        header('Content-type: ' . $this->responseContentType);
//        header('Content-length: ' . $this->responseContentType);
//        echo $this->responseBody;
//    }
//}
//
//$app = new App();
//$app->addRoute('/users/josh', function () {
//    $this->responseContentType = 'application/json;charset=utf8';
//    $this->responseBody = '{"name":"josh"}';
//});
//$app->dispatch('/users/josh');
// endregion 闭包函数--bindTo()

//region IteratorAggregate类
//class myIterator implements IteratorAggregate
//{
//    public $file_path = 'C:\Users\Administrator\Desktop\sql.txt';
//    public $fp = array();
//
//    public function __construct()
//    {
//        $fp = fopen($this->file_path,'r');
//        while (!feof($fp)){
//            array_push($this->fp,fgets($fp));
//        }
//    }
//
//    public function getIterator()
//    {
//        return new ArrayIterator($this->fp);
//    }
//}
//
//$obj = new myIterator();
//foreach ($obj as $key=>$value) {
//    if (strpos($value,'1990-01-01')){
//        echo $key.PHP_EOL;
//    }
//}
//endregion IteratorAggregate类


// region 分表
//for ($i = 0; $i < 100; $i++) {
////echo "CREATE TABLE db2.members{$i} LIKE db1.members<br>";
//    echo "INSERT INTO members{$i} SELECT * FROM members WHERE mid%100={$i}".PHP_EOL;
//}
// endregion 分表


// region 防sql注入方法
//echo strip_tags("Hello <b>world!</b>");
///**
// * 函数名称：post_check()
// * 函数作用：对提交的编辑内容进行处理
// * 参　　数：$post: 要提交的内容
// * 返 回 值：$post: 返回过滤后的内容
// */
//function post_check($post){
//    if(!get_magic_quotes_gpc()){// 判断magic_quotes_gpc是否为打开
//        $post = addslashes($post);// 进行magic_quotes_gpc没有打开的情况对提交数据的过滤
//    }
//    $post = str_replace("_","\_",$post);// 把 '_'过滤掉
//    $post = str_replace("%","\%",$post);// 把 '%'过滤掉
//    $post = nl2br($post);// 回车转换
//    $post =htmlspecialchars($post);// html标记转换
//
//    return $post;
//}
//
//echo post_check('select * from t_order');
// endregion 防sql注入方法

//region 时间类
//$datetime = new  DateTime();
//$date_interval = DateInterval::createFromDateString('-1 Month');
//$date_period = new DatePeriod($datetime, $date_interval, 3);
//foreach ($date_period as $date){
//    echo $date->format('Y-m-d'),PHP_EOL;
//}
//endregion 时间类

//region 01背包
//// f[i,j] = Max{ f[i-1,j-Wi]+Pi( j >= Wi ),  f[i-1,j] }
////背包可以装最大的重量
//$w = 10;
////这里有四件物品,每件物品的重量
//$dx = array(2, 2, 6, 5, 4);
////每件物品的价值
//$val = array(6, 3, 5, 4, 6);
////定义一个数组
//$maxValue = array();
////初始化
//for ($i = 0; $i <= 10; $i++) {
//    $maxValue[0][$i] = 0;
//}
//for ($j = 0; $j <= 5; $j++) {
//    $maxValue[$j][0] = 0;
//}
////Max{ f[i-1,j-Wi]+Pi( j >= Wi ),  f[i-1,j] }
//for ($j = 1; $j <= 5; $j++) {
//    for ($i = 1; $i <= 10; $i++) {
//        $maxValue[$j][$i] = $maxValue[$j - 1][$i];
//        //不大于最大的w=10
//        if ($dx[$j - 1] <= $w) {
//            //这种情况是防止减去自身的重量后，成了负数
//            if (!isset($maxValue[$j - 1][$i - $dx[$j - 1]])) continue;
//            //f[i-1,j-Wi]+Pi( j >= Wi )
//            $tmp = $maxValue[$j - 1][$i - $dx[$j - 1]] + $val[$j - 1];
//            //Max{ f[i-1,j-Wi]+Pi( j >= Wi ),  f[i-1,j] } => 进行比较
//            if ($tmp > $maxValue[$j][$i]) {
//                $maxValue[$j][$i] = $tmp;
//            }
//        }
//    }
//}
////打印这个数组,输出最右角的值是可以最大价值的
//for ($j = 1; $j <= 5; $j++) {
//    for ($i = 1; $i <= 10; $i++) {
//        if ($maxValue[$j][$i] < 10)
//            echo " " . $maxValue[$j][$i] . " ";
//        else echo $maxValue[$j][$i] . " ";
//    }
//    echo "<br>";
//}
//endregion 01背包

//region 时间类
//$start_time = new DateTime();
//$interval = new DateInterval('P1W');
//$period = new DatePeriod($start_time, $interval, 3, DatePeriod::EXCLUDE_START_DATE);
//foreach ($period as $nextDateTime) {
//    echo $nextDateTime->format('Y-m-d H:i:s'), PHP_EOL;
//}
//}
//endregion 时间类

//region折半查找
//$target = 5;
//$data = [1, 3, 5, 6, 9, 10, 11, 13];
//function halfSearch($target, $data)
//{
//    $length = count($data);
//    if ($target == $data[intval($length / 2)]) {
//        return intval($length / 2);
//    } else {
//        if ($target > $data[intval($length / 2)]) {
//            $tmp_data = array_slice($data, intval($length / 2) + 1);
//        }
//        if ($target < $data[intval($length / 2)]) {
//            $tmp_data = array_slice($data, 0, intval($length / 2));
//        }
//        return halfSearch($target, $tmp_data);
//    }
//}
//
//$res = halfSearch($target, $data);
//echo  $res;
//endregion折半查找

$arr = ['james','curry'];
$main_str="";
foreach ($arr as $str){
    $main_str .= "'".$str."',";
}
//$str = substr($main_str,0,strlen($main_str)-1);
$str = 'xiongjianhan';
var_dump(21-6*pow(26,0.3)+2.6);