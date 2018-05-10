<?php

use HuanL\Core\Facade\Route;

Route::get('/', function () {
    return 'Hello,World!';
});

Route::get('/view', function () {
    $view = new \HuanL\Viewdeal\View(app('path') . '/app/view/test.html',new viewController());
    $view->compiled();
    return "hha";
});

class  viewController {
    public $test = 1;
}