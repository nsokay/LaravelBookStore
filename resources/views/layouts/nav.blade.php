<header class="masthead mb-auto">
    <div class="inner">
        <h3 class="masthead-brand">Cover</h3>
        <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/books/create">Add new book</a>

            @if (Auth::check())
                <a class="nav-link mr-auto" href="#">{{ Auth::user()->name }}</a>
            @endif
        </nav>
    </div>
</header>
