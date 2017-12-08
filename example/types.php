<?php
/**
 * Created by PhpStorm.
 * User: taomaokun
 * Date: 2017/12/6
 * Time: 下午9:12
 */

// Boolean 类型
echo "_______________Boolean_______________\n";
$a_BOOL = true;
$a_bool = false;
echo gettype($a_BOOL) . "\n";//gettype() 返回变量的类型
echo gettype($a_bool) . "\n";
echo var_dump($a_BOOL);
echo var_dump((bool)"false");   // trick
echo "_____________________________________\n";

// Integer 类型
echo "_______________Integer_______________\n";
$an_int = 233; //十进制
$an_int_2 = -233;//负数
$an_int_3 = 0123;//八进制
$an_int_4 = 0xA1;//十六进制

echo gettype($a_str) . "\t";
echo gettype($a_str2) . "\t";
echo gettype($an_int) . "\n";

$a_str = "foo";
$a_str2 = 'foo';
//is_int()判断变量是否是int类型
// 如果是整型，就加上 4
if (is_int($an_int)) {
    $an_int += 4;
    echo '$an_int\'s type is int, its value is ' . $an_int . "\n";
}

// settype() 可以对类型进行强制转换
settype($an_int, "string");
echo var_dump($an_int);