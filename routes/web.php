<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // передача переменной исполльзуя compact()
});

Route::get('/laravel', function () {
    return view('laravel'); 
});

Route::get('/DBTest', [PostController::class, 'Post']);

// Route::get('/DBTest', function(){
//     $posts = App\Models\Posts::all();// Создаем переменную с данными и БД
//     return view('DBTest', compact('posts'));// методом компакт отправляем даннные
// });