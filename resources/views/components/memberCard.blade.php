@foreach($members as $user)
    <div class="tile is-parent">
        <article class="tile is-child box">
            <p class="title is-6">
                <span class="icon has-text-primary">
                    <i class="fas fa-user" aria-hidden="true"></i>
                </span>
                {{$user->name}}
            </p>
        </article>
    </div>
@endforeach
