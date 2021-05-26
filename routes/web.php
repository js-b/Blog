<?php

use Illuminate\Support\Facades\Route;

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
    $hero = "Invoker"; // Создание переменной
    return view('welcome', compact('hero')); // передача переменной исполльзуя compact()
});

Route::get('/laravel', function () {
    return view('laravel'); 
});
Route::get('/DBTest', function(){
    $posts = DB::table('posts')->get();// Создаем переменную с данными и БД
    return view('DBTest', compact('posts'));// методом компакт отправляем даннные
});