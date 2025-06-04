@extends('front.layouts.app')


@section('contents')

<section class="home_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full searchbar-hidden">
                    <div class="search_type navitems">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true"><img
                                        src="assets/images/tour-icon.svg" class="mr-2"> Tours</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">
                                    <img src="assets/images/hotel-iconn.svg" class="mr-2"> Hotels</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="transport-tab" data-bs-toggle="tab"
                                    data-bs-target="#transport-tab-pane" type="button" role="tab"
                                    aria-controls="transport-tab-pane" aria-selected="false">
                                    <img src="assets/images/carrr-icon.svg" width="30px" height="30px"  class="mr-2"> Vehicles</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="flight_containerrr">
                                <form action="{{ route('front.tours.index') }}" method="get">
                                    <input type="hidden" name="destination" value="{{ $allDestinations[0]->name }}">
                                    <div class="tour_search_bar">
                                        <div class="tour_box" id="tourBox">
                                            <span class="label">Location/ Tour</span>
                                            <div class="value">{{ $allDestinations[0]->name }}</div>
                                            <span class="subvalue">&nbsp;</span>
                                            <div class="locationsearchh d-none">
                                                <div class="input_text">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                    <input type="text" autocomplete="off" placeholder="Type to search">
                                                </div>
                                                <div class="location_listtt">
                                                    @foreach($allDestinations as $destination)
                                                    <div class="locations">
                                                        <div class="location icons">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                        </div>
                                                        <div class="name">{{ $destination->name }}</div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn-container">
                                        <button type="submit" class="search-btn">
                                            Search
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="flight_containerrr">
                                <form action="{{ route('hotels.list') }}" method="get">
                                    <input type="hidden" name="check_in_date" id="check_in_date" />
                                    <input type="hidden" name="check_out_date" id="check_out_date" />
                                    <div class="flight_search_baar">
                                        <div class="box location from" id="from">
                                            <span class="from">City/Hotel/Resort/Area</span>
                                            <div class="values">Nathia Gali</div>
                                            <div class="subvalues">Pakistan</div>
                                            <div class="flight_from_suggestionss non_show">
                                                <div class="input_text">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                    <input type="text" autocomplete="off" placeholder="Type to search"
                                                        value="Nathia Gali" name="query">
                                                </div>
                                             
                                            </div>
                                        </div>

                                        <div class="box location dateDepart" id="Depart">
                                            <span class="depDate">CHECK IN</span>
                                            <div class="value" id="selectedDepartureDate">27 <span>May '24</span></div>
                                            {{-- <span class="sub-value">Friday</span> --}}
                                            <div class="flight_from_suggestionss non_show">
                                                <div class="input-group date">
                                                    <div class="datepicker">
                                                        <div class="d-flex">
                                                            <div id="departureCalendar" class="border rounded"
                                                                data-coreui-show-week-number="true"
                                                                data-coreui-show-adjacement-days="true"
                                                                data-coreui-start-date="true"
                                                                data-coreui-end-date="true" data-coreui-calendars="2"
                                                                data-coreui-range="true"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box location dateDepart" id="Arrival">
                                            <span class="depDate">CHECK OUT</span>
                                            <div class="value" id="selectedArrivalDate">24 <span>May '24</span></div>
                                            {{-- <span class="sub-value">Friday</span> --}}
                                            <div class="flight_from_suggestionss non_show">
                                                <div class="input-group date">
                                                    <div class="datepicker">
                                                        <div class="d-flex">
                                                            <div id="arrivalCalendar" class="border rounded"
                                                                data-coreui-show-week-number="true"
                                                                data-coreui-show-adjacement-days="true"
                                                                data-coreui-start-date="2021/08/02"
                                                                data-coreui-end-date="2021/08/12"
                                                                data-coreui-calendars="2" data-coreui-range="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      


                                    </div>
                                   

                                    <div class="search-btn-container">
                                        <button type="submit" class="search-btn">

                                            Search
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="transport-tab-pane" role="tabpanel" aria-labelledby="transport-tab"
                            tabindex="0">
                            <div class="flight_containerrr">
                                <form action="{{ route('hotels.list') }}" method="get">
                                    <input type="hidden" name="check_in_date" id="pickup_date" />
                                    <input type="hidden" name="check_out_date" id="dropof_date" />
                                    <div class="flight_search_baar">
                                        <div class="box location from" id="from">
                                            <span class="from">Pick-up Locations <br> (From)</span>
                                            <div class="values">KHI Airport</div>
                                            <div class="subvalues">Pakistan</div>
                                            <div class="flight_from_suggestionss non_show" style="display: none;">
                                                <div class="input_text">
                                                    <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                                    </svg>
                                                    <input type="text" autocomplete="off" placeholder="Type to search" value="Nathia Gali" name="query">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="box location to" id="to">
                                            <span class="to">Drop-of Location <br> (To)</span>
                                            <div class="values">KHI Airport</div>
                                            <div class="subvalues">Pakistan</div>
                                            <div class="flight_to_suggestionss non_show" style="display: none;">
                                                <div class="input_text">
                                                    <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                                    </svg>
                                                    <input type="text" autocomplete="off" placeholder="Type to search" value="Nathia Gali" name="query">
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="box location dateDepart new_boxx" >
                                            <div class="inner-inncer-select-s" id="Depart2">
                                                <span class="depDate">Pick-up Date</span>
                                                <div class="value" id="selectedDepartureDate2">27 <span>May '24</span></div>
                                                <span class="sub-value">Friday</span>
                                                <div class="flight_from_suggestionss non_show" style="display: none;">
                                                    <div class="input-group date">
                                                        <div class="datepicker">
                                                            <div class="d-flex">
                                                                <div id="departureCalendar2" class="border rounded"
                                                                    data-coreui-show-week-number="true"
                                                                    data-coreui-show-adjacement-days="true"
                                                                    data-coreui-start-date="true"
                                                                    data-coreui-end-date="true" data-coreui-calendars="2"
                                                                    data-coreui-range="true"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add Pickup Timing Section -->
                                            <div class="pickup-timing">
                                                <label for="pickupTime">Pickup Time:</label>
                                                <select id="pickupTime" name="pickupTime">
                                                    <option value="08:00">08:00 AM</option>
                                                    <option value="09:00">09:00 AM</option>
                                                    <option value="10:00">10:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="12:00">12:00 PM</option>
                                                    <option value="13:00">01:00 PM</option>
                                                    <option value="14:00">02:00 PM</option>
                                                    <option value="15:00">03:00 PM</option>
                                                    <option value="16:00">04:00 PM</option>
                                                    <option value="17:00">05:00 PM</option>
                                                    <option value="18:00">06:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="box location dateDepart new_boxx">
                                            <div class="inner-inncer-select-s" id="Arrival2">
                                            <span class="depDate">Drop-of Location</span>
                                            <div class="value" id="selectedArrivalDate2">24 <span>May '24</span></div>
                                            <span class="sub-value2" id="dropOf">Friday</span>
                                            
                                            <div class="flight_from_suggestionss non_show" style="display: none;"> <!-- Initially hidden -->
                                                <div class="input-group date">
                                                    <div class="datepicker">
                                                        <div class="d-flex">
                                                            <div id="arrivalCalendar2" class="border rounded"
                                                            data-coreui-show-week-number="true"
                                                            data-coreui-show-adjacement-days="true"
                                                            data-coreui-start-date="2021/08/02"
                                                            data-coreui-end-date="2021/08/12"
                                                            data-coreui-calendars="2" data-coreui-range="true">
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            
                                            <!-- Drop Off Timing Section -->
                                            <div class="dropoff-timing">
                                                <label for="dropoffTime">Drop Off Time:</label>
                                                <select id="dropoffTime" name="dropoffTime">
                                                    <option value="08:00">08:00 AM</option>
                                                    <option value="09:00">09:00 AM</option>
                                                    <option value="10:00">10:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="12:00">12:00 PM</option>
                                                    <option value="13:00">01:00 PM</option>
                                                    <option value="14:00">02:00 PM</option>
                                                    <option value="15:00">03:00 PM</option>
                                                    <option value="16:00">04:00 PM</option>
                                                    <option value="17:00">05:00 PM</option>
                                                    <option value="18:00">06:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn-container">
                                        <button type="submit" class="search-btn">

                                            Search
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="custom-request">
                    <div class="custom-tour-wrapperr">
                        <div class="tour-request">
                            <p>Need a Customized Tour?</p>
                            <a href="/custom-tour">
                                <button type="button" class="btn request-tour btn-secondary">
                                    Request Now
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="placess_to_go">
    <div class="container">
        <div class="row align-items-center main_contentopacity">
            <div class="col-md-4">
                <div class="placesTO_go_headd">
                    <h3>Places to go</h3>
                    <h2>Perfect Domestic Destinations</h2>
                    <p>For local and foreign travel enthusiasts, we offer luxurious getaways to more than 10 scenic
                        destinations in Pakistan including Hunza, Skardu, Swat Valley, Fairy Meadows and
                        Balochistan!
                    </p>

                </div>
            </div>
            <div class="col-md-8">
                <div class="main_placess_slider">
                    <ul class="discount_sliders22">
                        @foreach($destinations as $destination)
                        <li>
                            <a href="{{ route('destinations.show',$destination->id) }}">
                                @if($destination->picture)
                                <img src="{{ returnMedia($destination->picture->media_file) }}" alt="">
                                @else
                                <img src="https://picsum.photos/200" alt="">
                                @endif
                                <div class="place_go_para">
                                    <h4>{{ $destination->name }}</h4>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- yeh section comment hai  --}}


<section class="sec_2 d-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hot_dealsss">
                    <h4>Our Services</h4>
                    <div class="main_list mt-5 d-none">
                        <ul class="hotDeals">
                            <li>
                                <div class="promotion-content">
                                    <div class="img-placeholder">
                                        <img src="assets/images/deals1.jpg" alt="">
                                    </div>
                                    <div class="text-wraper_deals">
                                        <h6>On Selected Domestic Hotel Bookings, Routes, and Airlines</h6>
                                        <p>On base fare and room rent, for Bank of Punjab credit cards</p>
                                    </div>
                                    <div class="promo_code">
                                        <div class="code_wraper">
                                            <div class="code-wrapper">
                                                <svg width="20" height="20" viewBox="0 0 21 26" fill="#E5F5FD"
                                                    stroke="#1C3C6B" xmlns="http://www.w3.org/2000/svg"
                                                    style="vertical-align: top;">
                                                    <path d="M15.8362 5.21078L15.8357 5.21023C13.6058 2.57906 11.401 0.861815 11.2792
                0.766928L11.2775 0.765636L11.2775 0.765631L11.2755 0.764027C10.4592 0.134936
                9.24 0.698113 9.24 1.75069V5.05069C9.24 6.22609 7.63984 6.67188 7.03329
                5.62104L7.03294 5.62045C6.589 4.85377 5.5223 4.78389 4.9675 5.44705L4.96623
                5.44857C2.64472 8.24602 0.5 11.8524 0.5 15.6257C0.5 21.0784 4.99087 25.5007
                10.5 25.5007C16.0091 25.5007 20.5 21.0784 20.5 15.6257C20.5 11.7546 18.2419
                8.05775 15.8362 5.21078ZM8.0458 19.1506L8.04458 19.1521C7.95974 19.2607
                7.79319 19.2829 7.68013 19.1956L7.67736 19.1935C7.56822 19.1104 7.55032
                18.9566 7.63326 18.852L7.63419 18.8508L12.9542 12.1008L12.9554
                12.0992C13.0403 11.9907 13.2068 11.9685 13.3199 12.0558L13.3226
                12.0579C13.4318 12.141 13.4497 12.2948 13.3667 12.3994L13.3658
                12.4006L8.0458 19.1506ZM6.82 13.0007C6.82 12.4581 7.27388 12.0007 7.84
                12.0007C8.40715 12.0007 8.86 12.4544 8.86 13.0007C8.86 13.5433 8.40612
                14.0007 7.84 14.0007C7.27285 14.0007 6.82 13.547 6.82 13.0007ZM13.16
                19.2507C12.5929 19.2507 12.14 18.797 12.14 18.2507C12.14 17.7081 12.5939
                17.2507 13.16 17.2507C13.7271 17.2507 14.18 17.7044 14.18 18.2507C14.18
                18.797 13.7271 19.2507 13.16 19.2507Z"></path>
                                                </svg>
                                                <span class="code-tag">MCARD24</span>
                                            </div>

                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="/discountpage" class="brand-tag"><i class="fas fa-arrow-up"></i>
                                                Learn
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="promotion-content">
                                    <div class="img-placeholder">
                                        <img src="assets/images/deals1.jpg" alt="">
                                    </div>
                                    <div class="text-wraper_deals">
                                        <h6>On Selected Domestic Hotel Bookings, Routes, and Airlines</h6>
                                        <p>On base fare and room rent, for Bank of Punjab credit cards</p>
                                    </div>
                                    <div class="promo_code">
                                        <div class="code_wraper">
                                            <div class="code-wrapper">
                                                <svg width="20" height="20" viewBox="0 0 21 26" fill="#E5F5FD"
                                                    stroke="#1C3C6B" xmlns="http://www.w3.org/2000/svg"
                                                    style="vertical-align: top;">
                                                    <path d="M15.8362 5.21078L15.8357 5.21023C13.6058 2.57906 11.401 0.861815 11.2792
                0.766928L11.2775 0.765636L11.2775 0.765631L11.2755 0.764027C10.4592 0.134936
                9.24 0.698113 9.24 1.75069V5.05069C9.24 6.22609 7.63984 6.67188 7.03329
                5.62104L7.03294 5.62045C6.589 4.85377 5.5223 4.78389 4.9675 5.44705L4.96623
                5.44857C2.64472 8.24602 0.5 11.8524 0.5 15.6257C0.5 21.0784 4.99087 25.5007
                10.5 25.5007C16.0091 25.5007 20.5 21.0784 20.5 15.6257C20.5 11.7546 18.2419
                8.05775 15.8362 5.21078ZM8.0458 19.1506L8.04458 19.1521C7.95974 19.2607
                7.79319 19.2829 7.68013 19.1956L7.67736 19.1935C7.56822 19.1104 7.55032
                18.9566 7.63326 18.852L7.63419 18.8508L12.9542 12.1008L12.9554
                12.0992C13.0403 11.9907 13.2068 11.9685 13.3199 12.0558L13.3226
                12.0579C13.4318 12.141 13.4497 12.2948 13.3667 12.3994L13.3658
                12.4006L8.0458 19.1506ZM6.82 13.0007C6.82 12.4581 7.27388 12.0007 7.84
                12.0007C8.40715 12.0007 8.86 12.4544 8.86 13.0007C8.86 13.5433 8.40612
                14.0007 7.84 14.0007C7.27285 14.0007 6.82 13.547 6.82 13.0007ZM13.16
                19.2507C12.5929 19.2507 12.14 18.797 12.14 18.2507C12.14 17.7081 12.5939
                17.2507 13.16 17.2507C13.7271 17.2507 14.18 17.7044 14.18 18.2507C14.18
                18.797 13.7271 19.2507 13.16 19.2507Z"></path>
                                                </svg>
                                                <span class="code-tag">MCARD24</span>
                                            </div>

                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="/discountpage" class="brand-tag"><i class="fas fa-arrow-up"></i>
                                                Learn
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="promotion-content">
                                    <div class="img-placeholder">
                                        <img src="assets/images/deals1.jpg" alt="">
                                    </div>
                                    <div class="text-wraper_deals">
                                        <h6>On Selected Domestic Hotel Bookings, Routes, and Airlines</h6>
                                        <p>On base fare and room rent, for Bank of Punjab credit cards</p>
                                    </div>
                                    <div class="promo_code">
                                        <div class="code_wraper">
                                            <div class="code-wrapper">
                                                <svg width="20" height="20" viewBox="0 0 21 26" fill="#E5F5FD"
                                                    stroke="#1C3C6B" xmlns="http://www.w3.org/2000/svg"
                                                    style="vertical-align: top;">
                                                    <path d="M15.8362 5.21078L15.8357 5.21023C13.6058 2.57906 11.401 0.861815 11.2792
                0.766928L11.2775 0.765636L11.2775 0.765631L11.2755 0.764027C10.4592 0.134936
                9.24 0.698113 9.24 1.75069V5.05069C9.24 6.22609 7.63984 6.67188 7.03329
                5.62104L7.03294 5.62045C6.589 4.85377 5.5223 4.78389 4.9675 5.44705L4.96623
                5.44857C2.64472 8.24602 0.5 11.8524 0.5 15.6257C0.5 21.0784 4.99087 25.5007
                10.5 25.5007C16.0091 25.5007 20.5 21.0784 20.5 15.6257C20.5 11.7546 18.2419
                8.05775 15.8362 5.21078ZM8.0458 19.1506L8.04458 19.1521C7.95974 19.2607
                7.79319 19.2829 7.68013 19.1956L7.67736 19.1935C7.56822 19.1104 7.55032
                18.9566 7.63326 18.852L7.63419 18.8508L12.9542 12.1008L12.9554
                12.0992C13.0403 11.9907 13.2068 11.9685 13.3199 12.0558L13.3226
                12.0579C13.4318 12.141 13.4497 12.2948 13.3667 12.3994L13.3658
                12.4006L8.0458 19.1506ZM6.82 13.0007C6.82 12.4581 7.27388 12.0007 7.84
                12.0007C8.40715 12.0007 8.86 12.4544 8.86 13.0007C8.86 13.5433 8.40612
                14.0007 7.84 14.0007C7.27285 14.0007 6.82 13.547 6.82 13.0007ZM13.16
                19.2507C12.5929 19.2507 12.14 18.797 12.14 18.2507C12.14 17.7081 12.5939
                17.2507 13.16 17.2507C13.7271 17.2507 14.18 17.7044 14.18 18.2507C14.18
                18.797 13.7271 19.2507 13.16 19.2507Z"></path>
                                                </svg>
                                                <span class="code-tag">MCARD24</span>
                                            </div>

                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="/discountpage" class="brand-tag"><i class="fas fa-arrow-up"></i>
                                                Learn
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="promotion-content">
                                    <div class="img-placeholder">
                                        <img src="assets/images/deals1.jpg" alt="">
                                    </div>
                                    <div class="text-wraper_deals">
                                        <h6>On Selected Domestic Hotel Bookings, Routes, and Airlines</h6>
                                        <p>On base fare and room rent, for Bank of Punjab credit cards</p>
                                    </div>
                                    <div class="promo_code">
                                        <div class="code_wraper">
                                            <div class="code-wrapper">
                                                <svg width="20" height="20" viewBox="0 0 21 26" fill="#E5F5FD"
                                                    stroke="#1C3C6B" xmlns="http://www.w3.org/2000/svg"
                                                    style="vertical-align: top;">
                                                    <path d="M15.8362 5.21078L15.8357 5.21023C13.6058 2.57906 11.401 0.861815 11.2792
                0.766928L11.2775 0.765636L11.2775 0.765631L11.2755 0.764027C10.4592 0.134936
                9.24 0.698113 9.24 1.75069V5.05069C9.24 6.22609 7.63984 6.67188 7.03329
                5.62104L7.03294 5.62045C6.589 4.85377 5.5223 4.78389 4.9675 5.44705L4.96623
                5.44857C2.64472 8.24602 0.5 11.8524 0.5 15.6257C0.5 21.0784 4.99087 25.5007
                10.5 25.5007C16.0091 25.5007 20.5 21.0784 20.5 15.6257C20.5 11.7546 18.2419
                8.05775 15.8362 5.21078ZM8.0458 19.1506L8.04458 19.1521C7.95974 19.2607
                7.79319 19.2829 7.68013 19.1956L7.67736 19.1935C7.56822 19.1104 7.55032
                18.9566 7.63326 18.852L7.63419 18.8508L12.9542 12.1008L12.9554
                12.0992C13.0403 11.9907 13.2068 11.9685 13.3199 12.0558L13.3226
                12.0579C13.4318 12.141 13.4497 12.2948 13.3667 12.3994L13.3658
                12.4006L8.0458 19.1506ZM6.82 13.0007C6.82 12.4581 7.27388 12.0007 7.84
                12.0007C8.40715 12.0007 8.86 12.4544 8.86 13.0007C8.86 13.5433 8.40612
                14.0007 7.84 14.0007C7.27285 14.0007 6.82 13.547 6.82 13.0007ZM13.16
                19.2507C12.5929 19.2507 12.14 18.797 12.14 18.2507C12.14 17.7081 12.5939
                17.2507 13.16 17.2507C13.7271 17.2507 14.18 17.7044 14.18 18.2507C14.18
                18.797 13.7271 19.2507 13.16 19.2507Z"></path>
                                                </svg>
                                                <span class="code-tag">MCARD24</span>
                                            </div>

                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="/discountpage" class="brand-tag"><i class="fas fa-arrow-up"></i>
                                                Learn
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="promotion-content">
                                    <div class="img-placeholder">
                                        <img src="assets/images/deals1.jpg" alt="">
                                    </div>
                                    <div class="text-wraper_deals">
                                        <h6>On Selected Domestic Hotel Bookings, Routes, and Airlines</h6>
                                        <p>On base fare and room rent, for Bank of Punjab credit cards</p>
                                    </div>
                                    <div class="promo_code">
                                        <div class="code_wraper">
                                            <div class="code-wrapper">
                                                <svg width="20" height="20" viewBox="0 0 21 26" fill="#E5F5FD"
                                                    stroke="#1C3C6B" xmlns="http://www.w3.org/2000/svg"
                                                    style="vertical-align: top;">
                                                    <path d="M15.8362 5.21078L15.8357 5.21023C13.6058 2.57906 11.401 0.861815 11.2792
                0.766928L11.2775 0.765636L11.2775 0.765631L11.2755 0.764027C10.4592 0.134936
                9.24 0.698113 9.24 1.75069V5.05069C9.24 6.22609 7.63984 6.67188 7.03329
                5.62104L7.03294 5.62045C6.589 4.85377 5.5223 4.78389 4.9675 5.44705L4.96623
                5.44857C2.64472 8.24602 0.5 11.8524 0.5 15.6257C0.5 21.0784 4.99087 25.5007
                10.5 25.5007C16.0091 25.5007 20.5 21.0784 20.5 15.6257C20.5 11.7546 18.2419
                8.05775 15.8362 5.21078ZM8.0458 19.1506L8.04458 19.1521C7.95974 19.2607
                7.79319 19.2829 7.68013 19.1956L7.67736 19.1935C7.56822 19.1104 7.55032
                18.9566 7.63326 18.852L7.63419 18.8508L12.9542 12.1008L12.9554
                12.0992C13.0403 11.9907 13.2068 11.9685 13.3199 12.0558L13.3226
                12.0579C13.4318 12.141 13.4497 12.2948 13.3667 12.3994L13.3658
                12.4006L8.0458 19.1506ZM6.82 13.0007C6.82 12.4581 7.27388 12.0007 7.84
                12.0007C8.40715 12.0007 8.86 12.4544 8.86 13.0007C8.86 13.5433 8.40612
                14.0007 7.84 14.0007C7.27285 14.0007 6.82 13.547 6.82 13.0007ZM13.16
                19.2507C12.5929 19.2507 12.14 18.797 12.14 18.2507C12.14 17.7081 12.5939
                17.2507 13.16 17.2507C13.7271 17.2507 14.18 17.7044 14.18 18.2507C14.18
                18.797 13.7271 19.2507 13.16 19.2507Z"></path>
                                                </svg>
                                                <span class="code-tag">MCARD24</span>
                                            </div>

                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="/discountpage" class="brand-tag"><i class="fas fa-arrow-up"></i>
                                                Learn
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="dicount_slides mt-5 d-none">
                        <ul class="discount_sliders">
                            <li><a href="/tours?categories=9"><img src="assets/images/our_servicess1.svg" alt=""></a>
                            </li>
                            <li><a href="/tours?domestic=1"><img src="assets/images/our_servicess2.svg" alt=""></a></li>
                            <li><a href="/tours?domestic=0"><img src="assets/images/our_servicess3.svg" alt=""></a></li>
                            <li><a href="/tours?domestic=0"><img src="assets/images/our_servicess4.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- end yeh section comment hai  --}}

<section class="loyalty_sec_2 tourrrs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="lifesloong_rewars">
                    <div class="box_reward_outer tourrs">
                        <div class="box_rewards">
                            <h4>Start Saving Now. Unlock Lifelong <span>REWARDS</span></h4>
                            <div class="download_sec">
                                <div class="reward_offer_para">
                                    <p>Join and instantly receive member rewards, discounts on 3,000+ hotels
                                        worldwide,
                                        and more perks.</p>
                                    <a href="{{route("login")}}"><button class="join_now btn">Join Now - It's
                                            Free</button></a>
                                </div>
                                {{-- <div class="offer_dividerss">
                                        <span>or</span>
                                    </div> --}}
                                {{-- <div class="offer_qr_code">
                                        <img src="assets/images/qr_code.png" alt="">
                                        <p>Scan the QR code</p>
                                    </div> --}}
                            </div>
                        </div>
                        <div class="box_gift_img">
                            <img src="assets/images/gift.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="popular_domestic_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_sectionsss">
                    <p>What’s new in</p>
                    <h2>Popular Domestic Tours</h2>
                </div>
            </div>
        </div>
        <div class="row domestic-tours">
            @if(count($domesticTours) > 0 and $domesticTours[0])
            <div class="col-md-8 mob-none">
                <div class="main_boxx">
                    <div class="deomestic_img">
                        <img src="{{ returnMedia($domesticTours[0]->media[0]->media_file) }}" alt="">
                        @if($domesticTours[0]->is_featured)
                        <div class="fav features">
                            featured
                        </div>
                        @endif
                    </div>
                    <div class="demestic_content">
                        <div class="main_travel_company-des">
                            <div class="first-inner-company">
                                <div class="comp-logo">
                                    <img src="assets/images/circle-company.png" alt="">
                                </div>
                                <div class="comp-name">
                                    <h4>Siyah Travels</h4>
                                </div>
                            </div>
                            <div class="second-first-inner-company">
                                <div class="inner-company-rating">
                                    <h3><span><i class="fa-solid fa-star"></i></span> &nbsp; 5.0</h3>
                                </div>
                            </div>
                        </div>
                      
                        <div class="item_title">
                            <a style="color:none; text-decoration:none;"
                                href="{{ route('front.tours.show',$domesticTours[0]->slug) }}">
                                <h2>{{ $domesticTours[0]->title }}</h2>
                            </a>
                        </div>
                        <div class="meta_itemss hotels_sec large_boxmeta mt-2">
                            <div class="right_items">
                                <span class="dayss">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>{{$domesticTours[0]->duration}} days</span>
                                </span>
                                <span class="users"><i class="fa-regular fa-user"></i>
                                    <span>{{ $domesticTours[0]->group_size }}</span></span>
                            </div>
                            <div class="left_items">
                                <ul>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @while($i <= $domesticTours[0]->rating)
                                        <li><i class="fa-solid fa-star"></i></li>
                                        @php
                                        $i++;
                                        @endphp
                                        @endwhile
                                </ul>
                            </div>
                        </div>
                        <div class="item_locations">
                            <i class="fa-solid fa-location-dot"></i> <span>{{ $domesticTours[0]->location }}</span>
                        </div>
                        <div class="item_desc">
                            <p>{{ Str::limit($domesticTours[0]->overview, 100, '...') }}</p>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>{{ number_format($domesticTours[0]->price,2) }}</strong></h3>
                            </div>
                            <div class="item_explore">
                                <a href="{{ route('front.tours.show',$domesticTours[0]->slug) }}">Explore <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endif
            @foreach($domesticTours as $tour)
            @if($loop->first) @continue @endif
            <div class="col-md-4">
                <div class="main_boxx box2">
                    <div class="deomestic_img">
                        @if(isset($tour->media[0]))
                        <img src="{{ returnMedia($tour->media[0]->media_file) }}" alt="">
                        @else
                        <img src="https://picsum.photos/200" alt="">
                        @endif
                        @if($tour->is_featured)
                        <div class="fav features">
                            featured
                        </div>
                        @endif
                    </div>
                    <div class="demestic_content">
                        <div class="meta_itemss right_items main_travel_company-des">

                            <div class="first-inner-company">
                                <div class="comp-logo">
                                    <img src="assets/images/circle-company.png" alt="">
                                </div>
                                <div class="comp-name">
                                    <h4>Siyah Travels</h4>
                                </div>
                            </div>
                            <div class="second-first-inner-company">
                                <div class="inner-company-rating">
                                    <h3><span><i class="fa-solid fa-star"></i></span> &nbsp; 5.0</h3>
                                </div>
                            </div>

                        </div>
                        <div class="item_title">
                            <a href="{{ route('front.tours.show',$tour->slug) }}">
                                <h2>{{ $tour->title }}</h2>
                            </a>
                        </div>
                        <div class="item_locations">
                            <i class="fa-solid fa-location-dot"></i> <span>{{ $tour->location }}</span>
                        </div>
                        <div class="right_items hello">
                            <span class="dayss">
                                <i class="fa-regular fa-calendar"></i>
                                <span>{{ $tour->duration }} days</span>
                            </span>
                            <span class="users">
                                <i class="fa-regular fa-user"></i>
                                <span>{{ $tour->group_size }}</span>
                            </span>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>{{ number_format($tour->price) }}</strong></h3>

                            </div>
                            <div class="item_explore">
                                <a href="{{ route('front.tours.show',$tour->slug) }}">Explore <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="glob_exxplore_bt">
                    <a href="{{ route('front.tours.index',['domestic' => 1]) }}"><button class="explore_more">
                            Explore More<i class="fa-solid fa-arrow-right"></i>
                        </button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

{{-- yeh section comment hai  --}}
<section class="popular_domestic_sec d-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_sectionsss">
                    <p>What’s new in</p>
                    <h2>Popular International Tours</h2>
                </div>
            </div>
        </div>
        <div class="row domestic-tours">
            @if(isset($internationalTours[0]))
            <div class="col-md-8 mob-none">
                <div class="main_boxx">
                    <div class="deomestic_img">
                        @if(isset($internationalTours[0]->media[0]))
                        <img src="{{ returnMedia($internationalTours[0]->media[0]->media_file) }}" alt="">
                        @else
                        <img src="https://picsum.photos/200" alt="">
                        @endif
                        @if($internationalTours[0]->is_featured)
                        <div class="fav features">
                            featured
                        </div>
                        @endif
                    </div>
                    <div class="demestic_content">
                        <div class="meta_itemss hotels_sec large_boxmeta">
                            <div class="right_items">
                                <span class="dayss">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>{{ $internationalTours[0]->duration }} days</span>
                                </span>
                                <span class="users"><i class="fa-regular fa-user"></i>
                                    <span>{{ $internationalTours[0]->group_size }}</span></span>
                            </div>
                            <div class="left_items">
                                <ul>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @while($i <= $internationalTours[0]->rating)
                                        <li><i class="fa-solid fa-star"></i></li>
                                        @php
                                        $i++;
                                        @endphp
                                        @endwhile
                                </ul>
                            </div>
                        </div>
                        <div class="item_title">
                            <a href="{{ route('front.tours.show',$internationalTours[0]->slug) }}">
                                <h2>{{ $internationalTours[0]->title }}</h2>
                            </a>
                        </div>
                        <div class="item_locations">
                            <i class="fa-solid fa-location-dot"></i> <span>{{ $internationalTours[0]->location }}</span>
                        </div>
                        <div class="item_desc">
                            <p>{{ Str::limit($internationalTours[0]->overview, 100, '...') }}</p>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>{{ number_format($internationalTours[0]->price) }}</strong></h3>

                            </div>
                            <div class="item_explore">
                                <a href="{{ route('front.tours.show',$internationalTours[0]->slug) }}">Explore <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endif
            @foreach($internationalTours as $tour)
            @if($loop->first) @continue @endif
            <div class="col-md-4">
                <div class="main_boxx box2">
                    <div class="deomestic_img">
                        @if(isset($tour->media[0]))
                        <img src="{{ returnMedia($tour->media[0]->media_file) }}" alt="">
                        @else
                        <img src="https://picsum.photos/200" alt="">
                        @endif
                        @if($tour->is_featured)
                        <div class="fav features">
                            featured
                        </div>
                        @endif
                    </div>
                    <div class="demestic_content">
                        <div class="meta_itemss">
                            <div class="right_items">
                                <span class="dayss"><i class="fa-regular fa-calendar"></i>
                                    <span>{{ $tour->duration }} days</span>
                                </span>
                                <span class="users"><i class="fa-regular fa-user"></i>
                                    <span>{{ $tour->group_size }}</span></span>
                            </div>
                            <div class="left_items">
                                <ul>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @while($i <= $tour->rating)
                                        <li><i class="fa-solid fa-star"></i></li>
                                        @php
                                        $i++;
                                        @endphp
                                        @endwhile
                                </ul>
                            </div>
                        </div>
                        <div class="item_title">
                            <a href="{{ route('front.tours.show',$tour->slug) }}">
                                <h2>{{ $tour->title }}</h2>
                            </a>
                        </div>
                        <div class="item_locations">
                            <i class="fa-solid fa-location-dot"></i> <span>{{ $tour->location }}</span>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>{{ number_format($tour->price) }}</strong></h3>

                            </div>
                            <div class="item_explore">
                                <a href="{{ route('front.tours.show',$tour->slug) }}">Explore <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="glob_exxplore_bt">
                    <a href="{{ route('front.tours.index',['domestic' => 0]) }}"><button class="explore_more">
                            Explore More<i class="fa-solid fa-arrow-right"></i>
                        </button></a>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
</section>
{{-- yeh end section comment hai  --}}

{{-- yeh section comment hai  --}}

<section class="placess_to_go d-none">
    <div class="container">
        <div class="row align-items-center main_contentopacity">
            <div class="col-md-4">
                <div class="placesTO_go_headd">
                    <h3>Places to go</h3>
                    <h2>Perfect International Destinations</h2>
                    <p>We take huge pride in our expansion to international tours for our local tourists. We are now
                        offering tours to Azerbaijan, Turkey, Maldives and many other breathtaking destinations
                        across
                        the globe!</p>

                </div>
            </div>
            <div class="col-md-8">
                <div class="main_placess_slider">
                    <ul class="discount_sliders22">
                        @foreach($internationalDestinations as $destination)
                        <li>
                            <a href="{{ route('destinations.show',$destination->id) }}">
                                @if($destination->picture)
                                <img src="{{ returnMedia($destination->picture->media_file) }}" alt="">
                                @else
                                <img src="https://picsum.photos/200" alt="">
                                @endif
                                <div class="place_go_para">
                                    <h4>{{ $destination->name }}</h4>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- yeh end section comment hai  --}}

{{-- <section class="previous_tripss">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="previous_trip_images">
                    <ul class="previous">
                        <li><img src="assets/images/Malam-Jabba.jpg" alt=""></li>
                        <li><img src="assets/images/New-Year.jpg" alt=""></li>
                        <li><img src="assets/images/Sargodha-Boys.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="previous_sec_content">
                    <h3>Previous Trips</h3>
                    <h2>#niazitoursfamily</h2>
                </div>
            </div>
        </div>
    </div>
</section> --}}



<section class="popular_domestic_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_sectionsss">
                    <p>What’s new in</p>
                    <h2>Popular Hotels</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main_boxx">
                    <div class="deomestic_img">
                        <img src="{{ $hotels[0]->image }}" alt="">
                        <div class="fav features">
                            featured
                        </div>
                    </div>
                    <div class="demestic_content">
                        <div class="meta_itemss hotels_sec large_boxmeta">
                            <div class="rch_ratingcontainer" bis_skin_checked="1">
                                <div class="rating" bis_skin_checked="1">
                                    <span>{{ $hotels[0]->guest_rating }}</span>
                                    <span class="outof">/5</span>
                                </div>
                                <h4>{{ $hotels[0]->hotelComments()->count() }} reviews</h4>
                            </div>
                            <div class="left_items">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item_title">
                            <h2>{{ $hotels[0]->name }}</h2>
                        </div>
                        <div class="item_locations">
                            <i class="fa-solid fa-location-dot"></i> <span>{{ $hotels[0]->address }}</span>
                        </div>
                        <div class="item_desc">
                            {!! Str::limit($hotels[0]->description, 100, '...') !!}
                        </div>
                        @guest
                        {{-- <div class="add_sign_line">
                        <p><i class="fa-solid fa-key"></i> Sign in or register to enjoy special discounts</p>
                        </div> --}}
                        @endguest
                        <div class="item_bottom hotels_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>{{ $hotels[0]->roomTypes[0]->final_price }}</strong></h3>
                            </div>
                            <div class="item_explore">
                                <a href="{{ route('hotels.show',$hotels[0]->id) }}">Explore <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @foreach($hotels as $k=>$hotel)
            @if($k === 0)
            @continue
            @endif
            <div class="col-md-4">
                <div class="main_boxx box2">
                    <div class="deomestic_img">
                        <img src="{{ $hotel->image }}" alt="">
                        <div class="fav features">
                            featured
                        </div>
                    </div>
                    <div class="demestic_content">
                        <div class="meta_itemss hotels_sec">
                            <div class="rch_ratingcontainer" bis_skin_checked="1">
                                <div class="rating" bis_skin_checked="1">
                                    <span>{{ $hotel->guest_rating }}</span>
                                    <span class="outof">/5</span>
                                </div>
                                <h4>{{ $hotel->hotelComments()->count() }} reviews</h4>
                            </div>
                            <div class="left_items">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item_title">
                            <h2>{{ $hotel->name }}</h2>
                        </div>
                        <div class="item_locations">
                            <i class="fa-solid fa-location-dot"></i> <span>{{ $hotel->address }}</span>
                        </div>
                        @guest
                        <div class="add_sign_line">
                            <p><i class="fa-solid fa-key"></i> Sign in or register to enjoy special discounts</p>
                        </div>
                        @endguest
                        <div class="item_bottom hotels_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>{{ $hotel->roomTypes[0]->price_per_night }}</strong></h3>
                            </div>
                            <div class="item_explore">
                                <a href="{{ route('hotels.show',$hotel->id) }}">Explore <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

            <div class="col-md-12">
                <div class="glob_exxplore_bt">
                    <a href="/hotels/list"><button class="explore_more">
                            Explore More<i class="fa-solid fa-arrow-right"></i>
                        </button></a>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
</section>



<section class="popular_domestic_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_sectionsss">
                    <p>What’s new in</p>
                    <h2>Popular Transportation</h2>
                </div>
            </div>
        </div>
        <div class="row domestic-tours">
                        <div class="col-md-8 mob-none">
                <div class="main_boxx">
                    <div class="deomestic_img">
                        <img src="http://127.0.0.1:8000/uploaded_data/1721052491_Altit Fort 2.png" alt="">
                                                <div class="fav features">
                            featured
                        </div>
                                            </div>
                    <div class="demestic_content">
                        <div class="main_travel_company-des">
                            <div class="first-inner-company">
                                <div class="comp-logo">
                                    <img src="assets/images/circle-company.png" alt="">
                                </div>
                                <div class="comp-name">
                                    <h4>Siyah Travels</h4>
                                </div>
                            </div>
                            <div class="second-first-inner-company">
                                <div class="inner-company-rating">
                                    <h3><span><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span> &nbsp; 5.0</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="item_title">
                            <a style="color:none; text-decoration:none;" href="#">
                                <h2>Honda BRV</h2>
                            </a>
                        </div>
                        <div class="meta_itemss hotels_sec large_boxmeta">
                            <div class="right_items">
                                <span class="users"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.5 6a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0M18 6A6 6 0 1 0 6 6a6 6 0 0 0 12 0M3 23.25a9 9 0 1 1 18 0 .75.75 0 0 0 1.5 0c0-5.799-4.701-10.5-10.5-10.5S1.5 17.451 1.5 23.25a.75.75 0 0 0 1.5 0"></path></svg>
                                    <span>5 seats</span></span>
                                <span class="dayss manual">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M1.5 6.75v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m2.85-.45-2.25-3a.75.75 0 1 0-1.2.9l2.25 3a.75.75 0 1 0 1.2-.9m18.9 13.95h-3L21 21v-.75A2.25 2.25 0 0 1 23.25 18l-.75-.75v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-.75-.75 3.75 3.75 0 0 0-3.75 3.75V21c0 .414.336.75.75.75h3a.75.75 0 0 0 0-1.5M18.024 2.056A.75.75 0 1 1 18.75 3v1.5a.75.75 0 1 1-.722.95.75.75 0 1 0-1.446.4A2.25 2.25 0 1 0 18.75 3c-1 0-1 1.5 0 1.5a2.25 2.25 0 1 0-2.174-2.832.75.75 0 0 0 1.448.388M12 18.75a.75.75 0 0 1 1.5 0c0 .315-.107.622-.304.868l-2.532 3.163A.75.75 0 0 0 11.25 24h3a.75.75 0 0 0 0-1.5h-3l.586 1.219 2.532-3.164c.41-.513.632-1.15.632-1.805a2.25 2.25 0 0 0-4.5 0 .75.75 0 0 0 1.5 0M8.25 1.5H9v5.25a.75.75 0 0 0 1.5 0V1.5A1.5 1.5 0 0 0 9 0h-.75a.75.75 0 0 0 0 1.5m0 6h3a.75.75 0 0 0 0-1.5h-3a.75.75 0 0 0 0 1.5m-6-7.5H.75A.75.75 0 0 0 0 .75v3c0 .414.336.75.75.75h1.5a2.25 2.25 0 0 0 0-4.5m0 1.5a.75.75 0 0 1 0 1.5H.75l.75.75v-3l-.75.75zm8.25 11.25v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0m7.5 0v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m3 1.5A2.25 2.25 0 0 0 20.25 12h-15A2.25 2.25 0 0 1 3 9.75a.75.75 0 0 0-1.5 0 3.75 3.75 0 0 0 3.75 3.75h15a.75.75 0 0 1 .75.75.75.75 0 0 0 1.5 0"></path></svg>
                                    <span>Manual</span>
                                </span>
                                <span class="dayss mileage">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.75 15.292v-.285a2.25 2.25 0 0 1 4.5 0v.285a.75.75 0 0 0 1.5 0v-.285a3.75 3.75 0 1 0-7.5 0v.285a.75.75 0 0 0 1.5 0M13.54 5.02l-2.25 6.75a.75.75 0 0 0 1.424.474l2.25-6.75a.75.75 0 1 0-1.424-.474M6.377 6.757a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m12.75 3.75a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m-1.496-3.75a1.125 1.125 0 1 0 1.119 1.131v-.006c0-.621-.504-1.125-1.125-1.125a.75.75 0 0 0 0 1.5.375.375 0 0 1-.375-.375V7.88a.375.375 0 1 1 .373.377.75.75 0 1 0 .008-1.5m-8.254-3a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5M21.88 17.541a16.5 16.5 0 0 0-19.76 0 .75.75 0 1 0 .898 1.202 15 15 0 0 1 17.964 0 .75.75 0 1 0 .898-1.202m.62-5.534c0 5.799-4.701 10.5-10.5 10.5s-10.5-4.701-10.5-10.5 4.701-10.5 10.5-10.5 10.5 4.701 10.5 10.5m1.5 0c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12m-19.123-1.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5"></path></svg>
                                    <span>25,000</span>
                                </span>
                              
                            </div>
                            <div class="left_items">
                                <ul>
                                                                                                        </ul>
                            </div>
                        </div>
                        <div class="item_desc">
                            <p>lorem ipson </p>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>7,000.00</strong></h3>
                            </div>
                            <div class="item_explore">
                                <a href="#">Explore <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                                                             <div class="col-md-4">
                <div class="main_boxx box2">
                    <div class="deomestic_img">
                                                <img src="http://127.0.0.1:8000/uploaded_data/1721054580_Shangrila Resort.jpg" alt="">
                                                                        <div class="fav features">
                            featured
                        </div>
                                            </div>
                    <div class="demestic_content">
                        <div class="meta_itemss right_items main_travel_company-des">

                            <div class="first-inner-company">
                                <div class="comp-logo">
                                    <img src="assets/images/circle-company.png" alt="">
                                </div>
                                <div class="comp-name">
                                    <h4>Siyah Travels</h4>
                                </div>
                            </div>
                            <div class="second-first-inner-company">
                                <div class="inner-company-rating">
                                    <h3><span><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span> &nbsp; 5.0</h3>
                                </div>
                            </div>

                        </div>
                        <div class="item_title">
                            <a href="#">
                                <h2>Toyota Corola</h2>
                            </a>
                        </div>
                        
                        <div class="right_items hello">
                            <span class="users"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.5 6a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0M18 6A6 6 0 1 0 6 6a6 6 0 0 0 12 0M3 23.25a9 9 0 1 1 18 0 .75.75 0 0 0 1.5 0c0-5.799-4.701-10.5-10.5-10.5S1.5 17.451 1.5 23.25a.75.75 0 0 0 1.5 0"></path></svg>
                                <span>5 seats</span></span>
                            <span class="dayss manual">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M1.5 6.75v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m2.85-.45-2.25-3a.75.75 0 1 0-1.2.9l2.25 3a.75.75 0 1 0 1.2-.9m18.9 13.95h-3L21 21v-.75A2.25 2.25 0 0 1 23.25 18l-.75-.75v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-.75-.75 3.75 3.75 0 0 0-3.75 3.75V21c0 .414.336.75.75.75h3a.75.75 0 0 0 0-1.5M18.024 2.056A.75.75 0 1 1 18.75 3v1.5a.75.75 0 1 1-.722.95.75.75 0 1 0-1.446.4A2.25 2.25 0 1 0 18.75 3c-1 0-1 1.5 0 1.5a2.25 2.25 0 1 0-2.174-2.832.75.75 0 0 0 1.448.388M12 18.75a.75.75 0 0 1 1.5 0c0 .315-.107.622-.304.868l-2.532 3.163A.75.75 0 0 0 11.25 24h3a.75.75 0 0 0 0-1.5h-3l.586 1.219 2.532-3.164c.41-.513.632-1.15.632-1.805a2.25 2.25 0 0 0-4.5 0 .75.75 0 0 0 1.5 0M8.25 1.5H9v5.25a.75.75 0 0 0 1.5 0V1.5A1.5 1.5 0 0 0 9 0h-.75a.75.75 0 0 0 0 1.5m0 6h3a.75.75 0 0 0 0-1.5h-3a.75.75 0 0 0 0 1.5m-6-7.5H.75A.75.75 0 0 0 0 .75v3c0 .414.336.75.75.75h1.5a2.25 2.25 0 0 0 0-4.5m0 1.5a.75.75 0 0 1 0 1.5H.75l.75.75v-3l-.75.75zm8.25 11.25v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0m7.5 0v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m3 1.5A2.25 2.25 0 0 0 20.25 12h-15A2.25 2.25 0 0 1 3 9.75a.75.75 0 0 0-1.5 0 3.75 3.75 0 0 0 3.75 3.75h15a.75.75 0 0 1 .75.75.75.75 0 0 0 1.5 0"></path></svg>
                                <span>Manual</span>
                            </span>
                            <span class="dayss mileage">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.75 15.292v-.285a2.25 2.25 0 0 1 4.5 0v.285a.75.75 0 0 0 1.5 0v-.285a3.75 3.75 0 1 0-7.5 0v.285a.75.75 0 0 0 1.5 0M13.54 5.02l-2.25 6.75a.75.75 0 0 0 1.424.474l2.25-6.75a.75.75 0 1 0-1.424-.474M6.377 6.757a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m12.75 3.75a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m-1.496-3.75a1.125 1.125 0 1 0 1.119 1.131v-.006c0-.621-.504-1.125-1.125-1.125a.75.75 0 0 0 0 1.5.375.375 0 0 1-.375-.375V7.88a.375.375 0 1 1 .373.377.75.75 0 1 0 .008-1.5m-8.254-3a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5M21.88 17.541a16.5 16.5 0 0 0-19.76 0 .75.75 0 1 0 .898 1.202 15 15 0 0 1 17.964 0 .75.75 0 1 0 .898-1.202m.62-5.534c0 5.799-4.701 10.5-10.5 10.5s-10.5-4.701-10.5-10.5 4.701-10.5 10.5-10.5 10.5 4.701 10.5 10.5m1.5 0c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12m-19.123-1.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5"></path></svg>
                                <span>25,000</span>
                            </span>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>6,500</strong></h3>

                            </div>
                            <div class="item_explore">
                                <a href="#">Explore <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                                    <div class="col-md-4">
                <div class="main_boxx box2">
                    <div class="deomestic_img">
                                                <img src="http://127.0.0.1:8000/uploaded_data/1721054983_192472448_468964854397371_6793787425504147275_n.jpg" alt="">
                                                                        <div class="fav features">
                            featured
                        </div>
                                            </div>
                    <div class="demestic_content">
                        <div class="meta_itemss right_items main_travel_company-des">

                            <div class="first-inner-company">
                                <div class="comp-logo">
                                    <img src="assets/images/circle-company.png" alt="">
                                </div>
                                <div class="comp-name">
                                    <h4>Siyah Travels</h4>
                                </div>
                            </div>
                            <div class="second-first-inner-company">
                                <div class="inner-company-rating">
                                    <h3><span><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span> &nbsp; 5.0</h3>
                                </div>
                            </div>

                        </div>
                        <div class="item_title">
                            <a href="#">
                                <h2>Toyota GLI</h2>
                            </a>
                        </div>
                        
                        <div class="right_items hello">
                            <span class="users"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.5 6a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0M18 6A6 6 0 1 0 6 6a6 6 0 0 0 12 0M3 23.25a9 9 0 1 1 18 0 .75.75 0 0 0 1.5 0c0-5.799-4.701-10.5-10.5-10.5S1.5 17.451 1.5 23.25a.75.75 0 0 0 1.5 0"></path></svg>
                                <span>5 seats</span></span>
                            <span class="dayss manual">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M1.5 6.75v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m2.85-.45-2.25-3a.75.75 0 1 0-1.2.9l2.25 3a.75.75 0 1 0 1.2-.9m18.9 13.95h-3L21 21v-.75A2.25 2.25 0 0 1 23.25 18l-.75-.75v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-.75-.75 3.75 3.75 0 0 0-3.75 3.75V21c0 .414.336.75.75.75h3a.75.75 0 0 0 0-1.5M18.024 2.056A.75.75 0 1 1 18.75 3v1.5a.75.75 0 1 1-.722.95.75.75 0 1 0-1.446.4A2.25 2.25 0 1 0 18.75 3c-1 0-1 1.5 0 1.5a2.25 2.25 0 1 0-2.174-2.832.75.75 0 0 0 1.448.388M12 18.75a.75.75 0 0 1 1.5 0c0 .315-.107.622-.304.868l-2.532 3.163A.75.75 0 0 0 11.25 24h3a.75.75 0 0 0 0-1.5h-3l.586 1.219 2.532-3.164c.41-.513.632-1.15.632-1.805a2.25 2.25 0 0 0-4.5 0 .75.75 0 0 0 1.5 0M8.25 1.5H9v5.25a.75.75 0 0 0 1.5 0V1.5A1.5 1.5 0 0 0 9 0h-.75a.75.75 0 0 0 0 1.5m0 6h3a.75.75 0 0 0 0-1.5h-3a.75.75 0 0 0 0 1.5m-6-7.5H.75A.75.75 0 0 0 0 .75v3c0 .414.336.75.75.75h1.5a2.25 2.25 0 0 0 0-4.5m0 1.5a.75.75 0 0 1 0 1.5H.75l.75.75v-3l-.75.75zm8.25 11.25v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0m7.5 0v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m3 1.5A2.25 2.25 0 0 0 20.25 12h-15A2.25 2.25 0 0 1 3 9.75a.75.75 0 0 0-1.5 0 3.75 3.75 0 0 0 3.75 3.75h15a.75.75 0 0 1 .75.75.75.75 0 0 0 1.5 0"></path></svg>
                                <span>Manual</span>
                            </span>
                            <span class="dayss mileage">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.75 15.292v-.285a2.25 2.25 0 0 1 4.5 0v.285a.75.75 0 0 0 1.5 0v-.285a3.75 3.75 0 1 0-7.5 0v.285a.75.75 0 0 0 1.5 0M13.54 5.02l-2.25 6.75a.75.75 0 0 0 1.424.474l2.25-6.75a.75.75 0 1 0-1.424-.474M6.377 6.757a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m12.75 3.75a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m-1.496-3.75a1.125 1.125 0 1 0 1.119 1.131v-.006c0-.621-.504-1.125-1.125-1.125a.75.75 0 0 0 0 1.5.375.375 0 0 1-.375-.375V7.88a.375.375 0 1 1 .373.377.75.75 0 1 0 .008-1.5m-8.254-3a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5M21.88 17.541a16.5 16.5 0 0 0-19.76 0 .75.75 0 1 0 .898 1.202 15 15 0 0 1 17.964 0 .75.75 0 1 0 .898-1.202m.62-5.534c0 5.799-4.701 10.5-10.5 10.5s-10.5-4.701-10.5-10.5 4.701-10.5 10.5-10.5 10.5 4.701 10.5 10.5m1.5 0c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12m-19.123-1.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5"></path></svg>
                                <span>25,000</span>
                            </span>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>6,000</strong></h3>

                            </div>
                            <div class="item_explore">
                                <a href="#">Explore <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                                    <div class="col-md-4">
                <div class="main_boxx box2">
                    <div class="deomestic_img">
                                                <img src="http://127.0.0.1:8000/uploaded_data/1721066675_Fairy Meadows.jpg" alt="">
                                                                    </div>
                    <div class="demestic_content">
                        <div class="meta_itemss right_items main_travel_company-des">

                            <div class="first-inner-company">
                                <div class="comp-logo">
                                    <img src="assets/images/circle-company.png" alt="">
                                </div>
                                <div class="comp-name">
                                    <h4>Siyah Travels</h4>
                                </div>
                            </div>
                            <div class="second-first-inner-company">
                                <div class="inner-company-rating">
                                    <h3><span><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span> &nbsp; 5.0</h3>
                                </div>
                            </div>

                        </div>
                        <div class="item_title">
                            <a href="#">
                                <h2>Carvan</h2>
                            </a>
                        </div>
                        
                        <div class="right_items hello">
                            <span class="users"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.5 6a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0M18 6A6 6 0 1 0 6 6a6 6 0 0 0 12 0M3 23.25a9 9 0 1 1 18 0 .75.75 0 0 0 1.5 0c0-5.799-4.701-10.5-10.5-10.5S1.5 17.451 1.5 23.25a.75.75 0 0 0 1.5 0"></path></svg>
                                <span>5 seats</span></span>
                            <span class="dayss manual">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M1.5 6.75v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m2.85-.45-2.25-3a.75.75 0 1 0-1.2.9l2.25 3a.75.75 0 1 0 1.2-.9m18.9 13.95h-3L21 21v-.75A2.25 2.25 0 0 1 23.25 18l-.75-.75v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-.75-.75 3.75 3.75 0 0 0-3.75 3.75V21c0 .414.336.75.75.75h3a.75.75 0 0 0 0-1.5M18.024 2.056A.75.75 0 1 1 18.75 3v1.5a.75.75 0 1 1-.722.95.75.75 0 1 0-1.446.4A2.25 2.25 0 1 0 18.75 3c-1 0-1 1.5 0 1.5a2.25 2.25 0 1 0-2.174-2.832.75.75 0 0 0 1.448.388M12 18.75a.75.75 0 0 1 1.5 0c0 .315-.107.622-.304.868l-2.532 3.163A.75.75 0 0 0 11.25 24h3a.75.75 0 0 0 0-1.5h-3l.586 1.219 2.532-3.164c.41-.513.632-1.15.632-1.805a2.25 2.25 0 0 0-4.5 0 .75.75 0 0 0 1.5 0M8.25 1.5H9v5.25a.75.75 0 0 0 1.5 0V1.5A1.5 1.5 0 0 0 9 0h-.75a.75.75 0 0 0 0 1.5m0 6h3a.75.75 0 0 0 0-1.5h-3a.75.75 0 0 0 0 1.5m-6-7.5H.75A.75.75 0 0 0 0 .75v3c0 .414.336.75.75.75h1.5a2.25 2.25 0 0 0 0-4.5m0 1.5a.75.75 0 0 1 0 1.5H.75l.75.75v-3l-.75.75zm8.25 11.25v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0m7.5 0v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m3 1.5A2.25 2.25 0 0 0 20.25 12h-15A2.25 2.25 0 0 1 3 9.75a.75.75 0 0 0-1.5 0 3.75 3.75 0 0 0 3.75 3.75h15a.75.75 0 0 1 .75.75.75.75 0 0 0 1.5 0"></path></svg>
                                <span>Manual</span>
                            </span>
                            <span class="dayss mileage">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.75 15.292v-.285a2.25 2.25 0 0 1 4.5 0v.285a.75.75 0 0 0 1.5 0v-.285a3.75 3.75 0 1 0-7.5 0v.285a.75.75 0 0 0 1.5 0M13.54 5.02l-2.25 6.75a.75.75 0 0 0 1.424.474l2.25-6.75a.75.75 0 1 0-1.424-.474M6.377 6.757a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m12.75 3.75a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m-1.496-3.75a1.125 1.125 0 1 0 1.119 1.131v-.006c0-.621-.504-1.125-1.125-1.125a.75.75 0 0 0 0 1.5.375.375 0 0 1-.375-.375V7.88a.375.375 0 1 1 .373.377.75.75 0 1 0 .008-1.5m-8.254-3a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5M21.88 17.541a16.5 16.5 0 0 0-19.76 0 .75.75 0 1 0 .898 1.202 15 15 0 0 1 17.964 0 .75.75 0 1 0 .898-1.202m.62-5.534c0 5.799-4.701 10.5-10.5 10.5s-10.5-4.701-10.5-10.5 4.701-10.5 10.5-10.5 10.5 4.701 10.5 10.5m1.5 0c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12m-19.123-1.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5"></path></svg>
                                <span>25,000</span>
                            </span>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>7,000</strong></h3>

                            </div>
                            <div class="item_explore">
                                <a href="#">Explore <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                                    <div class="col-md-4">
                <div class="main_boxx box2">
                    <div class="deomestic_img">
                                                <img src="http://127.0.0.1:8000/uploaded_data/1721067316_Rainbow Lake.jpg" alt="">
                                                                    </div>
                    <div class="demestic_content">
                        <div class="meta_itemss right_items main_travel_company-des">

                            <div class="first-inner-company">
                                <div class="comp-logo">
                                    <img src="assets/images/circle-company.png" alt="">
                                </div>
                                <div class="comp-name">
                                    <h4>Siyah Travels</h4>
                                </div>
                            </div>
                            <div class="second-first-inner-company">
                                <div class="inner-company-rating">
                                    <h3><span><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span> &nbsp; 5.0</h3>
                                </div>
                            </div>

                        </div>
                        <div class="item_title">
                            <a href="#">
                                <h2>Toyota Grand Cabin</h2>
                            </a>
                        </div>
                        
                        <div class="right_items hello">
                            <span class="users"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.5 6a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0M18 6A6 6 0 1 0 6 6a6 6 0 0 0 12 0M3 23.25a9 9 0 1 1 18 0 .75.75 0 0 0 1.5 0c0-5.799-4.701-10.5-10.5-10.5S1.5 17.451 1.5 23.25a.75.75 0 0 0 1.5 0"></path></svg>
                                <span>5 seats</span></span>
                            <span class="dayss manual">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M1.5 6.75v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m2.85-.45-2.25-3a.75.75 0 1 0-1.2.9l2.25 3a.75.75 0 1 0 1.2-.9m18.9 13.95h-3L21 21v-.75A2.25 2.25 0 0 1 23.25 18l-.75-.75v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-.75-.75 3.75 3.75 0 0 0-3.75 3.75V21c0 .414.336.75.75.75h3a.75.75 0 0 0 0-1.5M18.024 2.056A.75.75 0 1 1 18.75 3v1.5a.75.75 0 1 1-.722.95.75.75 0 1 0-1.446.4A2.25 2.25 0 1 0 18.75 3c-1 0-1 1.5 0 1.5a2.25 2.25 0 1 0-2.174-2.832.75.75 0 0 0 1.448.388M12 18.75a.75.75 0 0 1 1.5 0c0 .315-.107.622-.304.868l-2.532 3.163A.75.75 0 0 0 11.25 24h3a.75.75 0 0 0 0-1.5h-3l.586 1.219 2.532-3.164c.41-.513.632-1.15.632-1.805a2.25 2.25 0 0 0-4.5 0 .75.75 0 0 0 1.5 0M8.25 1.5H9v5.25a.75.75 0 0 0 1.5 0V1.5A1.5 1.5 0 0 0 9 0h-.75a.75.75 0 0 0 0 1.5m0 6h3a.75.75 0 0 0 0-1.5h-3a.75.75 0 0 0 0 1.5m-6-7.5H.75A.75.75 0 0 0 0 .75v3c0 .414.336.75.75.75h1.5a2.25 2.25 0 0 0 0-4.5m0 1.5a.75.75 0 0 1 0 1.5H.75l.75.75v-3l-.75.75zm8.25 11.25v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0m7.5 0v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m3 1.5A2.25 2.25 0 0 0 20.25 12h-15A2.25 2.25 0 0 1 3 9.75a.75.75 0 0 0-1.5 0 3.75 3.75 0 0 0 3.75 3.75h15a.75.75 0 0 1 .75.75.75.75 0 0 0 1.5 0"></path></svg>
                                <span>Manual</span>
                            </span>
                            <span class="dayss mileage">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.75 15.292v-.285a2.25 2.25 0 0 1 4.5 0v.285a.75.75 0 0 0 1.5 0v-.285a3.75 3.75 0 1 0-7.5 0v.285a.75.75 0 0 0 1.5 0M13.54 5.02l-2.25 6.75a.75.75 0 0 0 1.424.474l2.25-6.75a.75.75 0 1 0-1.424-.474M6.377 6.757a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m12.75 3.75a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m-1.496-3.75a1.125 1.125 0 1 0 1.119 1.131v-.006c0-.621-.504-1.125-1.125-1.125a.75.75 0 0 0 0 1.5.375.375 0 0 1-.375-.375V7.88a.375.375 0 1 1 .373.377.75.75 0 1 0 .008-1.5m-8.254-3a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5M21.88 17.541a16.5 16.5 0 0 0-19.76 0 .75.75 0 1 0 .898 1.202 15 15 0 0 1 17.964 0 .75.75 0 1 0 .898-1.202m.62-5.534c0 5.799-4.701 10.5-10.5 10.5s-10.5-4.701-10.5-10.5 4.701-10.5 10.5-10.5 10.5 4.701 10.5 10.5m1.5 0c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12m-19.123-1.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5"></path></svg>
                                <span>25,000</span>
                            </span>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>9,000</strong></h3>

                            </div>
                            <div class="item_explore">
                                <a href="#">Explore <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="glob_exxplore_bt">
                    <a href="http://127.0.0.1:8000/tours?domestic=1"><button class="explore_more">
                            Explore More<svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com -->
                        </button></a>
                </div>
            </div>
        </div>
    </div>
    </section>

<section class="talent_sec_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="young_pilotss_slider">
                    <h2>Testimonials</h2>
                    <ul class="talent_banner_slider">
                        @foreach($testimonials as $testimonial)

                        <li>
                            <div class="quote_conetainer">
                                <div class="reiciter">
                                    <div class="av_img">
                                        @if($testimonial->picture)
                                        <img src="{{ asset($testimonial->picture->media_file) }}" alt="">

                                        @else
                                        <img src="assets/images/default-avatar.webp" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="quote_para">
                                    <p>{{ $testimonial->content }}</p>
                                </div>
                                <div class="form">
                                    <h5>{{ $testimonial->name }}</h5>


                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="video_reviews_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_video_test_head">
                    <h2>The Reality Of A Trip</h2>
                    <p>Testimonials, Reviews, Experiences, Virtual Tours & Much More</p>
                    <ul class="video_testimonials">
                        @foreach($videoReviews as $videoReview)
                        <li>
                            <div class="main_video_box">
                                <div class="first_images" data-video-id="_0aVwBXh4OU">
                                    <img src="{{ returnMedia($videoReview->thumbnail->media_file) }}"
                                        alt="{{ $videoReview->thumbnail->alt_text }}">
                                    <div class="content">
                                        <p>{{ $videoReview->title }}</p>
                                    </div>
                                </div>
                                <div class="iframe_video" style="display: none;">
                                    <iframe width="560" height="315" src="{{ $videoReview->video_link }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog_sec_">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog_head">
                    <h3>Our blog</h3>
                    <h2>Travel Tips and Advice</h2>
                    <div class="blog_containerr">
                        <ul class="discount_sliders">
                            @foreach($recentBlogs as $blog)
                            <li>
                                <a href="{{ route('front.blogs.show',$blog->slug) }}">
                                    <div class="post_innerr">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('uploaded_data/'.$blog->featured_image) }}" alt="">
                                        </div>
                                        <div class="post-entry-content">
                                            <div class="entry-head">
                                                <span class="cat-title">{{ $blog->category->name }}</span>
                                                <h4>{{ $blog->title }}</h4>
                                            </div>
                                            <div class="entry-bottm">
                                                <p>{!! substr(strip_tags($blog->content),0,100) !!}...</p>
                                            </div>
                                            <div class="entry-metaa">
                                                <span class="post-on">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    {{ $blog->created_at->format('F d, Y') }}
                                                </span>
                                                <span class="post_author">
                                                    <i class="fa-regular fa-user"></i> By {{ $blog->author }}
                                                </span>
                                                <span class="comment-post">
                                                    <i class="fa-regular fa-comments"></i> 0
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
<style>
    .main_boxx.box2 {
        height: 493px !important;
    }

</style>
