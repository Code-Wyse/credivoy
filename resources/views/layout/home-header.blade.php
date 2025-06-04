<nav id="rlrTransNav" class="navigation rlr-navigation fixed-top navigation-transparent">
    <!-- Logo -->
    <div class="navigation-header">
        <div class="navigation-brand-text">
            <div class='rlr-logo rlr-logo__navbar-brand rlr-logo--transparent-bg'>
                <a href="/">
                    <img src="{{asset("assets/svg/earthtrektours-logo-white.png")}}" alt='#' class='rlr-logo__img' />
                </a>
            </div>            <div class='rlr-logo rlr-logo__navbar-brand rlr-logo--default'>
                <a href="/">
                    <img src="{{asset("assets/svg/earthtrektours-logo-dark.png")}}" alt='#' class='rlr-logo__img' />
                </a>
            </div>        </div>
        <div class="navigation-button-toggler">
        <span class="rlr-sVGIcon">
            <i
                class="rlr-icon-font rlr-icon-font--megamenu flaticon-menu ">

            </i>            </span>
        </div>
    </div>
    <div class="navigation-body rlr-navigation__body container-xxxl">
        <div class="navigation-body-header rlr-navigation__body-header">
            <div class="navigation-brand-text">
                <div class='rlr-logo rlr-logo__navbar-brand rlr-logo--transparent-bg'>
                    <a href="/">
                        <img src="{{asset("assets/svg/earthtrektours-logo-white.png")}}" alt='#' class='rlr-logo__img' />
                    </a>
                </div>                <div class='rlr-logo rlr-logo__navbar-brand rlr-logo--default'>
                    <a href="/">
                        <img src="{{asset("assets/svg/earthtrektours-logo-dark-01.png")}}" alt='#' class='rlr-logo__img' />
                    </a>
                </div>            </div>
            <span class="rlr-sVGIcon navigation-body-close-button">
            <i
                class="rlr-icon-font rlr-icon-font--megamenu flaticon-close ">

            </i>            </span>
        </div>

        <!-- Main menu -->
        @include('layout.nav-menus')
        <!-- User actions menu -->
        <ul class="navigation-menu rlr-navigation__menu align-to-right">
            <!-- Currency dropdown -->
{{--            <li class="navigation-item">--}}
{{--                <a class="navigation-link" href="#">--}}
{{--                    <span>USD</span>--}}
{{--                </a>--}}
{{--                <ul class="navigation-dropdown rlr-currency-dropdown">--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link"--}}
{{--                           href="#">EUR</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link" href="#">GBP</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link"--}}
{{--                           href="#">CHF</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link" href="#">CAD</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <hr class="dropdown-divider rlr-dropdown__divider">--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link"--}}
{{--                           href="#">JPY</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link" href="#">CNH</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <!-- Language dropdown -->--}}
{{--            <li class="navigation-item">--}}
{{--                <a class="navigation-link" href="#">--}}
{{--        <span class="rlr-svg-icon rlr-svg-icon__header-language">--}}
{{--            <svg width="24" height="24" viewBox="0 0 24 24"--}}
{{--                 fill="none"--}}
{{--                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                <g clip-path="url(#clip0_2101_47971)">--}}
{{--                    <path--}}
{{--                        d="M24 12C24 15.3137 22.8284 18.1421 20.4853 20.4853C18.1421 22.8284 15.3137 24 12 24C8.68629 24 5.85787 22.8284 3.51472 20.4853C1.17157 18.1421 0 15.3137 0 12C0 8.68629 1.17157 5.85787 3.51472 3.51472C5.85787 1.17157 8.68629 0 12 0C15.3137 0 18.1421 1.17157 20.4853 3.51472C22.8284 5.85787 24 8.68629 24 12C24 12.1396 23.9976 12.2792 23.9927 12.4188Z"--}}
{{--                        fill="#F0F0F0" />--}}
{{--                    <path--}}
{{--                        d="M2.47934 4.69531C1.53673 5.9217 0.825969 7.33522 0.412109 8.8708H6.65483L2.47934 4.69531Z"--}}
{{--                        fill="#0052B4" />--}}
{{--                    <path--}}
{{--                        d="M23.5844 8.87075C23.1706 7.33522 22.4597 5.9217 21.5172 4.69531L17.3418 8.87075H23.5844Z"--}}
{{--                        fill="#0052B4" />--}}
{{--                    <path--}}
{{--                        d="M0.412109 15.1309C0.826016 16.6664 1.53678 18.0799 2.47934 19.3063L6.65469 15.1309H0.412109Z"--}}
{{--                        fill="#0052B4" />--}}
{{--                    <path--}}
{{--                        d="M19.3043 2.48134C18.078 1.53873 16.6645 0.827969 15.1289 0.414062V6.65673L19.3043 2.48134Z"--}}
{{--                        fill="#0052B4" />--}}
{{--                    <path--}}
{{--                        d="M4.69336 21.5201C5.91975 22.4627 7.33327 23.1734 8.8688 23.5874V17.3447L4.69336 21.5201Z"--}}
{{--                        fill="#0052B4" />--}}
{{--                    <path--}}
{{--                        d="M8.86875 0.414062C7.33322 0.827969 5.9197 1.53873 4.69336 2.4813L8.86875 6.65669V0.414062Z"--}}
{{--                        fill="#0052B4" />--}}
{{--                    <path--}}
{{--                        d="M15.1289 23.5874C16.6644 23.1734 18.078 22.4627 19.3043 21.5201L15.1289 17.3447L15.1289 23.5874Z"--}}
{{--                        fill="#0052B4" />--}}
{{--                    <path--}}
{{--                        d="M17.3418 15.1309L21.5172 19.3063C22.4598 18.08 23.1706 16.6664 23.5844 15.1309H17.3418Z"--}}
{{--                        fill="#0052B4" />--}}
{{--                    <path--}}
{{--                        d="M23.8984 10.4348H13.5653H13.5652V0.101578C13.0529 0.034875 12.5305 0 12 0C11.4694 0 10.9471 0.034875 10.4348 0.101578V10.4347V10.4348H0.101578C0.034875 10.9471 0 11.4695 0 12C0 12.5306 0.034875 13.0529 0.101578 13.5652H10.4347H10.4348V23.8984C10.9471 23.9651 11.4694 24 12 24C12.5305 24 13.0529 23.9652 13.5652 23.8984V13.5653V13.5652H23.8984C23.9651 13.0529 24 12.5306 24 12C24 11.4695 23.9651 10.9471 23.8984 10.4348V10.4348Z"--}}
{{--                        fill="#D80027" />--}}
{{--                    <path--}}
{{--                        d="M15.1309 15.1309L20.4857 20.4857C20.732 20.2395 20.9669 19.9821 21.191 19.7153L16.6066 15.1309H15.1309V15.1309Z"--}}
{{--                        fill="#D80027" />--}}
{{--                    <path--}}
{{--                        d="M8.87048 15.1309H8.87039L3.51562 20.4856C3.76181 20.7319 4.0192 20.9668 4.28602 21.191L8.87048 16.6064V15.1309Z"--}}
{{--                        fill="#D80027" />--}}
{{--                    <path--}}
{{--                        d="M8.86878 8.8696V8.86951L3.51397 3.51465C3.26769 3.76084 3.03275 4.01823 2.80859 4.28504L7.39311 8.86955H8.86878V8.8696Z"--}}
{{--                        fill="#D80027" />--}}
{{--                    <path--}}
{{--                        d="M15.1309 8.8698L20.4857 3.5149C20.2395 3.26862 19.9821 3.03368 19.7153 2.80957L15.1309 7.39409V8.8698Z"--}}
{{--                        fill="#D80027" />--}}
{{--                </g>--}}
{{--                <defs>--}}
{{--                    <clipPath id="clip0_2101_47971">--}}
{{--                        <rect width="24" height="24" fill="white" />--}}
{{--                    </clipPath>--}}
{{--                </defs>--}}
{{--            </svg>--}}
{{--        </span>--}}
{{--                    <span class="d-lg-none d-xxl-block ">English</span>--}}
{{--                </a>--}}
{{--                <ul class="navigation-dropdown rlr-language-dropdown">--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link"--}}
{{--                           href="#">Italiano</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link" href="#">Español</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link"--}}
{{--                           href="#">Français</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link" href="#">Deutsch</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <hr class="dropdown-divider rlr-dropdown__divider">--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link"--}}
{{--                           href="#">हिन्दी</a>--}}
{{--                    </li>--}}
{{--                    <li class="navigation-dropdown-item">--}}
{{--                        <a class="navigation-dropdown-link" href="#">中国人</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            @include('layout.right-menu')
        </ul>
    </div>
</nav>
