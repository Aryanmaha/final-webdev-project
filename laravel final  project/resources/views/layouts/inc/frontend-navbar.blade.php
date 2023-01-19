<nav class=" container navbar-light d-flex justify-content-between mt-10">
        <div class="logo nav-left navbar-brand"> <a href="index.html"> Food resource </a></div>
        <div class="nav-right d-flex justify-content-between align-items-center"> 
            <a href="" class="social-logo"><i class="fa-brands fa-instagram"></i></a>
            <a href="" class="social-logo"><i class="fa-brands fa-twitter"></i></a>
            <a href="" class="social-logo"><i class="fa-brands fa-facebook"></i></a>
            <a href=""></a>
            <form class="d-flex" role="search">
                <input type="search" class="form-control" placeholder="search" arai-label="search">
                <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <ul class="navbar-nav d-flex mx-3">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
        </div>
        </div>
    </nav>
    <!-- content for header ends -->
    <!-- content for seconds header i.e. manu items -->
    <nav class=" second-nav navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class= " collapse navbar-collapse container" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link active" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/category')}}">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contact')}}">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about')}}">About us</a>
              </li>
          </ul>
        </div>

      </nav>
      </header>