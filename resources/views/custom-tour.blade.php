@extends('front.layouts.app')

@section('contents')
    <section class="custom-tour-req-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main_banner_img">
                        <img src="assets/images/request-custom-tour.jpg" alt="">
                        <div class="main_banner_content">
                            <h2>Request a Custom Tour</h2>
                            <ul>
                                <li>
                                    <div class="step">
                                        <div class="logo"><i class="fa-solid fa-rectangle-list"></i></div>
                                        <h6>Step 1</h6>
                                        <p>Fill-out the form</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="step">
                                        <div class="logo"><i class="fa-brands fa-rocketchat"></i></div>
                                        <h6>Step 2</h6>
                                        <p>Our travel expert gets back to you</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="step">
                                        <div class="logo"><i class="fa-regular fa-credit-card"></i></div>
                                        <h6>Step 3</h6>
                                        <p>Get your plan and book</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="custom-tour-req-sec-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="custom-care">
                        <h4>Not sure of your plans?</h4>
                        <p>Consult our travel experts and build your tour.</p>
                        <a href="tel:+ +92 00000000"><button type="button" class="btn btn-secondary btn-block">
                            <i class="fas fa-phone-alt"></i> Call ( +92 00000000)
                        </button></a>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tour-leadss-body">
                        <h4>Share Detail</h4>
                        <p>Let our tour experts build a tour for you.</p>
                        @if(session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                        <form action="/submit-travel-request" method="POST">
                            @csrf
                            <div class="input-fields">
                                <label for="selectField">Where do you want to go?</label>
                                <select id="selectField" name="selectField">
                                    <option value="azad_kashmir">Azad Kashmir</option>
                                    <option value="hunza">Hunza</option>
                                    <option value="swat">Swat</option>
                                    <option value="murree">Murree</option>
                                    <option value="skardu">Skardu</option>
                                    <option value="naran_kaghan">Naran Kaghan</option>
                                    <option value="neelum_valley">Neelum Valley</option>
                                    <option value="gilgit">Gilgit</option>
                                    <option value="chitral">Chitral</option>
                                    <option value="fairy_meadows">Fairy Meadows</option>
                                </select>
                            </div>
                            <div class="input-fields">
                                <label for="datepicker">Select a Date:</label>
                                <input type="date" id="datepicker" name="datepicker">
                            </div>
                            <h4>Contact Details</h4>
                            <div class="main_fields">
                                <div class="input-fields">
                                    <label for="name">First Name</label>
                                    <input type="text" name="name" placeholder="Enter first name" required>
                                </div>
                                <div class="input-fields">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" placeholder="Enter last name" required>
                                </div>
                            </div>
                            <div class="main_fields">
                                <div class="input-fields">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" name="phone" placeholder="3XZ YYYYYYY" required>
                                </div>
                                <div class="input-fields">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" placeholder="example@domain.com" required>
                                </div>
                            </div>
                            <div class="input-fields">
                                <label for="add-requirememt">Additional Requirement</label>
                                <textarea name="add-requirememt" id="add-requirememt"
                                          placeholder="Enter your requirements"></textarea>
                            </div>
                            <div class="input-fields">
                                <input type="submit" value="Request Plan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
