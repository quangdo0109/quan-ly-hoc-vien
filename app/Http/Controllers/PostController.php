<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index (){
        $posts = DB::table('posts')->get();

        return view('posts.index', ['posts' => $posts]);
        //return view('posts.index');
    }

    public function detail ($id){
        $post = DB::table('posts')->where('id', '=', $id)->first();
        //var_dump($posts);

        return view('posts.detail', ['post' => $post]);
        //return view('posts.index');
    }
    //
    public function create_new_post(Request $request){
        //var_dump($request);
        echo $request->title;
        //$title = $_GET['title'];
//        if (strlen($title) > 100) {
//            echo 'loi roi';
//        }
        $validate = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required|min:6|max:500',
        ]);

        $title = $request->title;
        $content = $request->content;

        DB::table('posts')->insert(
            ['title' => $title, 'content' => $content]
        );


        return view('home');
    }

    private function test($operator) {

    }
}
