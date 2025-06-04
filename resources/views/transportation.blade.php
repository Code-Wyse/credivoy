@extends('front.layouts.app')

@section('contents')
<section class="location_list_sec_1">
    <div class="container">
    </div>
</section>
<section class="location_list_sec_2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <form action="http://127.0.0.1:8000/transportation" method="get">
                    <div class="tour_filter">
                        <div class="metainfor">
                            <h5>Transportation: 1 found</h5>
                        </div>
                        <div class="filter_header">
                            <h5>Filter By</h5>
                        </div>
                        <div class="filter_container">

                            <div class="form-group mb-3">
                                <label for="category_id">Vehicle Type </label>
                                <select data-placeholder="Select Category" name="category_id[]" id="category_id"
                                    class="select2 form-control select2-multiple select2-input select2-hidden-accessible"
                                    multiple="" data-select2-id="select2-data-category_id" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="1">Business</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="select2-data-1-2v68" style="width: 204.594px;"><span
                                        class="selection"><span class="select2-selection select2-selection--multiple"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                            aria-disabled="false">
                                            <ul class="select2-selection__rendered" id="select2-category_id-container">
                                            </ul><span class="select2-search select2-search--inline"><textarea
                                                    class="select2-search__field" type="search" tabindex="0"
                                                    autocorrect="off" autocapitalize="none" spellcheck="false"
                                                    role="searchbox" aria-autocomplete="list" autocomplete="off"
                                                    aria-label="Search" aria-describedby="select2-category_id-container"
                                                    placeholder="Select Category"
                                                    style="width: 100%;"></textarea></span>
                                        </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <div class="invalid-feedback d-block">

                                </div>
                                <div class="valid-feedback">

                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="check_in_date">Pick-Up Date</label>
                                <input type="date" name="check_in_date" placeholder="" value="" class="form-control"
                                    id="check_in_date" step="0.01" min="0" accept="">
                                <div class="invalid-feedback d-block">

                                </div>
                                <div class="valid-feedback">

                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="check_out_date">Drop-Off Date </label>
                                <input type="date" name="check_out_date" placeholder="" value="" class="form-control"
                                    id="check_out_date" step="0.01" min="0" accept="">
                                <div class="invalid-feedback d-block">

                                </div>
                                <div class="valid-feedback">

                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="timing-selectionss d-flex align-items-center">
                                    <div class="main_select">
                                        <label for="pickup">Pick-Up </label>
                                        <select id="pickup" name="pickup">
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
                                    <div class="main_select">
                                        <label for="dropOff">Drop-Off  </label>
                                        <select id="dropOff" name="dropOff">
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


                            <div class="price_rangee mt-3">
                                <h5>Price Range</h5>
                                <div class="range-container">
                                    <div class="input-range-wrapper">
                                        <input name="min_price" id="rangeMin" type="range" min="15000.00" max="50000.00"
                                            step="10" value="15000.00">
                                        <input name="max_price" id="rangeMax" type="range" min="15000.00" max="50000.00"
                                            step="10" value="50000.00">
                                    </div>
                                    <div class="number-value">
                                        <span id="minAmount" class="min-amount">PKR 15,000</span>
                                        <span id="maxAmount" class="max-amount">PKR 50,000</span>
                                    </div>
                                </div>
                            </div>

                            <div class="filter-type time star-rating">
                                <h5>Star Rating</h5>
                                <div class="demo-inline-spacing">
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox1" value="5" name="rating[]">
                                        <label for="checkbox1">
                                            <div class="input-content">
                                                <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                    data-prefix="fas" data-icon="star" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->
                                                <span class="text">5</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox2" value="4" name="rating[]">
                                        <label for="checkbox2">
                                            <div class="input-content">
                                                <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                    data-prefix="fas" data-icon="star" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->
                                                <span class="text">4</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox3" value="3" name="rating[]">
                                        <label for="checkbox3">
                                            <div class="input-content">
                                                <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                    data-prefix="fas" data-icon="star" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->
                                                <span class="text">3</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox4" value="2" name="rating[]">
                                        <label for="checkbox4">
                                            <div class="input-content">
                                                <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                    data-prefix="fas" data-icon="star" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->
                                                <span class="text">2</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox5" value="1" name="rating[]">
                                        <label for="checkbox5">
                                            <div class="input-content">
                                                <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                    data-prefix="fas" data-icon="star" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->
                                                <span class="text">1</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row for-mobile-ress">
                                <div class="col-md-8">
                                    <a href="http://127.0.0.1:8000/hotels/list" class="btn btn-secondary btn-block"
                                        style="background:#409f99; border: 1px solid #409f99;color:#FFF !important;">
                                        Reset Filters
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-secondary btn-block"
                                        style="background:#409f99; border: 1px solid #409f99">
                                        Filters
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="tour_list-container">
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
                                        <h3><span><svg class="svg-inline--fa fa-star" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="star" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                    </path>
                                                </svg>
                                                <!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span>
                                            &nbsp; 5.0</h3>
                                    </div>
                                </div>

                            </div>
                            <div class="item_title">
                                <a href="#">
                                    <h2>Toyota Corola</h2>
                                </a>
                            </div>

                            <div class="right_items hello">
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
                            </div>
                            <div class="item_bottom">
                                <div class="item_price">
                                    <h6>Starting From</h6>
                                    <h3>PKR <strong>6,500</strong></h3>

                                </div>
                                <div class="item_explore">
                                    <a href="#">Explore <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="arrow-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')

@endsection
