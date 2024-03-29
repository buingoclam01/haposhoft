<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="logo-container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="logo-image" src="{{ asset('images/logo.png') }}" alt="HapoLearn Logo">
            </a>
            <div class="navbar-icons">
                <div class="navbar-icon">

                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ALL COURSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        LOGIN/REGISTER
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PROFILE</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
