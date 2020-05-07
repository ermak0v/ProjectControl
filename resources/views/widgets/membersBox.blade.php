<div class="box app__box">
    <article class="media">
        <div class="media-content">
            <div class="content is-medium">
                  <span class="icon has-text-primary">
                        <i class="fas fa-users" aria-hidden="true"></i>
                  </span>
                <strong>Project members</strong>
                <br>
            </div>
            <div class="tile is-ancestor">
                <div class="tile is-vertical">
                    @include('components.memberCard', ['members' => $members])
                </div>
            </div>
        </div>
    </article>
</div>
