@extends('layout')

@section('title', 'Task - '.$task->name)

@section('content')

    @if (session('message'))
        <div class="notification is-success">
            <button class="delete"></button>
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="notification is-danger">
            <button class="delete"></button>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

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
                    <a href="{{ $task->project->path() }}" class="tag is-info">#{{ $task->project->name }}</a>
                    @foreach($task->tags as $tag)
                        <a class="tag is-{{ $tag->color }}">#{{ $tag->name }}</a>
                    @endforeach
                    <h2 style="margin-top: 20px;">{{$task->name}}</h2>
                        <strong>Assignee: </strong> {{$task->assignee->name}}
                        <strong style="margin-left: 50px;">Priority: </strong> {{$task->priority->name}}
                    </p>
                    <p>{{$task->description}}</p>
                </div>
            </div>
        </article>
    </div>

    <div class="js-comments-list">
        <comments-list
            load-url="{{ route('comments.index', ['project' => $task->project, 'task' => $task]) }}"
            post-url="{{ route('comments.create', ['project' => $task->project, 'task' => $task]) }}">
        </comments-list>
    </div>

    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>

@endsection('content')
