@guest
    <li class="navigation-item">
        <a href="{{ route('register') }}" class="navigation-link" >Sign Up</a>
    </li>
    <li class="navigation-item">
        <a href="{{ route('login') }}" class="navigation-link" >Login</a>
    </li>
    <li class="navigation-item">
        <a href="{{ route('front.join-our-team.index') }}" class="navigation-link jot" ><b>Join Our Team</b></a>
    </li>
@endguest
@auth
    <!-- User account dropdown -->
    <li class="navigation-item">
        <a class="navigation-link" href="#"> {{ auth()->user()->full_name }} <img
                class="ui right spaced avatar image"
                src="{{returnAvatar(auth()->user()->avatar)}}"
                alt="account avatar">
        </a>
        <ul class="navigation-dropdown">
            <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link"
                   href="{{route("dashboard.dashboard")}}">Profile</a>
            </li>
            <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link"
                   href="{{ route('dashboard.orders') }}">Your Orders</a>
            </li>
{{--            <li class="navigation-dropdown-item">--}}
{{--                <a class="navigation-dropdown-link"--}}
{{--                   href="./my-account-pages--subscription.html">Subscriptions</a>--}}
{{--            </li>--}}
            <li class="navigation-dropdown-item">
                <a class="navigation-dropdown-link"
                   href="{{ route('dashboard.favorites.index') }}">Favorites</a>
            </li>
            <li class="navigation-dropdown-item">
                <hr class="dropdown-divider rlr-dropdown__divider">
            </li>
            <li class="navigation-dropdown-item">
                <form action="{{ route('logout') }}" id="logoutForm" method="post">
                    @csrf
                    <a class="navigation-dropdown-link"
                       onclick="logout()"
                       href="#">Sign
                        out</a>
                </form>
            </li>
        </ul>
    </li>
@endauth
