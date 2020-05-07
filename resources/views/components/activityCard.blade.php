@foreach($latest_activity as $activity)
    @if($loop->index < 10)
        <div class="tile is-parent">
            <article class="tile is-child box">
                <p class="title is-5">
                    <time>{{ $activity->created_at->format('H:i') }}</time>
                    @if(Arr::exists($activity, 'priority_id'))
                        {{ $activity->assignee->name}}
                    @else
                        {{ $activity->author->name}}
                    @endif
                </p>
                <p class="subtitle is-6" style="margin-bottom: 5px;">
                    @if(Arr::exists($activity, 'priority_id'))
                        Became the assignee of the task: <a href="{{$activity->path()}}">{{ $activity->name}}</a>
                    @else
                        Added a comment to the task: <a href="{{$activity->task->path()}}">{{ $activity->task->name }}</a>
                    @endif
                </p>
            </article>
        </div>
    @else
        @break
    @endif
@endforeach
