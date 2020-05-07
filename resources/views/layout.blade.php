<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body>
    <div class="columns">
      <div class="column is-one-fifth app__logo">
        <a href="/" class="title">Project Control</a>
      </div>
      <div class="column app__topMenu">
        @include('components.topMenu')
      </div>
    </div>
    <div class="columns is-fullheight">
      <div class="column is-one-fifth app__leftMenu">
          @isset($project)
              @include('components.leftMenuProject', ['project' => $project])
          @else
              @include('components.leftMenu')
          @endisset
      </div>
      <div class="column">
        @section('content')
        @show
      </div>
    </div>
  </body>
</html>
