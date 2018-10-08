<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/frontend_file', 'BladeEditController@index');
    $router->get('phpinfo', 'PhpinfoController@index');
    //测试 扩展编辑器部分
    $router->resource('test', 'EditorTestController', ['names'=>[
        'show' => 'test.show',
        'index' => 'test.index',
        'create' => 'test.create',
        'store' => 'test.store',
        'edit' => 'test.edit',
        'update' => 'test.update',
        'destroy' => 'test.destroy',
    ], 'except' => []]);

    //all part
    $router->resource('post', 'PostController', ['names'=>[
        'show' => 'post.show',
        'index' => 'post.index',
        'create' => 'post.create',
        'store' => 'post.store',
        'edit' => 'post.edit',
        'update' => 'post.update',
        'destroy' => 'post.destroy',
    ], 'except' => []]);
    $router->resource('category', 'CategoryController', ['names'=>[
        'show' => 'category.show',
        'index' => 'category.index',
        'create' => 'category.create',
        'store' => 'category.store',
        'edit' => 'category.edit',
        'update' => 'category.update',
        'destroy' => 'category.destroy',
    ], 'except' => []]);
    $router->resource('tag', 'TagController', ['names'=>[
        'show' => 'tag.show',
        'index' => 'tag.index',
        'create' => 'tag.create',
        'store' => 'tag.store',
        'edit' => 'tag.edit',
        'update' => 'tag.update',
        'destroy' => 'tag.destroy',
    ], 'except' => []]);
});
