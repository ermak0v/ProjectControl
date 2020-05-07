@extends('layout')

@section('title', 'Tasks')

@section('content')

{{--    <div class="box app__box">--}}
{{--        <article class="media">--}}
{{--            <div class="media-content">--}}
{{--                <div class="content is-medium">--}}
{{--                <span class="icon has-text-warning">--}}
{{--                    <i class="fas fa-star" aria-hidden="true"></i>--}}
{{--                </span>--}}
{{--                    <strong>My projects</strong>--}}
{{--                    <br>--}}
{{--                </div>--}}
{{--                @foreach($projects->chunk(3) as $chunk)--}}
{{--                    <div class="tile is-ancestor">--}}
{{--                        @foreach($chunk as $p)--}}
{{--                            @include('components.projectsCard', ['project' => $p])--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    </div>--}}

@endsection('content')
