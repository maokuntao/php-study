<?php
/**
 * 起始和结束标记，也就是 <?php 和 ?>，这告诉 PHP 开始和停止解析二者之间的代码。
 *
 * PHP 也允许使用短标记 <? 和 ?>，但不鼓励使用。
 * 只有通过激活 php.ini 中的 short_open_tag 配置指令
 * 或者在编译 PHP 时使用了配置选项 --enable-short-tags 时才能使用短标记。
 *
 *
 * 如果文件内容是纯 PHP 代码，最好在文件末尾删除 PHP 结束标记。
 *
 * Created by PhpStorm.
 * User: taomaokun
 * Date: 2017/12/1
 * Time: 下午2:58
 */
echo "Hello world";