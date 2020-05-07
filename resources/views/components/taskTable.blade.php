<table class="table is-fullwidth">
    <thead>
    <tr>
        <th>Info</th>
        <th>Assignee</th>
        <th>Priority</th>
        <th>Update</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>
                <a href="{{ $project->path() }}" class="tag is-info">#{{ $task->project->name }}</a>
                @foreach($task->tags as $tag)
                    <a class="tag is-{{ $tag->color }}">#{{ $tag->name }}</a>
                @endforeach
                <br>
                <a href="{{$task->path()}}">{{$task->name}}</a>
            </td>
            <th>
                <strong>{{ $task->assignee->name }}</strong>
            </th>
            <td>{{ $task->priority->name }}</td>
            <td>
                <time>{{ $task->updated_at->format('H:i') }}</time>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
