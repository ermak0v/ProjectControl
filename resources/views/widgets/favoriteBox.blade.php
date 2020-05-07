<div class="box app__box">
    <article class="media">
        <div class="media-content">
            <div class="content is-medium">
                <span class="icon has-text-warning">
                    <i class="fas fa-star" aria-hidden="true"></i>
                </span>
                <strong>Favorite projects</strong>
                <br>
            </div>
            @foreach($projects->chunk(3) as $chunk)
                <div class="tile is-ancestor">
                    @foreach($chunk as $project)
                        @include('components.projectsCard', ['project' => $project])
                    @endforeach
                </div>
            @endforeach
        </div>
    </article>
</div>
