<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Tasks;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check())
        {
            $authMain = true;
        }
        else{
            $authMain = false;
        };
        return view('task', compact('authMain'));
    }
    public function showTask()
    {
        $userId = Auth::id();
        $arrayTask = Tasks::all()->where('user_id', $userId);
        return response($arrayTask);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $qeryTsk = Tasks::create([
            'user_id' => $userId,
            'task_name' => $request['titleTask'],
            'task' => $request['textTask']
        ]);

        //return \response()->json($request['titleTask'], 200, []);
        return response()->json(['message' => 'task was successful']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Tasks::find($id)->delete();
        return response()->json(['message' => 'task was successful']);
    }
    public function editShow($id){
        $arrayTaskEdit = Tasks::all()->where('id', $id);
        return response($arrayTaskEdit);
    }
    public function editTask(Request $request)
    {
        $titleTask = $request['titleTask'];
        $textTask = $request['textTask'];
        $id = $request['id'];
        $task_edit = Tasks::find($id);
        $task_edit->task_name = $titleTask;
        $task_edit->task =  $textTask;
        $task_edit->save();

        return response($request);
    }
}
