<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function create(){
        return view('todo.create');
    }

    #show all workspace that user has input
    public function output(){
        $todo2 = Todo::all();
        return view('todo.output')->with(['todos'=>$todo2]);
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
}
