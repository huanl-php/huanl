<?php

require_once './../vendor/autoload.php';
$httpReq = new \HuanL\Extend\InsideHttpRequest('./../public/index.php');
$httpReq->get('/model', ['a' => 'v'])->data(['qq' => 'haha'])->header(['aaa-d'=>'ha'])->request();
print_r(headers_list());
//echo $httpReq->content();
//http_response_code()
print_r($_SERVER);
