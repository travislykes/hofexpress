<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col--md-4 col-sm-4 col-xs-4">
                <a href="#" id="logo">
                <img src="{{ asset('img/logo.png') }}" width="190" height="23" alt="" data-retina="true" class="hidden-xs">
                <img src="{{ asset('img/logo_mobile.png') }}" width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>
            </div>
            <nav class="col--md-8 col-sm-8 col-xs-8">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <div class="main-menu">
                <div id="header_menu">
                    <img src="{{ asset('img/logo.png') }}" width="190" height="23" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                 <ul>
                 <li><a href="{{ route('index') }}">Home</a></li>
                    <li>
                    <a href="{{ route('all.restaurants') }}" class="">Restaurants</a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="show-submenu">Work With Us<i class="icon-down-open-mini"></i></a>
                        <ul>
                            <li><a href="{{ route('submit.restaurant') }}">Register Restaurant</a></li>
                            <li><a href="{{ route('view.rider.form') }}">Work As A Rider</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('about-page') }}">About us</a></li>
                    
                    @guest
                    <li><a href="#0" data-toggle="modal" data-target="#register">Register</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a></li>
                    @else
                    <li class="submenu">
                            <a id="navbarDropdown" class="show-submenu" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              Hello {{ Auth::user()->firstname }} <i class="icon-down-open-mini"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                       
                    @endguest
                </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>