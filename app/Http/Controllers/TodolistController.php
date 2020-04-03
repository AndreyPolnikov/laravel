<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todolist;
use App\User;

class TodolistController extends Controller
{
    public function index(){
        $posts=todolist::all();
//        return response()->json([
//            'name' => 'Abigail',
//            'state' => 'CA'
//        ]);

       // dd($posts[0]['title']);
      return todolist::all();
    }
    public function create(Request $request){
        $title = $request->input('title');
        $text = $request->input('text');
        todolist::create(['title' => $title, 'desc' => $text]);
        return redirect('/');
    }
    public function show_create(){
        return view('create');
    }

    public function edit($id){
        $post = todolist::where('id', $id)->pluck('desc', 'title');
        $title= '';
        $desc= '';

        foreach ($post as $title => $desc) {
            $title = $title;
            $desc = $desc;
        }

//        dd($title . '  ' . $desc );



    return view('edit', compact('title', 'desc', 'id'));
    }
    public function update(Request $request){
        //        $updList = todolist::find($id_post);
//        $updList->title = $title;
//        $updList->desc = $text;
        todolist::updateTodo($request);
        return redirect('/');
    }
    public function destroy( $id){
        todolist::find($id)->delete();

        return redirect('/');
    }


}
