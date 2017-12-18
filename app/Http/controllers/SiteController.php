<?php
namespace app\Http\controllers;

use core\lib\Controller;
use core\wison;
use app\models\User;
class SiteController extends Controller
{
    public function test()
    {
        // $user = new User();
        // $user->name = 'jun1';
        // $user->age = 30;
        // $result = $user->insert();

        $user = User::findOne(['id' => 1]);
        // $user->name = 'test';
        // $result = $user->update();
        // $result = $user->delete();
        // var_dump($result);die;
        // $user = User::findAll();
        // $user = User::deleteAll(['name' => 'jun1']);
        // // $user = User::updateAll(['age' => 21], ['age' => 20]);
        $data = [
            'first' => 'awesome-php-zh_CN',
            'second' => 'simple-framework',
            'user' => $user
        ];
        echo '<pre>';
        var_dump($_GET);
        var_dump(Request('get.'));
        echo $this->toJson($data);
    }

    public function zz()
    {
        echo '<pre>';
        var_dump($_GET);
    }

    public function view()
    {
       $cache = wison::createObject('cache');
       $cache->set('111', '2222');
       $result = $cache->get('111');
       // $cache->flush();
       var_dump($result);
       $this->render('site/view', ['body' => 'Test body information', 'users' => [1, 2]]);
    }

    public function cache()
    {
        $cache = wison::createObject('cache');
        $cache->set('test', '我就是测试一下缓存组件');
        $result = $cache->get('test');
        $cache->flush();
        echo $result;
    }
}
