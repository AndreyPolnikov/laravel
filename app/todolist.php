<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    protected $fillable = [
        'title', 'desc'
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public static function updateTodo($request)
    {
        $title = $request->input('title');
        $text = $request->input('text');
        $id_post = $request->input('id_post');
        todolist::find($id_post)->update(['title' => $title, 'desc' => $text]);


    }
}
