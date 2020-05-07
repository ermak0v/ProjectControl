@extends('layout')

@section('title', $project->name)

@section('content')

    <div class="box app__box">
        <article class="media">
            <div class="media-content">
                <div class="content is-medium">
                <span class="icon has-text-link">
                    <i class="fas fa-info-circle" aria-hidden="true"></i>
                </span>
                    <strong>Info</strong>
                    <br>
                </div>
                <div class="content is-medium">
                    <h2>{{ $project->name }}</h2>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
        </article>
    </div>

    @include('widgets.tasksBox', ['component' => 'taskTable', 'tasks' => $project->tasks()->orderBy('priority_id', 'desc')->get()])

    <div class="columns">
        <div class="column">
           @include('widgets.activityBox', ['latest_activity' => $latest_activity])
        </div>
        <div class="column">
            @include('widgets.membersBox', ['members' => $project->members()->get()])
        </div>
    </div>

@endsection('content')
