<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            @if(Auth::check())
                <a class="nav-link ml-auto">Welcome {{Auth::user()->name }}</a>
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @else
                <a class="nav-link ml-auto" href="{{route('login')}}">Login</a>
            @endif
        </nav>
    </div>
</div>

<div class="blog-header">
    <div class="container">
        <h4 class="blog-title">The Bootstrap and Laravel blog</h4>
        <p class="lead blog-description">Example blog with Laravel and Bootstrap</p>
    </div>
</div>