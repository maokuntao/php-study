<?php
/**
 * Created by PhpStorm.
 * User: taomaokun
 * Date: 2017/12/6
 * Time: 下午9:12
 */
$a_BOOL = true;
$a_bool = true;
$a_str = "foo";
$a_str2 = 'foo';
$an_int = 233;

//gettype() 返回变量的类型
echo gettype($a_BOOL) . "\t";
echo gettype($a_bool) . "\t";
echo gettype($a_str) . "\t";
echo gettype($a_str2) . "\t";
echo gettype($an_int) . "\n";

//
echo var_dump($a_BOOL) . "\n";

// 如果是整型，就加上 4
if (is_int($an_int)) {
    $an_int += 4;
    echo '$an_int\'s type is int, its value is ' . $an_int;
}