<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Task;


class TodoController extends Controller
{
    public function create(){
        $todo2 = Todo::all();
        return view('todo.create')->with(['todos'=>$todo2]);
    }

    #upload input to DB
    public function upload(Request $request){
        $request->validate([
            'title' => 'required | max:255',
        ]);
        $todow = $request->title;
        Todo::create(['title' => $todow]);
        return redirect()->back()->with('success', 'Workspace have been added successfully.');
    }

    public function add($id){
        $taskw = Task::all();
        $todo2 = Todo::all();
        $todow = Todo::find($id);
        $updateTitle = $todow -> title;
        return view('task.create')->with(['id'=> '$id', 'title' => $updateTitle, 'tasks' => $taskw, 'todos'=>$todo2]);
    }
}
