<?php
/**
 * Created by PhpStorm.
 * User: taomaokun
 * Date: 2017/12/7
 * Time: 上午11:34
 */

$url = "https://www.baidu.com/search/query?q=%E4%BB%BB&type=corpuser&pageSize=20";
$total_time = 123456;
echo sprintf("[%s,%s] url=%s usetime=%s", __FILE__, __LINE__, $url, $total_time);