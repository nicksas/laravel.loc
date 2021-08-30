<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

//        $query = DB::insert("INSERT INTO posts (title, content) VALUE (?, ?)", ['Статья 6', 'Текст 6']);
//
//        dump($query);
        $posts = DB::select("SELECT * FROM posts");
        dump($posts);


        $name = 'Index';
        return view('about', compact('name'));
    }

    public function test()
    {
        return __METHOD__;
    }

}
