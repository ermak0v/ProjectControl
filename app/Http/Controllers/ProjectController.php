<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function index()
    {
        $user = User::current();

        $projects = $user->projects()->withCount(['tasks', 'members'])->get();

        return view('pages.projects', ['projects' => $projects]);
    }

    public function show($slug)
    {
        $project = User::current()->projects()->where('slug', $slug)->firstOrFail();

        $latest_tasks = $project->tasks()->whereDate('tasks.created_at', '>', Carbon::now()->subHours(24))->get();

        $task_id = $project->tasks()->get(['id'])->map(function ($task) {
            return $task['id'];
        })->toArray();

        $latest_comments = Comment::whereIn('task_id', $task_id)->whereDate('comments.created_at', '>', Carbon::now()->subHours(24))->get();

        $latest_activity = $latest_tasks->merge($latest_comments)->sortByDesc('updated_at');

        return view('pages.project', ['project' => $project, 'latest_activity' => $latest_activity]);
    }
}
