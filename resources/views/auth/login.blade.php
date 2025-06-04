{{--@extends("layout.app")--}}

{{--@section("content")--}}
{{--    <!-- Main Content -->--}}
{{--    <main id="rlr-main" class="rlr-main--fixed-top">--}}
{{--        <div class="rlr-section__content--lg-top">--}}
{{--            <section class="rlr-section rlr-section__mt rlr-account">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-4 offset-lg-4">--}}
{{--                            <form class="rlr-authforms" action="{{route("login")}}"  method="POST">--}}
{{--                                @csrf--}}
{{--                                <div class="rlr-authforms__header">--}}
{{--                                    <img src="{{ asset('assets/svg/emprise-logo-dark.png') }}" alt="Logo"/>--}}
{{--                                    <h2>Log in to your {{ config('app.name') }}</h2>--}}
{{--                                    <p>Welcome back! Please enter login details.</p>--}}

{{--                                    @include("messages")--}}
{{--                                </div>--}}
{{--                                <div class="rlr-authforms__form">--}}
{{--                                    <div class="rlr-authforms__inputgroup"><label--}}
{{--                                            class="rlr-form-label rlr-form-label--light required"> Email </label> <input--}}
{{--                                            type="text" autocomplete="off" name="email" class="form-control form-control--light"/>--}}
{{--                                    </div>--}}
{{--                                    <div class="rlr-authforms__inputgroup"><label--}}
{{--                                            class="rlr-form-label rlr-form-label--light required"> Password </label>--}}
{{--                                        <input type="password" name="password" autocomplete="off"--}}
{{--                                               class="form-control form-control--light"/></div>--}}
{{--                                    <div class="rlr-authforms__forgotpassword">--}}
{{--                                        <div class="form-check-inline">--}}
{{--                                            <input class="form-check-input rlr-form-check-input" id="rlr-checkbox-1"--}}
{{--                                                   type="checkbox" value="defaultValue"/>--}}
{{--                                            <label--}}
{{--                                                class="rlr-form-label rlr-form-label--checkbox rlr-form-label--font-inherit rlr-form-label--bold"--}}
{{--                                                for="rlr-checkbox-1">Remember me on this device</label>--}}
{{--                                        </div>--}}
{{--                                        <a href="account-pages--forgot-password">Forgot password</a>--}}
{{--                                    </div>--}}
{{--                                    <button type="submit"--}}
{{--                                            class="btn mb-3 rlr-button rlr-button--fullwidth rlr-button--primary">Sign--}}
{{--                                        in--}}
{{--                                    </button>--}}
{{--                                    --}}{{--                                    <button type="button" class="btn mb-3 rlr-button rlr-button--fullwidth rlr-button--google">Sign in with Google</button>--}}
{{--                                </div>--}}
{{--                                <div class="rlr-authforms__notes">--}}
{{--                                    <p>Don’t have an account? <a href="{{ route('register') }}">Sign up</a></p>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </div>--}}
{{--    </main>--}}
{{--@endsection--}}


{{--@section("script")--}}

{{--@endsection--}}


@extends('front.layouts.app')

@section('contents')
    <section class="sign-upform-sec_1">
        <div class="container">
            @include('messages') <!-- Include this if you have a separate partial for messages -->

            <!-- Display success message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display error message -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="signup_form">
                        <!-- Optional social login buttons and separator -->
                        {{-- <div class="signupgoogle">
                            <button class="google-sign">
                                <i class="fa-brands fa-google"></i> Login with Google
                            </button>
                        </div>
                        <div class="line-container">
                            <p class="social-line">
                                <span>OR</span>
                            </p>
                        </div> --}}

                        <h2>Sign In</h2>
                        <form class="rlr-authforms" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="main_input-field">
                                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                                <div class="input_filled">
                                    <label for="email">Email</label>
                                    <input type="email" placeholder="someone@example.com" name="email" id="email"
                                           required>
                                </div>
                            </div>
                            <div class="main_input-field">
                                <div class="icon"><i class="fa-solid fa-lock"></i></div>
                                <div class="input_filled">
                                    <label for="password">Password</label>
                                    <input type="password" placeholder="some@pass#123" name="password"
                                           id="passwordField" required>
                                </div>
                                <div class="passicon">
                                    <button class="password toggle-btn" type="button" id="toggleBtn"><i
                                            class="fa-solid fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="side_linkee">
                                <a href="{{ url('forgetpassword/') }}">Forget Password</a>
                            </div>
                            <div class="main_sign_btn">
                                <button type="submit" class="signup_btnn">
                                    Sign In
                                </button>
                            </div>
                            <div class="last_line">
                                <p>Don't have an Account? <a href="{{ url('register/') }}"> Sign Up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




