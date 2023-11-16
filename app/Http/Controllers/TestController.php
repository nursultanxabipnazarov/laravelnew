<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $posts = DB::table('posts')->get();
        return  view('test')->with('posts',$posts);

    }
}
