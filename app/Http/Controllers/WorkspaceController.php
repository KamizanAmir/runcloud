<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;

class WorkspaceController extends Controller
{
    public function index(){
        return view('workspace');
    }
    public function create(Request $request){
        $create = $request->workspace;
        Workspace::create(['workspace' => $create]);
    }
}
