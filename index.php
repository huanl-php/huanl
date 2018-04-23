<?php
/**
 *
 *
 * @package {}
 */

require_once './vendor/autoload.php';

$Container = new \HuanL\Container\Container();

$Container->singleton(\HuanL\Request\Request::class);

$route = $Container->make(\HuanL\Routing\Routing::class);

$route->get('/user/{user}/{name?}$', function ($user,\HuanL\Request\Request $request) {
    echo "我是实例被用了\n我的参数:".$user."\n";
    echo "测试Req:".$request->home()."\n";
    return 'emm';
})->name('haha');

$req= $Container->make(\HuanL\Request\Request::class);

$Container->call(routeTestClass::class.'@method');
echo $req->path_info();
echo "\n";
echo $route->name('haha');
echo "\n";
//解析路由
$route->resolve();

class routeTestClass{
    public function method(\HuanL\Request\Request $request,$test=''){
        echo "emm\n".$request->path_info()."\nemmmm23\n";
    }
}
