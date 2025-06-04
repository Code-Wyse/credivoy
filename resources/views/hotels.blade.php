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
                                <a href="/"><button class="nav-link" id="home-tab2345" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-panefsdfwr" type="button" role="tab"
                                    aria-controls="home-tab-panedfas4" aria-selected="true"><img
                                        src="/assets/images/tour-icon.svg" class="mr-2"> Tours</button></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="javascripts:;"><button class="nav-link active" id="profile-tab4524324" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-panedsfc" type="button" role="tab"
                                    aria-controls="profile-tab-pane4refwc">
                                <img src="/assets/images/hotel-iconn.svg" class="mr-2"> Hotels</button></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade " id="home-tab-pane" role="tabpanel"
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
                        <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
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
                                                {{--                                        <div class="airfrom_listt">--}}
                                                {{--                                            <div class="main_grid_hotel_list">--}}
                                                {{--                                                <div class="firsttop-destination">--}}
                                                {{--                                                    <h4>Top Destination</h4>--}}
                                                {{--                                                    <ul>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <div class="image_hotel">--}}
                                                {{--                                                                <img src="/assets/images/hotel-1.jpg" alt="">--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                            <div class="hotel_features">--}}
                                                {{--                                                                <h4>Nathia Gali <span>🔥</span></h4>--}}
                                                {{--                                                                <p>City</p>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <div class="image_hotel">--}}
                                                {{--                                                                <img src="/assets/images/hotel-2.jpeg" alt="">--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                            <div class="hotel_features">--}}
                                                {{--                                                                <h4>Hunza <span>🔥</span></h4>--}}
                                                {{--                                                                <p>City</p>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                    </ul>--}}
                                                {{--                                                </div>--}}
                                                {{--                                                <div class="firsttop-destination">--}}
                                                {{--                                                    <h4>Top Properties</h4>--}}
                                                {{--                                                    <ul>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <div class="image_hotel">--}}
                                                {{--                                                                <img src="/assets/images/hotel-1.jpg" alt="">--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                            <div class="hotel_features">--}}
                                                {{--                                                                <h4>Nathia Gali <span>🔥</span></h4>--}}
                                                {{--                                                                <p>City</p>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <div class="image_hotel">--}}
                                                {{--                                                                <img src="/assets/images/hotel-2.jpeg" alt="">--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                            <div class="hotel_features">--}}
                                                {{--                                                                <h4>Hunza <span>🔥</span></h4>--}}
                                                {{--                                                                <p>City</p>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                    </ul>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </div>--}}

                                                {{--                                        </div>--}}
                                            </div>
                                        </div>

                                        <div class="box location dateDepart" id="Depart">
                                            <span class="depDate">CHECK IN</span>
                                            <div class="value" id="selectedDepartureDate">27 <span>May '24</span></div>
                                            <span class="sub-value">Friday</span>
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
                                            <span class="sub-value">Friday</span>
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
                                        {{-- <div class="box location to Swapper" id="NOPERSON">
                                            <span class="from">Rooms & Guests</span>
                                            <div class="valuess">1 <span class="new">Room, </span> 1 <span class="new">Guest</span>
                                            </div>
                                            <div class="subvalues">1 Adult</div>
                                            <div id="hotel_room" class="guuest_picker flight_from_suggestionss d-none  hello">
                                                <div class="guest_picker">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                    Room 1
                                                                </button>
                                                                <button type="button" class="btn btn-remove-room btn-link"><i
                                                                        class="icon icon-minus-circle"></i> Remove
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="Adults">
                                                                        <span>
                                                                            <span>Adults</span>
                                                                            <span class="age-text">10 years +</span>
                                                                        </span>
                                                                        <div class="inputs">
                                                                            <button type="button"
                                                                                class="btn btn-add-remove btn-link" disabled><i
                                                                                    class="icon icon-remove-circle"></i>
                                                                            </button>
                                                                            <span class="count">1</span>
                                                                            <button type="button"
                                                                                class="btn btn-add-remove btn-link"><i
                                                                                    class="icon icon-plus-circle"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="children">
                                                                        <span>
                                                                            <span>Child</span>
                                                                            <span class="age-text">0-10 years</span>
                                                                        </span>
                                                                        <div class="inputs">
                                                                            <button type="button"
                                                                                class="btn btn-add-remove btn-link" disabled><i
                                                                                    class="icon icon-remove-circle"></i>
                                                                            </button>
                                                                            <span class="count">0</span>
                                                                            <button type="button"
                                                                                class="btn btn-add-remove btn-link"><i
                                                                                    class="icon icon-plus-circle"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="children-wrapper"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="room-actions">
                                                        <div class="button-wrapper">
                                                            <button type="button"
                                                                class="btn brand-btn-light small btn-outline-primary btn-sm add-room">
                                                                <i class="icon icon-plus-circle"></i> <span>Add Another
                                                                    Room</span></button>
                                                            <button type="button" class="btn desktop-btn btn-secondary btn-sm done"
                                                                id="Done">Done
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}


                                    </div>
                                    {{--                        <div class="hotel-pre-filter d-flex align-items-center flex-wrap">--}}
                                    {{--                            <span class="font-weight-bolder text-primary mr-1">Search for</span>--}}
                                    {{--                            <div class="mr-1 trip-checkbox custom-control custom-checkbox">--}}
                                    {{--                                <input type="checkbox" name="hotel-pre-filter" class="custom-control-input"--}}
                                    {{--                                    value="for_business" id="for_business">--}}
                                    {{--                                <label class="custom-control-label" for="for_business">Business</label>--}}
                                    {{--                            </div>--}}
                                    {{--                            <div class="mr-1 trip-checkbox custom-control custom-checkbox">--}}
                                    {{--                                <input type="checkbox" name="hotel-pre-filter" class="custom-control-input"--}}
                                    {{--                                    value="for_couples" id="for_couples">--}}
                                    {{--                                <label class="custom-control-label" for="for_couples">Couples</label>--}}
                                    {{--                            </div>--}}
                                    {{--                            <div class="mr-1 trip-checkbox custom-control custom-checkbox">--}}
                                    {{--                                <input type="checkbox" name="hotel-pre-filter" class="custom-control-input"--}}
                                    {{--                                    value="for_families" id="for_families">--}}
                                    {{--                                <label class="custom-control-label" for="for_families">Families</label>--}}
                                    {{--                            </div>--}}
                                    {{--                            <div class="mr-1 trip-checkbox custom-control custom-checkbox">--}}
                                    {{--                                <input type="checkbox" name="hotel-pre-filter" class="custom-control-input"--}}
                                    {{--                                    value="for_friends" id="for_friends">--}}
                                    {{--                                <label class="custom-control-label" for="for_friends">Friends</label>--}}
                                    {{--                            </div>--}}
                                    {{--                            <div class="mr-1 trip-checkbox custom-control custom-checkbox">--}}
                                    {{--                                <input type="checkbox" name="hotel-pre-filter" class="custom-control-input"--}}
                                    {{--                                    value="for_solo" id="for_solo">--}}
                                    {{--                                <label class="custom-control-label" for="for_solo">Solo</label>--}}
                                    {{--                            </div>--}}
                                    {{--                        </div>--}}

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
        </div>
    </div>
</section>


<section class="sec_2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hot_dealsss">
                    <h4>Our Services</h4>

                    <div class="dicount_slides mt-5">
                        <ul class="discount_sliders">
                            <li><a href="/tours?categories=9"><img src="/assets/images/our_servicess1.svg" alt=""></a></li>
                            <li><a href="/tours?domestic=1"><img src="/assets/images/our_servicess2.svg" alt=""></a></li>
                            <li><a href="/tours?domestic=0"><img src="/assets/images/our_servicess3.svg" alt=""></a></li>
                            <li><a href="/tours?domestic=0"><img src="/assets/images/our_servicess4.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





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
                                   <a href="{{ route('login') }}"> <button class="join_now btn">Join Now - It's Free</button></a>
                                </div>
                                {{-- <div class="offer_dividerss">
                                        <span>or</span>
                                    </div> --}}
                                {{-- <div class="offer_qr_code">
                                        <img src="/assets/images/qr_code.png" alt="">
                                        <p>Scan the QR code</p>
                                    </div> --}}
                            </div>
                        </div>
                        <div class="box_gift_img">
                            <img src="/assets/images/gift.png" alt="">
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
                        <div class="add_sign_line">
                        <p><i class="fa-solid fa-key"></i> Sign in or register to enjoy special discounts</p>
                        </div>
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

{{-- <section class="previous_tripss">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="previous_trip_images">
                        <ul class="previous">
                            <li><img src="/assets/images/Malam-Jabba.jpg" alt=""></li>
                            <li><img src="/assets/images/New-Year.jpg" alt=""></li>
                            <li><img src="/assets/images/Sargodha-Boys.jpg" alt=""></li>
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
                                        <img src="/assets/images/default-avatar.webp" alt="">
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
