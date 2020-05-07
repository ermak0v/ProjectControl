<nav class="navbar app__nav">
    <div class="navbar-menu">
        <div class="navbar-item">
            <div class="js-search-form">
                <search-form
                    load-url="{{ route('search') }}">
                </search-form>
            </div>
        </div>
        <div class="navbar-start">
            <a href="/" class="navbar-item" style="background: darkgrey;">Home</a>
            <a href="/projects" class="navbar-item" style="background: darkgrey;">Projects</a>
            <a href="#" class="navbar-item" style="background: darkgrey;">Activity</a>
            <a href="#" class="navbar-item" style="background: darkgrey;">Settings</a>
        </div>
    </div>

    @isset($task)
        <script type="text/javascript" src="{{ asset('/js/search.js') }}"></script>
    @else
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    @endisset

</nav>
