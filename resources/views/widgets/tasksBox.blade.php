<div class="box app__box">
    <article class="media">
        <div class="media-content">
            <div class="content is-medium">
                <span class="icon has-text-danger">
                    <i class="fas fa-tasks" aria-hidden="true"></i>
                </span>
                @if($component == 'taskCard')
                    <strong>Important tasks</strong>
                @else
                    <strong>Tasks</strong>
                @endif
                <br>
            </div>
            <div class="tile is-ancestor">
                <div class="tile is-vertical">
                    @include('components.'.$component, ['tasks' => $tasks])
                </div>
            </div>
        </div>
    </article>
</div>
