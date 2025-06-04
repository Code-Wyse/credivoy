<aside class="rlr-sidebar-menu col-lg-2 col-xs-12 mb-5">
    <div class="rlr-sidebar-menu__wrapper">
        <nav class="rlr-sidebar-menu">
            <ul class="rlr-sidebar-menu__desktop">
                <li>
                    <a class="rlr-sidebar-menu__link {{route('dashboard.dashboard') == url()->current() ? "active" : ""}}" href="{{route("dashboard.dashboard")}}">
                        <span class="rlr-sidebar-menu__link-icon"><i class="rlr-icon-font flaticon-carbon-dashboard"> </i></span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="rlr-sidebar-menu__link {{route('dashboard.orders') == url()->current() ? "active" : ""}}" href="{{route("dashboard.orders")}}">
                        <span class="rlr-sidebar-menu__link-icon"><i class="rlr-icon-font flaticon-carbon-box"> </i></span>
                        Orders
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a class="rlr-sidebar-menu__link" href="my-account-pages--subscription">--}}
{{--                        <span class="rlr-sidebar-menu__link-icon"><i class="rlr-icon-font flaticon-carbon-money"> </i></span>--}}
{{--                        Subscriptions--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="rlr-sidebar-menu__link" href="#">--}}
{{--                        <span class="rlr-sidebar-menu__link-icon"><i class="rlr-icon-font flaticon-carbon-download"> </i></span>--}}
{{--                        Downloads--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="rlr-sidebar-menu__link" href="#">--}}
{{--                        <span class="rlr-sidebar-menu__link-icon"><i class="rlr-icon-font flaticon-carbon-location"> </i></span>--}}
{{--                        Addresses--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="rlr-sidebar-menu__link" href="#">--}}
{{--                        <span class="rlr-sidebar-menu__link-icon"><i class="rlr-icon-font flaticon-carbon-wallet"> </i></span>--}}
{{--                        Payment methods--}}
{{--                    </a>--}}
{{--                </li>--}}
                {{-- <li>
                    <a class="rlr-sidebar-menu__link {{route('dashboard.favorites.index') == url()->current() ? "active" : ""}}" href="{{ route('dashboard.favorites.index') }}">
                        <span class="rlr-sidebar-menu__link-icon"><i class="rlr-icon-font flaticon-heart-1"> </i></span>
                        Favorites
                    </a>
                </li> --}}
                <li>
                    <a class="rlr-sidebar-menu__link" href="{{ route('dashboard.accounts-details') }}">
                        <span class="rlr-sidebar-menu__link-icon"><i class="rlr-icon-font flaticon-carbon-user"> </i></span>
                        Account Details
                    </a>
                </li>
                <li>
                    <a class="rlr-sidebar-menu__link" href="{{ route('logout') }}">
                        <span class="rlr-sidebar-menu__link-icon"><i class="rlr-icon-font flaticon-carbon-logout"> </i></span>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<style>
    aside.rlr-sidebar-menu.col-lg-2.col-xs-12.mb-5 {
    width: 22%;
}
</style>