@extends('front.layouts.app')

@section('contents')


<section class="hotel_detailss_sec_1">
    <div class="container">
        <div class="row bg-white">
            <div class="col-md-8">
                <div class="images_carouse">
                    <ul class="main_slider hotel_main slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 589px; transform: translate3d(0px, 0px, 0px);">
                                <li class="slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" tabindex="0" style="width: 589px;"><a data-fancybox="gallery"
                                        href="http://127.0.0.1:8000/uploaded_data/1721066675_Fairy Meadows.jpg"
                                        tabindex="0">
                                        <img src="http://127.0.0.1:8000/uploaded_data/1721066675_Fairy Meadows.jpg"
                                            alt="">
                                    </a></li>
                            </div>
                        </div>
                    </ul>
                    <ul class="forNav hotel_nav slick-initialized slick-slider slick-vertical">
                        <div class="slick-list draggable" style="height: 424px;">
                            <div class="slick-track"
                                style="opacity: 1; height: 106px; transform: translate3d(0px, 0px, 0px);">
                                <li class="slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" tabindex="0" style="width: 104px;"><a data-fancybox="gallery"
                                        href="http://127.0.0.1:8000/uploaded_data/1721066675_Fairy Meadows.jpg"
                                        tabindex="0">
                                        <img src="http://127.0.0.1:8000/uploaded_data/1721066675_Fairy Meadows.jpg"
                                            alt="">
                                    </a></li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hotel_info_details">
                    <div class="hotel_type rating">
                        <h2>Toyota Corolla</h2>
                    </div>

                    <div class="summer-list-tour transportation-featuredd">
                        <span class="users"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M16.5 6a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0M18 6A6 6 0 1 0 6 6a6 6 0 0 0 12 0M3 23.25a9 9 0 1 1 18 0 .75.75 0 0 0 1.5 0c0-5.799-4.701-10.5-10.5-10.5S1.5 17.451 1.5 23.25a.75.75 0 0 0 1.5 0">
                                </path>
                            </svg>
                            <span>5 seats</span></span>
                        <span class="dayss manual">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M1.5 6.75v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m2.85-.45-2.25-3a.75.75 0 1 0-1.2.9l2.25 3a.75.75 0 1 0 1.2-.9m18.9 13.95h-3L21 21v-.75A2.25 2.25 0 0 1 23.25 18l-.75-.75v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-.75-.75 3.75 3.75 0 0 0-3.75 3.75V21c0 .414.336.75.75.75h3a.75.75 0 0 0 0-1.5M18.024 2.056A.75.75 0 1 1 18.75 3v1.5a.75.75 0 1 1-.722.95.75.75 0 1 0-1.446.4A2.25 2.25 0 1 0 18.75 3c-1 0-1 1.5 0 1.5a2.25 2.25 0 1 0-2.174-2.832.75.75 0 0 0 1.448.388M12 18.75a.75.75 0 0 1 1.5 0c0 .315-.107.622-.304.868l-2.532 3.163A.75.75 0 0 0 11.25 24h3a.75.75 0 0 0 0-1.5h-3l.586 1.219 2.532-3.164c.41-.513.632-1.15.632-1.805a2.25 2.25 0 0 0-4.5 0 .75.75 0 0 0 1.5 0M8.25 1.5H9v5.25a.75.75 0 0 0 1.5 0V1.5A1.5 1.5 0 0 0 9 0h-.75a.75.75 0 0 0 0 1.5m0 6h3a.75.75 0 0 0 0-1.5h-3a.75.75 0 0 0 0 1.5m-6-7.5H.75A.75.75 0 0 0 0 .75v3c0 .414.336.75.75.75h1.5a2.25 2.25 0 0 0 0-4.5m0 1.5a.75.75 0 0 1 0 1.5H.75l.75.75v-3l-.75.75zm8.25 11.25v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0m7.5 0v-3a.75.75 0 0 0-1.5 0v3a.75.75 0 0 0 1.5 0m3 1.5A2.25 2.25 0 0 0 20.25 12h-15A2.25 2.25 0 0 1 3 9.75a.75.75 0 0 0-1.5 0 3.75 3.75 0 0 0 3.75 3.75h15a.75.75 0 0 1 .75.75.75.75 0 0 0 1.5 0">
                                </path>
                            </svg>
                            <span>Manual</span>
                        </span>
                        <span class="dayss mileage">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M9.75 15.292v-.285a2.25 2.25 0 0 1 4.5 0v.285a.75.75 0 0 0 1.5 0v-.285a3.75 3.75 0 1 0-7.5 0v.285a.75.75 0 0 0 1.5 0M13.54 5.02l-2.25 6.75a.75.75 0 0 0 1.424.474l2.25-6.75a.75.75 0 1 0-1.424-.474M6.377 6.757a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m12.75 3.75a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5m-1.496-3.75a1.125 1.125 0 1 0 1.119 1.131v-.006c0-.621-.504-1.125-1.125-1.125a.75.75 0 0 0 0 1.5.375.375 0 0 1-.375-.375V7.88a.375.375 0 1 1 .373.377.75.75 0 1 0 .008-1.5m-8.254-3a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5M21.88 17.541a16.5 16.5 0 0 0-19.76 0 .75.75 0 1 0 .898 1.202 15 15 0 0 1 17.964 0 .75.75 0 1 0 .898-1.202m.62-5.534c0 5.799-4.701 10.5-10.5 10.5s-10.5-4.701-10.5-10.5 4.701-10.5 10.5-10.5 10.5 4.701 10.5 10.5m1.5 0c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12m-19.123-1.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5">
                                </path>
                            </svg>
                            <span>25,000</span>
                        </span>
                        <span class="dayss large_bage">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M22.5 14.249v4.5a2.25 2.25 0 0 1-2.25 2.25H3.75a2.25 2.25 0 0 1-2.25-2.25v-9a2.25 2.25 0 0 1 2.25-2.25h16.5a2.25 2.25 0 0 1 2.25 2.25zm1.5 0v-4.5a3.75 3.75 0 0 0-3.75-3.75H3.75A3.75 3.75 0 0 0 0 9.749v9a3.75 3.75 0 0 0 3.75 3.75h16.5a3.75 3.75 0 0 0 3.75-3.75zm-18-7.5v15a.75.75 0 0 0 1.5 0v-15a.75.75 0 0 0-1.5 0m10.5 0v15a.75.75 0 0 0 1.5 0v-15a.75.75 0 0 0-1.5 0m0 0v-3a2.25 2.25 0 0 0-2.25-2.25h-4.5a2.25 2.25 0 0 0-2.25 2.25v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v3a.75.75 0 0 0 1.5 0">
                                </path>
                            </svg>
                            <span>1 Large Bag </span>
                        </span>
                        <span class="dayss large_bage">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M15 14.75H9a.75.75 0 0 1 0-1.5h6a.75.75 0 0 1 0 1.5m.75 3.25a.76.76 0 0 0-.75-.75H9a.75.75 0 0 0 0 1.5h6a.76.76 0 0 0 .75-.75m3-6.5v9a2.25 2.25 0 0 1-2.25 2.25h-.75v.5a.75.75 0 0 1-1.5 0v-.5h-4.5v.5a.75.75 0 0 1-1.5 0v-.5H7.5a2.25 2.25 0 0 1-2.25-2.25v-9A2.25 2.25 0 0 1 7.5 9.25h1.75v-8C9.25.56 9.81 0 10.5 0h3c.69 0 1.25.56 1.25 1.25v8h1.75a2.25 2.25 0 0 1 2.25 2.25m-8-2.25h2.5V1.5h-2.5zm6.5 2.25a.76.76 0 0 0-.75-.75h-9a.76.76 0 0 0-.75.75v9a.76.76 0 0 0 .75.75h9a.76.76 0 0 0 .75-.75z">
                                </path>
                            </svg>
                            <span>1 Small Bag </span>
                        </span>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>


<section class="tour-details-sec_2">
    <div class="container">
        <div class="row bg-white">
            <div class="col-md-12">
                <div class="custom-nav">
                    <ul>
                        <li><a href="#panelsStayOpen-collapseOne" class="show">Details</a></li>
                        <li><a href="#panelsStayOpen-collapseFour"> Itinerary</a></li>
                        <li><a href="#panelsStayOpen-collapseSix"> Description</a></li>
                        <li><a href="#panelsStayOpen-collapseTen">Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="text-desc">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    <svg class="svg-inline--fa fa-earth-americas" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="earth-americas" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fa-solid fa-earth-americas"></i> Font Awesome fontawesome.com -->
                                    Theft Protection
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p>Bookme tickets pvt ltd is currently providing car rental services with chauffeur
                                        only. So, the car's security responsibility will solely be of the Rental Company
                                        and Driver.</p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    <svg class="svg-inline--fa fa-clipboard-list" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="clipboard-list" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM72 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm104-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zM72 368a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm88 0c0-8.8 7.2-16 16-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16z">
                                        </path>
                                    </svg>
                                    <!-- <i class="fa-solid fa-clipboard-list"></i> Font Awesome fontawesome.com -->
                                    Clean Interior/Exterior
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>We ensure that the car provided to our customers will surely have a totally neat and clean exterior/interior.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFive">
                                    <svg class="svg-inline--fa fa-people-group" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="people-group" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-people-group"></i> Font Awesome fontawesome.com -->
                                    Cancellation Policies
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>● You’re not eligible for a refund if you cancel the ride 2 hours before the pickup time.
                                        <br>● You’re eligible for a 100% refund if you cancel the ride within 4 hours of the booking time.
                                        <br>● You’re eligible for a 30% refund if you cancel the ride within 22 hours of the pickup time.
                                        <br>● You’re eligible for a 10% refund if you cancel the ride before 24 hours of the pickup time.
                                        <br>● In case of multiple days bookings, the above-mentioned conditions are applied for day-1 and
                                        you’re eligible for a 100% refund for the remaining days.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseSix">
                                    <svg class="svg-inline--fa fa-list" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-list"></i> Font Awesome fontawesome.com -->
                                    Term & Conditions
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>● Customers are responsible for paying for their own fuel consumption. Each car is provided with a level of fuel and customers have to return the vehicle with the same level of fuel as they were given. The difference in fuel will be charged to the customer plus PKR.500 Service Charges if the same amount is not returned.
                                        <br>● In the case of (intercity rides) you have to pay 1500 to the Chauffeur for food and accomodation.
                                        <br>● E-challan will be paid by the Chauffeur but if the customer requests the driver to drive fast then the E-challan will be paid by the customer.
                                        <br>● Chauffeur-driven rentals are for 12 hours a day. Duration of rental starts as booked by the customer and finishes at 12:00 AM.
                                        <br>● A rental includes a chauffeur-driven car excluding fuel, parking, etc. charges.
                                        <br>● Chauffeur Rest – The chauffeur should be given a break for lunch and dinner, in addition, the
                                        chauffeur should be given a minimum break of eight consecutive hours during 24 hours on duty. This is a necessary safety requirement.
                                        <br>● You have the right to complain against the driver, service, vehicle, etc. but you cannot reprimand the chauffeur on your own or force the driver to go against company policies in any circumstances.
                                        <br>● State/Border Restrictions: To be driven on the Pakistan mainland only. FATA and Northern Areas are excluded.
                                        <br>● Toll Taxes, Parking Fees, etc. are to be paid by the renting part.
                                        <br>● In case of intercity Drop-off, client will be charged for return fuel too.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="request-free-tour">
                    <h5>Get Free Tour Consultation</h5>
                    <form action="http://127.0.0.1:8000/store-consultation" method="post">
                        <input type="hidden" name="_token" value="VCSud3s98ZoFqbLnJP4m0sBZ2yeXu9B1X1S4bPwR">
                        <div class="form-field">
                            <label for="Fname">First Name</label>
                            <input type="text" name="name" id="Fname">
                        </div>
                        <div class="form-field">
                            <label for="Lname">Last Name</label>
                            <input type="text" name="lname" id="Lname">
                        </div>
                        <div class="form-field">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="form-field">
                            <label for="phone">Phone Number</label>
                            <input type="number" name="phone" id="phone">
                        </div>
                        <div class="form-field">
                            <label for="datepicker">Select a Date:</label>
                            <input type="date" id="datepicker" name="datepicker">
                        </div>
                        <div class="form-field">
                            <label for="requirement">Additional Requirements</label>
                            <textarea name="requirement" id=""></textarea>
                            <input type="hidden" name="trip_title" value="Fairy Meadows &amp; Naltar Valley">
                        </div>
                        <div class="form-field">
                            <input type="submit" value="Submit">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- commenting sec  -->
<section class="comments-secc">
    <div class="container">
        <div id="reviews" class="review-section">
            <h4>0 Reviews</h4>
            <!-- Your sorting and star filter section -->

            <div class="review-list">
                <ul>
                </ul>
            </div>
        </div>

        <div class="container">
            <h2>Add Testimonials</h2>
            <form action="http://127.0.0.1:8000/tour-comments" method="POST">
                <input type="hidden" name="_token" value="VCSud3s98ZoFqbLnJP4m0sBZ2yeXu9B1X1S4bPwR"> <input
                    type="hidden" name="tour_id" value="11">

                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="5" required=""></textarea>

                <div class="rating">
                    <label for="communication">Hotels Experience:</label>
                    <div class="starrrt">
                        <input type="radio" id="communication-1" name="communication" value=""><span
                            class="star">★</span>
                        <input type="radio" id="communication-2" name="communication" value="4"><span
                            class="star">★</span>
                        <input type="radio" id="communication-3" name="communication" value="3"><span
                            class="star">★</span>
                        <input type="radio" id="communication-4" name="communication" value="2"><span
                            class="star">★</span>
                        <input type="radio" id="communication-5" name="communication" value="1"><span
                            class="star">★</span>
                    </div>
                </div>

                <div class="rating">
                    <label for="recommend">Tour Guide</label>
                    <div class="starrrt">
                        <input type="radio" id="recommend-1" name="recommend" value="5"><span class="star">★</span>
                        <input type="radio" id="recommend-2" name="recommend" value="4"><span class="star">★</span>
                        <input type="radio" id="recommend-3" name="recommend" value="3"><span class="star">★</span>
                        <input type="radio" id="recommend-4" name="recommend" value="2"><span class="star">★</span>
                        <input type="radio" id="recommend-5" name="recommend" value="1"><span class="star">★</span>
                    </div>
                </div>

                <div class="rating">
                    <label for="service">Meals Provided</label>
                    <div class="starrrt">
                        <input type="radio" id="service-1" name="service" value="5"><span class="star">★</span>
                        <input type="radio" id="service-2" name="service" value="4"><span class="star">★</span>
                        <input type="radio" id="service-3" name="service" value="3"><span class="star">★</span>
                        <input type="radio" id="service-4" name="service" value="2"><span class="star">★</span>
                        <input type="radio" id="service-5" name="service" value="1"><span class="star">★</span>
                    </div>
                </div>

                <div class="revieww-btn d-flex align-items-center justify-content-center">
                    <button type="submit">Submit Review</button>
                </div>
            </form>
        </div>
    </div>
</section>



@endsection

<style>
    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    /* button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        } */

    .rating {
        display: flex;
        align-items: center;
    }

    .rating label {
        flex: 0 0 21%;
        margin: 0 0 -5px 0
    }

    .star {
        font-size: 20px;
        color: #ccc;
        margin-right: 5px;
    }

    .star.active {
        color: gold;
    }


    .rating input {
        display: none;
    }

    .rating .star {
        font-size: 2em;
        color: #ddd;
        cursor: pointer;
        transition: color 0.2s;
    }

    .rating input:checked~.star {
        color: #f5b301;
    }

    .rating input:hover~.star,
    .rating .star:hover,
    .rating .star:hover~.star {
        color: #f5b301;
    }

    .rating .starrrt {
        display: flex;
        flex-direction: row-reverse;
    }

</style>
