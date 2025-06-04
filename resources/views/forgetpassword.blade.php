@extends('front.layouts.app')

@section('contents')
    <section class="sign-upform-sec_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="signup_form">
                        <!-- <div class="signupgoogle">
                            <button class="google-sign">
                                <i class="fa-brands fa-google"></i> Login with Google
                            </button>
                            </div> -->
                        <!-- <div class="line-container">
                            <p class="social-line">
                                <span>OR</span>
                            </p>
                        </div> -->
                        <h2>Forgot Password?</h2>
                        <p>Please enter your email address and we'll send you <br>a link to reset your password.</p>
                        <form action="">
                            <div class="main_input-field">
                                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                                <div class="input_filled">
                                    <label for="email">Email</label>
                                    <input type="email" placeholder="someone@example.com" name="email" id="email"
                                           required>
                                </div>
                            </div>

                            <div class="main_sign_btn mt-4">
                                <button type="submit" class="signup_btnn">
                                    Send Mail
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
