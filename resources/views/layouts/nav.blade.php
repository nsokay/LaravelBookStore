<header class="masthead mb-auto">
    <div class="inner">
        <h3 class="masthead-brand">BookStore</h3>
        <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="/">Home</a>

            @if (!Auth::check())
                <a class="nav-link" href="/login">Login</a>
                <a class="nav-link" href="/register">Register</a>
            @endif

            @if (Auth::check())
                @if (Auth::user()->isAdmin())
                    <a class="nav-link" href="/books/create">Add new book</a>
                @endif
            @endif

            @if (Auth::check())
                <a class="nav-link" href="/logout">Logout</a>
                <a class="nav-link mr-auto" href="#">{{ Auth::user()->name }}</a>
            @endif
        </nav>
    </div>
</header>
