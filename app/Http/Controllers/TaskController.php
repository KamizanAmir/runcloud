<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Task;

class TaskController extends Controller
{
    public function create(){
        $taskw = Task::all();
        $todo2 = Todo::all();
        return view('task.create')->with(['tasks' => $taskw, 'todos'=>$todo2]);
    }
    #upload input to DB
    public function upload(Request $request){
        
        $request->validate([
            'title' => 'required | max:255',
            'isFinish' => 'false',
            'due_date' => 'required',
        ]);
        $task = $request->title;
        Task::create(['title' => $task]);
        return redirect()->back()->with('success', 'Task have been added successfully.');
    }
}
