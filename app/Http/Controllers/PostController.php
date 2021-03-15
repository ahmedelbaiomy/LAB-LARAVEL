<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = [
            ['id'=>1, 'title'=>'Laravel','description'=> 'Show Post Description', 'posted_by'=> 'Ahmed','Created_at'=>'2021-3-14'],
            ['id'=>2, 'title'=>'PHP', 'description'=> 'Show Post Description', 'posted_by'=> 'Mohamed','Created_at'=>'2021-3-15'],
    
        ];
        return view('posts.index' , [
            'posts'=>$posts
        ]);
    }


    public function show($post){
        $post = ['id'=>1, 'title'=>'Laravel','description'=> 'Show Post Description', 'posted_by'=> 'Ahmed','Created_at'=>'2021-3-14'];

        return view('posts.show' , ['post' => $post]);
    }

    public function create(){

        return view('posts.create');
    }

    public function store(){
        return redirect()->route('posts.index');
    }

    public function edit(){
        return view('posts.edit');
 
    }
    
    public function update(){
        return redirect()->route('posts.index');
    }
}
