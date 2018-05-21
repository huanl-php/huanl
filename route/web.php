<?php

use HuanL\Core\Facade\Route;
use HuanL\Core\Facade\Db;

Route::get('/', function () {
    return 'Hello,World!';
});

Route::get('/view', function () {
    $view = new \HuanL\Viewdeal\View(app('path') . '/app/view/test.html', new viewController());
    $v1 = '123';
    $view->bindValue('v1', $v1);
    return $view->execute();
});

Route::get('/req', function () {
    return new \HuanL\Request\Response('233');
});

Route::get('/dbzj', function () {
    $db = Db::table('book')->where('bid', '<>', 0);
    $result = $db->order(['bid', 'uid' => 'asc'])->field(['a.username' => 'x', 'a.sex', 'bid'])
        ->join([':users' => ['a', 'a.uid=book_uid']])->group('book_title')->select();
    while ($result->read()) {
        echo $result[0] . '-' . $result[2];
    }
//    print_r($db->find());
    echo "\n";
//    echo $db->table(':token')->where('value',1)->delete();
//    $db->table(':token')
//        ->insert(['token' => '213' . rand(1000, 10000), 'value' => rand(10, 1000), 'time' => time()]);
//    $db->again(['token' => '10101011' . rand(10000, 100000)]);
//    $db->table(':token')->where('value',1)->limit(1)->update(['time'=>233]);
});

Route::get('/db', function () {
    $connect = new \HuanL\Db\Driver\MySQL\MySQLDBConnect('root', '',
        'tmp', 'cb_',
        'localhost', 3306, ['charset' => 'utf8']
    );
    $db = new \HuanL\Db\SQLDb($connect);
    $db->table(['book'])->where('bid', '<>', 0);
    $result = $db->order(['bid', 'uid' => 'asc'])->field(['a.username' => 'x', 'a.sex', 'bid'])
        ->join([':users' => ['a', 'a.uid=book_uid']])->group('book_title')->select();
    while ($result->read()) {
        echo $result[0] . '-' . $result[2];
    }
//    print_r($db->find());
    echo "\n";
//    echo $db->table(':token')->where('value',1)->delete();
    $db->table(':token')
        ->insert(['token' => '213' . rand(1000, 10000), 'value' => rand(10, 1000), 'time' => time()]);
//    $db->again(['token' => '10101011' . rand(10000, 100000)]);
//    $db->table(':token')->where('value',1)->limit(1)->update(['time'=>233]);
});

class  viewController {
    public $test = ['ma' => 123];
    public $ha = 'qwe';
    private $aa = '123';

    public function shuchu() {
        return '测试啦';
    }
}