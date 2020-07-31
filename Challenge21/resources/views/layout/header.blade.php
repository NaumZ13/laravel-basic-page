
    @if (Request::is('sample'))
        <header class="widen">
    @else
        <header>
    @endif
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">Blog</a>
                <ul class="navbar-nav ml-auto">
                    @if (Request::is('/'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Home
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home
                            </a>
                        </li>
                    @endif

                    @if (Request::is('aboutme'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('aboutme') }}">About</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutme') }}">About</a>
                        </li>
                    @endif

                    @if (Request::is('sample'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('sample') }}">Sample post</a>
                        </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sample') }}">Sample post</a>
                    </li>
                    @endif
                    
                    @if (Request::is('contact'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    @else 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>

        <div class="container moveup">
            <div class="row h-100">
                <div class="col-6 mx-auto text-center text-white d-flex align-items-center flex-column justify-content-center">
                    @if (Request::is('sample'))
                        <h1 class="text-left h1 font-weight-bold"> {{ $title }} </h1>
                        <h4 class="subtitle text-left"> {{ $subtitle }} 
                        </h4>
                        <h4 class="text-left w-100"> {{ $small }}</h4>
                    @else
                        <h1> {{ $title }} </h1>
                        <h4> {{ $small }} </h4>
                    @endif
                </div>
            </div>
        </div>
    </header>