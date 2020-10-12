<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $tasks = $user->tasks;

        if ($user->role == 1)
            return view('admin.tasks', ['tasks' => $tasks]);
        if ($user->role == 2)
            return view('manager.tasks', ['tasks' => $tasks]);
        if ($user->role == 3)
            return view('customer.tasks', ['tasks' => $tasks]);
    }
    public function store()
    {
        Task::create([
            'description' => request('description'),
            'user_id' => auth()->id()
        ]);
        return back();
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
