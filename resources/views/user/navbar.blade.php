<div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm navbar-fixed-top navbar-inverse">
      <div class="container">
          <a class="navbar-brand" href="#">
              <h1><strong>E-Grocery <em>System</em></strong></h1>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav me-auto">
                  <!-- Home -->
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home</a>
                      <span class="sr-only"></span>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{url('catalog')}}">Catalog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">Shop</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Order</a>
                    </li> 
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  <li class="nav-item">
                      @if (Route::has('login'))
                      
                          @auth
                            
                                <x-app-layout>
            
                                </x-app-layout>
                                </a>
                        
                          @else
                            <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
            
                              @if (Route::has('register'))
                                  <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                              @endif
                          @endauth
                  @endif
                      </li>
              </ul>
          </div>
      </div>
  </nav>
</div>
