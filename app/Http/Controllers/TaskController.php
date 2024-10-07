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
                return "User ID niet gevonden";
            } else {
                return view('edit', ['task' => $task]);
            }
    }

    public function create()
    {
        // return $_POST["name"];
        Task::factory()->create([
            'description' => $_POST["name"]
        ]);
        return $this->index();
            
    }

    public function destroy()
    {
        return "destroy";
    }

    public function update()
    {
    }

}
