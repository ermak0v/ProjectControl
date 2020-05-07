@foreach($comments as $comment)
    <article class="message is-primary">
        <div class="message-header" style="height: 52px;">
            <p style="margin-bottom: 0px;">
                {{$comment->author->name}}
            </p>
            <span>
                <time>{{ $comment->created_at->format('j.m.Y H:i') }}</time>
                <button class="delete" aria-label="delete"></button>
            </span>
        </div>
        <div class="message-body">
            {{$comment->text}}
        </div>
    </article>
@endforeach
