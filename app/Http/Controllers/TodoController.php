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

    #show all workspace that user has input
    public function output(){
        //
    }

    #upload input to DB
    private function upload(Request $request){
        
        $request->validate([
            'title' => 'required | max:255',
        ]);
        $todow = $request->title;
        Todo::create(['title' => $todow]);
        return redirect()->back()->with('success', 'Workspace have been added successfully.');
    }
}
