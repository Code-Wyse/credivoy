@extends("front.layouts.app")

@section("header")

<link rel="stylesheet" href="{{asset("styles/plugins.css")}}">
<link rel="stylesheet" href="{{asset("styles/main.css")}}">
<style>
    .image-input {
  text-aling: center;
}
.image-input input {
  display: none;
}
.image-input label {
  display: block;
  color: #FFF;
  background: #000;
  padding: 0.3rem 0.6rem;
  font-size: 115%;
  cursor: pointer;
  border-radius: 10px;
}
.image-input label i {
  font-size: 125%;
  margin-right: 0.3rem;
}
.image-input label:hover i {
  animation: shake 0.35s;
}
.image-input img {
  max-width: 175px;
  display: none;
}
.image-input span {
  display: none;
  text-align: center;
  cursor: pointer;
}
.main_input-field.imagee-field.bg-white.w-auto {
    max-width: 520px;
    border: 0px;
}
section{
    background: transparent
}

</style>
@endsection


@section("contents")
<section class="sign-upform-sec_1">
    <div class="container-fluid">
        <div class="row">
            @include("user.includes.user-sidebar")

            <div class="content col-lg-9 col-xs-12">
                <div class="signup_form w-full">

                    <h2>Account Details</h2>
                    <p>Create an account to easily use [Brand Name] services.</p>
                    <form action="{{ route('dashboard.accounts-details') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="main_input-field imagee-field bg-white w-auto">
                            <div class="image-input">
                                <input type="file" accept="image/*" id="imageInput" name="avatar" >
                                <label for="imageInput" class="image-button"><i class="far fa-image"></i> Choose image</label>
                                <img src="" alt="" class="image-preview" />
                                <span class="change-image">Choose different image</span>
                            </div>
                        </div>
                        <div class="create_row_fieldds">
                            <div class="main_input-field">
                                <div class="icon"><i class="fa-solid fa-user"></i></div>
                                <div class="input_filled">
                                    <label for="first_name">First Name</label>
                                    <input type="text" placeholder="John" name="first_name" id="first_name" required value="{{ old('first_name',auth()->user()->first_name) }}" >
                                </div>
                            </div>
                            <div class="main_input-field">
                                <div class="icon"><i class="fa-solid fa-user"></i></div>
                                <div class="input_filled">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" placeholder="Doe" name="last_name" id="last_name" required value="{{ old('last_name',auth()->user()->last_name) }}" >
                                </div>
                            </div>
                        </div>
                        <div class="create_row_fieldds">

                        <div class="main_input-field">
                            <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                            <div class="input_filled">
                                <label for="email">Email</label>
                                <input type="email" placeholder="someone@example.com" name="email" id="email" required value="{{ old('email',auth()->user()->email) }}" >
                            </div>
                        </div>
                        <div class="main_input-field">
                            <div class="icon"><i class="fa-solid fa-address-card"></i></div>
                            <div class="input_filled">
                                <label for="cnic">National Identity Card</label>
                                <input type="number" placeholder="33331-5897158-9" name="cnic" id="cnic" required value="{{ old('cnic',auth()->user()->cnic) }}" >
                            </div>
                        </div>
                        </div>
                        <div class="create_row_fieldds">

                        <div class="main_input-field">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="input_filled">
                                <label for="phone">Phone</label>
                                <input type="tel" placeholder="3XYZ YYYYY" name="phone" id="phone" required value="{{ old('phone',auth()->user()->phone) }}" >
                            </div>
                        </div>
                        <div class="main_input-field">
                            <div class="icon"><i class="fa-solid fa-lock"></i></div>
                            <div class="input_filled">
                                <label for="email">Password</label>
                                <input type="password" placeholder="some@pass#123" name="password" id="passwordField"
                                    >
                            </div>
                            <div class="passicon">
                                <button class="password toggle-btn" type="button" id="toggleBtn"><i
                                        class="fa-solid fa-eye"></i></button>
                            </div>
                        </div>
                        </div>
                        <div class="main_sign_btn mt-4">
                            <button type="submit" class="signup_btnn">
                                Update Details
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
