<div class="box app__box">
    <article class="media">
        <div class="media-content">
            <div class="content is-medium">
                <span class="icon has-text-success">
                    <i class="fas fas fa-clock" aria-hidden="true"></i>
                </span>
                <strong>Latest activity</strong>
                <br>
            </div>
            <div class="tile is-ancestor">
                <div class="tile is-vertical">
                    @include('components.activityCard', ['latest_activity' => $latest_activity])
                </div>
            </div>
        </div>
    </article>
</div>
