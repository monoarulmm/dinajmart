

<div id="header" class="header header-style-1 d-none d-lg-block ">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu right-menu">
                        <ul>
                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->utype === 'ADM')
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{ Auth::user()->name }})<i
                                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">

                                                <li class="menu-item">
                                                    <a title="Dashboard" href="{{ route('admin.category') }}">Dashboard</a>
                                                </li>



                                                <li class="menu-item">
                                                    <a title="My Profile" href="{{ route('profile.show') }}">My Profile</a>
                                                </li>



                                                <li class="menu-item">

                                                    <a
                                                        href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                                </li>

                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>

                                            </ul>
                                        </li>
                                    @else
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{ Auth::user()->name }})<i
                                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a title="My Profile" href="{{ route('profile.show') }}">My Profile</a>
                                                </li>

                                                <li class="menu-item">

                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                                </li>

                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>

                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    <li class="menu-item"><a title="Register or Login" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="menu-item "><a title="Register or Login"
                                            href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endif
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
