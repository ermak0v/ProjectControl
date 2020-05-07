<div class="tile is-parent">
    <article class="tile is-child box">
        <p class="title is-4">
            <a href="{{ $project->path() }}">{{ $project->name }}</a>
        </p>
        <p class="subtitle is-6" style="margin-bottom: 5px;">
            Updated:
            <time>{{ $project->updated_at->format('H:i') }}</time>
            <br>
            <span class="icon has-text-primary">
                        <i class="fas fa-tasks" aria-hidden="true"></i>
                    </span>
            <span>{{ $project->tasks_count }}</span>
            <span class="icon has-text-primary">
                        <i class="fas fa-users" aria-hidden="true"></i>
                    </span>
            <span>{{ $project->members_count }}</span>
        </p>
        <div class="content">
            <p>{{ $project->description }}</p>
        </div>
    </article>
</div>
