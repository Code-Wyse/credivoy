@extends('front.layouts.app')

@section('contents')
<section class="location_list_sec_1">
    <div class="container">
        {{--            <div class="full searchbar-hidden">--}}
        {{--                <div class="flight_containerrr">--}}
        {{--                </div>--}}
        {{--            </div>--}}
    </div>
</section>

<section class="location_list_sec_2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <form action="{{ route('hotels.list') }}" method="get">
                    <div class="tour_filter">
                        <div class="metainfor">
                            <h5>Hotels: {{ count($hotels) }} found</h5>
                        </div>
                        <div class="filter_header">
                            <h5>Filter By</h5>
                        </div>
                        <div class="filter_container">

                            <x-forms.input label="City/Hotel/Resort/Area" :value="old('query',request()->get('query'))"
                                placeholder="Query" input-name="query" input-id="query" :errors="[]" />
                            <x-forms.input label="Check In Date" input-id="check_in_date" input-name="check_in_date"
                                type="date" :value="old('check_in_date',request()->get('check_in_date'))" />
                            <x-forms.input label="Check Out Date" input-id="check_out_date" input-name="check_out_date"
                                type="date" :value="old('check_out_date',request()->get('check_out_date'))" />

                            <x-forms.input label="Categories" placeholder="Select Category" :multiple="true"
                                type="select"
                                :options="$categories->map(fn ($category) => ['value' => $category->id,'label' => $category->name])->toArray()"
                                input-name="category_id[]" input-id="category_id"
                                :value="old('category_id',request()->get('category_id'))" />

                            <div class="price_rangee mt-3">
                                <h5>Price Range</h5>
                                <div class="range-container">
                                    <div class="input-range-wrapper">
                                        <input name="min_price" id="rangeMin" type="range" min="{{ $hotel_min_price }}"
                                            max="{{ $hotel_max_price }}" step="10"
                                            value="{{ old('min_price',request()->get('min_price') ?? $hotel_min_price) }}">
                                        <input name="max_price" id="rangeMax" type="range" min="{{ $hotel_min_price }}"
                                            max="{{ $hotel_max_price }}" step="10"
                                            value="{{ old('max_price',request()->get('max_price') ?? $hotel_max_price) }}">
                                    </div>
                                    <div class="number-value">
                                        <span id="minAmount" class="min-amount">PKR
                                            {{ number_format($hotel_min_price,2) }}</span>
                                        <span id="maxAmount" class="max-amount">PKR
                                            {{ number_format($hotel_max_price,2) }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="filter-type time star-rating">
                                <h5>Star Rating</h5>
                                <div class="demo-inline-spacing">
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox1" value="5" name="rating[]"
                                            @checked(in_array(5,request()->rating ?? [])) >
                                        <label for="checkbox1">
                                            <div class="input-content">
                                                <i class="fa-solid fa-star"></i>
                                                <span class="text">5</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox2" value="4" name="rating[]"
                                            @checked(in_array(4,request()->rating ?? [])) >
                                        <label for="checkbox2">
                                            <div class="input-content">
                                                <i class="fa-solid fa-star"></i>
                                                <span class="text">4</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox3" value="3" name="rating[]"
                                            @checked(in_array(3,request()->rating ?? [])) >
                                        <label for="checkbox3">
                                            <div class="input-content">
                                                <i class="fa-solid fa-star"></i>
                                                <span class="text">3</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox4" value="2" name="rating[]"
                                            @checked(in_array(2,request()->rating ?? [])) >
                                        <label for="checkbox4">
                                            <div class="input-content">
                                                <i class="fa-solid fa-star"></i>
                                                <span class="text">2</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox5" value="1" name="rating[]"
                                            @checked(in_array(1,request()->rating ?? [])) >
                                        <label for="checkbox5">
                                            <div class="input-content">
                                                <i class="fa-solid fa-star"></i>
                                                <span class="text">1</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{--                                <div class="filter duration">--}}
                            {{--                                    <h5>Accommodation Type</h5>--}}
                            {{--                                    <div class="duration-wrapper">--}}
                            {{--                                        <div class="custom-checkbox">--}}
                            {{--                                            <input type="checkbox" id="checkbox1">--}}
                            {{--                                            <label for="checkbox1">--}}
                            {{--                                                <span>Resort</span>--}}
                            {{--                                            </label>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="custom-checkbox">--}}
                            {{--                                            <input type="checkbox" id="checkbox1">--}}
                            {{--                                            <label for="checkbox1">--}}
                            {{--                                                <span>Appartment</span>--}}
                            {{--                                            </label>--}}
                            {{--                                        </div>--}}

                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="filter-type tagss facility">--}}
                            {{--                                    <h5>Facilities</h5>--}}
                            {{--                                    <div class="tag-wrapper">--}}
                            {{--                                        <div class="custom-control custom-checkbox">--}}
                            {{--                                            <input type="checkbox" id="checkbox1" value="180">--}}
                            {{--                                            <label for="checkbox1">--}}
                            {{--                                                <small>Breakfast</small>--}}
                            {{--                                            </label>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="custom-control custom-checkbox">--}}
                            {{--                                            <input type="checkbox" id="checkbox2" value="17">--}}
                            {{--                                            <label for="checkbox2">--}}
                            {{--                                                <small>Restaurant</small>--}}
                            {{--                                            </label>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="custom-control custom-checkbox">--}}
                            {{--                                            <input type="checkbox" id="checkbox3" value="21">--}}
                            {{--                                            <label for="checkbox3">--}}
                            {{--                                                <small>Parking</small>--}}
                            {{--                                            </label>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="custom-control custom-checkbox">--}}
                            {{--                                            <input type="checkbox" id="checkbox4" value="73">--}}
                            {{--                                            <label for="checkbox4">--}}
                            {{--                                                <small>24-hour Security</small>--}}
                            {{--                                            </label>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="custom-control custom-checkbox">--}}
                            {{--                                            <input type="checkbox" id="checkbox5" value="79">--}}
                            {{--                                            <label for="checkbox5">--}}
                            {{--                                                <small>Outdoor Activities</small>--}}
                            {{--                                            </label>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="custom-control custom-checkbox">--}}
                            {{--                                            <input type="checkbox" id="checkbox6" value="18">--}}
                            {{--                                            <label for="checkbox6">--}}
                            {{--                                                <small>Couple Friendly</small>--}}
                            {{--                                            </label>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            <div class="row for-mobile-ress">
                                <div class="col-md-8">
                                    <a href="{{ route('hotels.list') }}" class="btn btn-secondary btn-block"
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
                    @foreach($hotels as $hotel)

                    <div class="main_boxx box2">
                        <div class="deomestic_img">
                            <img src="{{ $hotel->image }}" alt="">
                            <div class="fav features">
                                featured
                            </div>
                        </div>
                        <div class="demestic_content">
                            <div class="meta_itemss hotels_sec">
                                <div class="rch_ratingcontainer">
                                    <div class="rating">
                                        <span>4</span>
                                        <span class="outof">/5</span>
                                    </div>
                                    <h4>{{ $hotel->count }} reviews</h4>
                                </div>
                                <div class="left_items">
                                    <ul>
                                        <li><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="star" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->
                                        </li>
                                        <li><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="star" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->
                                        </li>
                                        <li><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="star" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->
                                        </li>
                                        <li><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="star" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item_title">
                                <h2>{{ $hotel->name }}</h2>
                            </div>
                            <div class="item_locations">
                                <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-location-dot"></i> Font Awesome fontawesome.com -->
                                <span>{{ $hotel->address }}</span>
                            </div>
                            <div class="add_sign_line">
                             
                            </div>
                            <div class="item_bottom hotels_bottom">
                                <div class="item_price">
                                    <h6>Starting From</h6>
                                    <h3>PKR
                                        <strong>{{ $hotel->roomTypes[0]->final_price }}</strong>
                                    </h3>
                                </div>
                                <div class="item_explore">
                                    <a href="{{ route('hotels.show',$hotel->id) }}">Explore <svg
                                            class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="arrow-right" role="img"
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

                    {{-- <div class="tour-card hotel-cardss">
                                <div class="tour-card-wrapper">
                                    <div class="img-placeholder">
                                        <img src="{{ $hotel->image }}">
                </div>
                <div class="tour-info-container">
                    <div class="tour-info-text">
                        <div class="tour-header">
                            <h4 class="title">{{ $hotel->name }}
                            </h4>
                            <div class="d-flex item_stars">
                                <span class="rating"><i class="fa-solid fa-star"></i><span
                                        class="star_text">{{ $hotel->type }}</span></span>
                                <div class="location">
                                    <a href=""><i
                                            class="fa-solid fa-location-dot"></i><span>{{ $hotel->address }}</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="list-wrapper">
                            <div class="tour-summary-list">
                                <span class="summary-point"><i class="fa-solid fa-shield-halved"></i> <span>24-Hour
                                        Security</span></span>
                                <span class="summary-point"><i class="fa-solid fa-user-group"></i> <span> Couple
                                        Friendly</span></span>
                                <span class="summary-point"><i class="fa-solid fa-bowl-food"></i> <span> Set Menu
                                        Lunch</span></span>
                                <span class="summary-point"><i class="fa-solid fa-square-parking"></i> <span> Free Large
                                        Vehicle Parking</span></span>
                                <span class="summary-point"><i class="fa-solid fa-campground"></i> <span>
                                        Garden</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="price-info">
                        <span class="per">Starting From</span>
                        <span class="price-highlight"><span class="sm-text">PKR</span>
                            <span>{{ $hotel->roomTypes[0]->final_price }}</span></span>
                        <span class="per">For 1 Night, per Room per Person</span>
                        <div class="glob_select_hotel">
                            <a href="{{ route('hotels.show',$hotel->id) }}"><button
                                    class="select_hotel_list">Select</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        @endforeach

    </div>
    </div>
    </div>
    </div>
</section>
@endsection

@section('script')
<script>
    window.onload = function () {
        $('#category_id').select2();
    }

</script>
@endsection
