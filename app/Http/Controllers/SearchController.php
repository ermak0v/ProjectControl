<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $projects = User::current()->projects()->get()->map(function($project){
            return [
                'id' => $project->id,
                'name' => $project->name,
                'description' =>$project->path(),
            ];
        });

        $project_id = $projects->map(function ($project) {
            return $project['id'];
        })->toArray();

        $tasks = Task::whereIn('project_id', $project_id)->get()->map(function($task){
            return [
                'id' => $task->id,
                'name' => $task->name,
                'priority_id' => $task->priority_id,
                'description' => $task->path(),
            ];
        });

        return $projects->merge($tasks);
    }
}
