<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand"
           href="{{ route('index') }}"
        >
            Admin panel
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('posts.index') }}"
                    >
                        Posts
                    </a>
                </li>
            </ul>
            {{--Right side--}}
            <ul class="navbar-nav text-light ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    Right side
                </li>
            </ul>
        </div>
    </div>
</nav>
