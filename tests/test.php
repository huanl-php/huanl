<?php

require_once './../vendor/autoload.php';
$Container = new \HuanL\Container\Container();
$Container->singleton(\HuanL\Request\Request::class);
/** @var \HuanL\Routing\Routing $route */
$route = $Container->make(\HuanL\Routing\Routing::class);
$route->resolveControllerFile(
    realpath('./../app/controller')
);
$route->get('/user/{user}/{name?}$', function ($user, \HuanL\Request\Request $request) {
    echo "我是实例被用了\n我的参数:" . $user . "\n";
    echo "测试Req:" . $request->home() . "\n";
    return 'emm';
})->name('haha');
$req = $Container->make(\HuanL\Request\Request::class);
//echo $Container->call(\App\Controller\testController::class.'@asdqw');
//echo $req->path_info()."\n";
//print_r($route->exportRoute(false));
$route->group('test', function (\HuanL\Routing\Routing $group) {
    echo '群组测试';
    $group->get('/group', 'testController@asdqw');
}, ['namespace' => 'App\Controller']);
//解析路由
$route->get('/model',function(){
    $v=new \Tests\VerifyTestModel();
});
echo $route->resolve();

class routeTestClass {
    public function method(\HuanL\Request\Request $request, $test = '') {
        echo "emm\n" . $request->path_info() . "\nemmmm23\n";
    }
}
