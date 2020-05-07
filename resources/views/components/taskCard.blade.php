@foreach($tasks as $task)
    <div class="tile is-parent">
        <article class="tile is-child box">
            <p class="title is-5">
                <a href="{{ $task->path() }}">{{ $task->name}}</a>
            </p>
            <p class="subtitle is-6" style="margin-bottom: 5px;">
                Updated:
                <time>{{ $task->updated_at->format('H:i') }}</time>
                <br>
                Comments: {{ $task->comments_count }}
            </p>
            <div class="content">
                <a href="{{ $task->project->path() }}" class="tag is-info">#{{ $task->project->name }}</a>
                @foreach($task->tags as $tag)
                    <a class="tag is-{{ $tag->color }}">#{{ $tag->name }}</a>
                @endforeach
            </div>
        </article>
    </div>
@endforeach
