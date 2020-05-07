@extends('layout')

@section('title', 'Project Control')

@section('content')

    @include('widgets.favoriteBox', ['projects' => $projects])
    <div class="columns">
        <div class="column">
            @include('widgets.tasksBox', ['component' => 'taskCard', 'tasks' => $tasks])
        </div>
        <div class="column">
            @include('widgets.activityBox', ['latest_activity' => $latest_activity])
        </div>
    </div>

@endsection('content')
