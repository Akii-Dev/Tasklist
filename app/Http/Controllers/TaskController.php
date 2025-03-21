<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{


    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->paginate(10);
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

    public function update($id)
    {
        $task = Task::find($id);
        if ($task === null) {
            return "User ID niet gevonden";
        } else {
            $task->update(
                [
                    'description' => $_POST["description"]
                ]
            );
        }
        return redirect('/');
    }

    public function toggle(Request $request, $id)
    {
        $task = Task::find($id);
        if ($task === null) {
            return "User ID niet gevonden";
        } else {
            $data = $request->input("checked");

            $task->update(
                [
                    'is_completed' => $data
                ]
            );
            return;
        }
    }

    public function create()
    {
        // return $_POST["name"];
        Task::factory()->create([
            'description' => $_POST["description"]
        ]);
        return redirect('/');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        if ($task === null) {
            return "User ID niet gevonden";
        } else {
            $task->delete();
        }
        return redirect('/');
    }
}
