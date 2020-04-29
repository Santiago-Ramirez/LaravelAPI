<nav class="navbar navbar-expand-lg navbar-absolute bg-dark fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#pablo">Index</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">


            <ul class="navbar-nav">



            @guest
            
            <li class="nav-item">
                <a class="nav-link" href="/login2">
                    <p>Login</p>
                </a>
            </li>

            @if (Route::has('register'))

            <li class="nav-item">
                <a class="nav-link" href="/register2">
                    <p>Registro</p>
                </a>
            </li>
                
            @endif
        @else


        <li class="nav-item">
            <a class="nav-link" href="#pablo">
                <p> {{ Auth::user()->name }} </p>
            </a>
        </li>
            
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
            </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
        </li>

                
                   
                      
                   
            
        @endguest

                        
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                        <p>Logout</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                        <p>Login</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                        <p>Registro</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                        <p>Name</p>
                    </a>
                </li> --}}
               
               
            </ul>
        </div>
    </div>
</nav>