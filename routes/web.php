<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/a1', function () {
//    return "a1";
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*// 注册
Route::get('/register', [RegisterController::class])->name('register');

// 登录
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class => 'login'])->name('login');


// 显示所有文章
Route::get('/articles', 'ArticleController@index');

// 显示单个文章
Route::get('/articles/{article}', 'ArticleController@show');

// 创建文章表单
Route::get('/articles/create', 'ArticleController@create');

// 保存新文章
Route::post('/articles', 'ArticleController@store');

// 编辑文章表单
Route::get('/articles/{article}/edit', 'ArticleController@edit');

// 更新文章
Route::put('/articles/{article}', 'ArticleController@update');

// 删除文章
Route::delete('/articles/{article}', 'ArticleController@destroy');
*/
