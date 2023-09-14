<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Task;

class TaskController extends Controller
{
    public function create(){
        return view('task.create');
    }
}
