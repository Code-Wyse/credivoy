@extends('front.layouts.app')

@section('contents')
    <section class="sign-upform-sec_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="signup_form">
                        <div class="signupgoogle">
                            <button class="google-sign">
                                <i class="fa-brands fa-google"></i> Login with Google
                            </button>
                        </div>
                        <div class="line-container">
                            <p class="social-line">
                                <span>OR</span>
                            </p>
                        </div>
                        <h2>Sign In</h2>
                        <form action="">
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
                                    <label for="email">Password</label>
                                    <input type="password" placeholder="some@pass#123" name="password"
                                           id="passwordField" required>
                                </div>
                                <div class="passicon">
                                    <button class="password toggle-btn" type="button" id="toggleBtn"><i
                                                class="fa-solid fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="side_linkee">
                                <a href="forgetpassword/">Forget Password</a>
                            </div>
                            <div class="main_sign_btn">
                                <button type="submit" class="signup_btnn">
                                    Sign In
                                </button>
                            </div>
                            <div class="last_line">
                                <p>Don't have an Account? <a href="createAccount/"> Sign Up</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
