<nav class="navbar  navbar-expand-lg navbar-dark purple">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
               
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index')}}">Foydalanuvchilar</a>
                          </li> 
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('companies.index') }}">Tashkilotlar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('articles.index') }}">Maqolalar</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('authors.index') }}">Mualliflar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index') }}">Categoriyalar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('journals.index') }}">Jurnallar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('conferences.index') }}">Konferensiyalar</a>
                        </li>
                        
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item active"><a class="nav-link" href="{{ route('backend') }}">Login</a></li>
                        <!-- <li class="nav-item "><a class="nav-link" href="{{ route('register') }}">Register</a></li> -->
                    @else
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    <span class="fas fa-user"></span> {{ Auth::user()->fullname }} 
                            </a>

                            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                    <a class="dropdown-item" href="{{ route('backend.logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('backend.logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>