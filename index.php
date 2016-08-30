<?php
/**
 * Created by PhpStorm.
 * User: zhouweiyong
 * Date: 16/8/24
 * Time: 下午9:05
 */
//设置应用目录位置
define('APP_PATH', './Application/');
//设置ThinkPHP框架位置
define("THINK_PATH", "./ThinkPHP/");
//是否开启调试模式
define("APP_DEBUG", true);
require THINK_PATH . 'ThinkPHP.php';