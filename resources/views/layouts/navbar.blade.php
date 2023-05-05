<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand d-inline-flex" href="{{ url('/') }}">
            <img src="{{asset('paw-logo.png')}}" alt="logo" height="25px" width="25px" class="mx-1"/>{{ config('app.name', 'PAWS Clinic') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href={{ url('/') }}>Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sevices</a>
                    <ul class="dropdown-menu dropdown-menu-center">
                        <li><a class="dropdown-item" href={{ url('/services/adoption') }}>Adoption</a></li>
                        <li><a class="dropdown-item" href={{ url('/services/grooming') }}>Grooming</a></li>
                        <li><a class="dropdown-item" href={{ url('/services/preventive-care') }}>Preventive Care</a></li>
                      </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ url('/appointment') }}>Book an Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ url('/faq') }}>FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ url('/about-us') }}>About Us</a>
                </li>
                @guest
                    @if (Route::has('login'))
                    
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}"  v-pre>{{ __('Login') }}</a>
                            
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                
                <li class="nav-item">
                    <div class="btn-group">
                        @if(Auth::check())
                        @if(Auth::user()->role_as == '1')
                            <a id="" class="nav-link pe-0" href={{ url('/admin/dashboard') }}>
                                {{ Auth::user()->firstname }}
                            </a>
                        @endif
                        @if(Auth::user()->role_as == 0)
                        <a id="" class="nav-link pe-0" href="{{ route('home') }}">
                            {{ Auth::user()->firstname }}
                        </a>
                        @endif
                    @endif
                    <div class="dropdown menu-end">      
                    <a id="navbarDropdown" class="nav-link dropdown-toggle dropdown-toggle-split" href={{ url('/logout') }} role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <span class="visually-hidden">Toggle Dropdown</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                        </ul>
                    </a>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
