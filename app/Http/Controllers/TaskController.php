<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Task;

class TaskController extends Controller
{
    public function create(){
        
    }
    #upload input to DB
    public function upload(Request $request){
        $request->validate([
            'title' => 'required | max:255',
            'subject' => 'required | max:255',
            'due_date' => 'required',
        ]);
    
        $data = [
            'title' => $request->input('title'),
            'subject' => $request->input('subject'),
            'isFinish' => false,
            'due_date' => $request->input('due_date'),
        ];
    
        Task::create($data);
    
        return redirect()->back()->with('success', 'Task has been added successfully.');
    }
}
