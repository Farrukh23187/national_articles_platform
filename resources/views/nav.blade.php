<nav class="navbar  navbar-expand-lg navbar-dark info-color">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Scopus | Uzbek Version
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                    <li class="nav-item active">
                            <a class="nav-link " href="/">Bosh sahifa</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('articles')}}">Maqolalar</a>
                          </li>
                       
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                          </li>
                </ul>

                <!-- Right Side Of Navbar -->
              
            </div>
        </div>
    </nav>