<?php

use HuanL\Core\Facade\Route;

Route::get('/', function () {
    return 'Hello,World!';
});

Route::get('/view', function () {
    $view = new \HuanL\Viewdeal\View(app('path') . '/app/view/test.html', new viewController());
    $v1 = '123';
    $view->bindValue('v1', $v1);
    return $view->execute();
});

class  viewController {
    public $test = ['ma' => 123];
    public $ha = 'qwe';
    public function shuchu(){
        return '测试啦';
    }
}