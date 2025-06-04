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
                        <h2>Sign Up</h2>
                        <p>Create an account to easily use [Brand Name] services.</p>
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
                                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                                <div class="input_filled">
                                    <label for="phone">Phone</label>
                                    <input type="phone" placeholder="3XYZ YYYYY" name="phone" id="phone" required>
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
                            <div class="side_linkee2">
                                <input type="checkbox" required name="checkboc" id="checkbox">
                                <label for="checkbox">By creating an account you agree to our Terms & Conditions</label>
                            </div>
                            <div class="main_sign_btn mt-4">
                                <button type="submit" class="signup_btnn">
                                    Sign In
                                </button>
                            </div>
                            <div class="last_line">
                                <p>Don't have an Account? <a href=""> Sign Up</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
