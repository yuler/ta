<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Front-End 前台路由
|
*/

// 主页
Route::get('/', array('as' => 'site.home', function() {return View::make('site::index'); }));

// 登录页面
Route::get('/signin', array('as' => 'site.signIn', function() {return View::make('site::signIn'); }));

// 注册页面
Route::get('/signup', array('as' => 'site.signUp', function() {return View::make('site::signUp'); }));

// 忘记密码页面
Route::get('/forget', array('as' => 'site.forget', function() {return View::make('site::forget'); }));

//请求登录
Route::post('/signin', array('as' => 'site.signIn.post', 'uses' => 'AuthController@postSignIn'));

//请求退出
Route::get('/logout', array('as' => 'site.logout', 'uses' => 'AuthController@getLogout'));


//查看基本信息
Route::get('/user_get', array('as' => 'site.user.get', 'uses' => 'UserController@get'));
Route::get('/user/show/{$id}', array('as' => 'site.user.show', 'uses' => 'UserController@show'));

// 主题浏览页面
Route::get('/topic', array('as' => 'site.topic.index', function() {return View::make('site::topic/index'); }));

// 404 页面
App::missing(function($exception) {return Response::view('site::404', array(), 404); });

?>


