<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    public function Post()
    {
        $posts = DB::table('posts')->select('*')->get(); // Создаем переменную с данными и БД
        return view('DBTest', compact('posts'));
    }
}
