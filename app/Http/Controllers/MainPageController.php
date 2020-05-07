<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Priority;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MainPageController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::current();

        $projects = $user->favoriteProjects()->withCount(['tasks', 'members'])->get();

        $tasks = $user->tasks()->whereIn('priority_id', [3, 4])->with(['project', 'tags'])->withCount('comments')->get();

        $task_id = $user->tasks()->get(['id'])->map(function ($task) {
            return $task['id'];
        })->toArray();

        $latest_tasks = $user->tasks()
            ->whereDate('tasks.created_at', '>', Carbon::now()->subHours(24))
            ->get();

        $latest_comments = Comment::whereIn('task_id', $task_id)
            ->whereDate('comments.created_at', '>', Carbon::now()->subHours(24))
            ->get();

        $latest_activity = $latest_tasks->merge($latest_comments)->sortByDesc('created_at');

        return view('pages.main', [
            'projects' => $projects,
            'tasks' => $tasks,
            'latest_activity' => $latest_activity,
        ]);
    }
}
