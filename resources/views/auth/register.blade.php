
@extends('front.layouts.app')

@section('contents')
    <section class="sign-upform-sec_1">
        <div class="container">
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
                        </div> --}}
                        {{-- <div class="line-container">
                            <p class="social-line">
                                <span>OR</span>
                            </p>
                        </div> --}}

                        <h2>Sign Up</h2>
                        <p>Create an account to easily use [Brand Name] services.</p>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="create_row_fieldds">
                                <div class="main_input-field">
                                    <div class="icon"><i class="fa-solid fa-user"></i></div>
                                    <div class="input_filled">
                                        <label for="first_name">First Name</label>
                                        <input type="text" placeholder="John" name="first_name" id="first_name" required>
                                    </div>
                                </div>
                                <div class="main_input-field">
                                    <div class="icon"><i class="fa-solid fa-user"></i></div>
                                    <div class="input_filled">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" placeholder="Doe" name="last_name" id="last_name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="main_input-field">
                                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                                <div class="input_filled">
                                    <label for="email">Email</label>
                                    <input type="email" placeholder="someone@example.com" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="main_input-field">
                                <div class="icon"><i class="fa-solid fa-address-card"></i></div>
                                <div class="input_filled">
                                    <label for="cnic">National Identity Card</label>
                                    <input type="number" placeholder="33331-5897158-9" name="cnic" id="cnic" required>
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
                                    <label for="password">Password</label>
                                    <input type="password" placeholder="some@pass#123" name="password" id="passwordField" required>
                                </div>
                                <div class="passicon">
                                    <button class="password toggle-btn" type="button" id="toggleBtn"><i class="fa-solid fa-eye"></i></button>
                                </div>
                            </div>
                            <div class="side_linkee2">
                                <input type="checkbox" required name="checkbox" id="checkbox">
                                <label for="checkbox">By creating an account you agree to our Terms & Conditions</label>
                            </div>
                            <div class="main_sign_btn mt-4">
                                <button type="submit" class="signup_btnn">
                                    Sign Up
                                </button>
                            </div>
                            <div class="last_line">
                                <p>Already have an Account? <a href="{{ url('login') }}"> Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

