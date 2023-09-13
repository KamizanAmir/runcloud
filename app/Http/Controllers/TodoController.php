<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function create(){
        return view('todo.create');
    }
    public function upload(Request $request){
        $todow = $request->title;
        Todo::create(['title' => $todow]);
        return redirect()->back()->with('success', 'Workspace have been added successfully.');
    }
}
