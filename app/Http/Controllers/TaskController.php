<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(Project $project)
    {
        return view('pages.tasks', ['project' => $project]);
    }

    public function show(Project $project, Task $task)
    {
        return view('pages.task', ['task' => $task]);
    }
}
