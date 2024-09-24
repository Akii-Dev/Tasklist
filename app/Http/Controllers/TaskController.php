<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    

    public function index()
    {
        $tasks = Task::all();
        return view('index', ['tasks' => $tasks]);
    }

    public function edit($id)
    {
            $task = Task::find($id);
            if ($task === null) {
                return "nuh";
            } else {
                return view('edit', ['task' => $task]);
            }
    }

}
