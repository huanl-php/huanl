<?php
/**
 * 引入composer的自动加载文件
 */
require './../vendor/autoload.php';

/**
 * 加载框架核心内容
 * 进入框架入口,启动框架
 */
$app = new HuanL\Core\Application(
    realpath(__DIR__ . '/../')
);

/**
 * 发送请求
 */

