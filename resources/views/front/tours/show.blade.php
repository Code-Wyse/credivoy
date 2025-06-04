@extends('front.layouts.app')

@section('contents')

<section class="hotel_detailss_sec_1">
    <div class="container">
        <div class="row bg-white">
            <div class="col-md-8">
                <div class="images_carouse">
                    <ul class="main_slider hotel_main">
                        @foreach($tour->media as $media)
                        @if($media->mime === 'image/jpg' || $media->mime === 'image/png' || $media->mime ===
                        'image/jpeg')
                        <li><a data-fancybox="gallery" href="{{ returnMedia($media->media_file) }}">
                                <img src="{{ returnMedia($media->media_file) }}" alt="{{ $media->alt_text }}">
                            </a></li>
                        @endif
                        @endforeach
                    </ul>
                    <ul class="forNav hotel_nav">
                        @foreach($tour->media as $media)
                        @if($media->mime === 'image/jpg' || $media->mime === 'image/png' || $media->mime ===
                        'image/jpeg')
                        <li><a data-fancybox="gallery" href="{{ returnMedia($media->media_file) }}">
                                <img src="{{ returnMedia($media->media_file) }}" alt="{{ $media->alt_text }}">
                            </a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hotel_info_details">
                    <div class="hotel_type rating">
                        <h2>{{$tour->title}}</h2>
                    </div>
                    <div class="locations">
                        <i class="fa-solid fa-location-dot"></i> {{$tour->location}}
                    </div>
                    @if(strpos($tour->location_link, 'https://www.google.com/maps') !== false)
                        <div class="map">
                            <iframe
                                src="{{ $tour->location_link }}"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    @endif
                    <div class="summer-list-tour">
                        <span class="summary-point">
                            <i class="icon icon-timing"></i>
                            <span>{{$tour->duration}} days</span>
                        </span>
                        <span class="summary-point">
                            <i class="icon icon-crowd"></i>
                            <span>{{$tour->group_size}} people</span>
                        </span>
                    </div>
                    {{-- <div class="requirement-list">
                        <h5>Requirements</h5>
                        <ul>
                            <li>COVID-19 Vaccination card</li>
                            <li>National ID card</li>
                            <li>Face mask</li>
                        </ul>
                    </div> --}}
                    <div class="feature-list">
                        <span class="feature-item">
                            <i class="tour-tag tour-16"></i>
                            <span>{{$tour->duration}} Day Tours</span>
                        </span>
                        {{--                            {!! $tour->inclusion !!}--}}
                        {{--                            <span class="feature-item">--}}
                        {{--                            <i class="tour-tag tour-21"></i>--}}
                        {{--                            <span>Air Tours</span>--}}
                        {{--                        </span>--}}
                        {{--                            <span class="feature-item">--}}
                        {{--                            <i class="tour-tag tour-73"></i>--}}
                        {{--                            <span>Private Tour</span>--}}
                        {{--                        </span>--}}
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
                                    <i class="fa-solid fa-earth-americas"></i>
                                    Overview
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p>{{$tour->overview}}</p>
                                    {{-- <h4><strong>Get a FREE customized quotation by filling out the form on the
                                                page</strong></h4> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    <i class="fa-solid fa-location-dot"></i> Location
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p><b>Destination: </b> {{ $tour->location }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    <i class="fa-regular fa-clock"></i> Timing
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p><b>Duration :</b> {{ $tour->duration }} days</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    <i class="fa-solid fa-clipboard-list"></i> Itinerary
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="itinerary-portions">
                                        <div class="nav">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                @foreach($tour->itineraries as $k=>$iternary)
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link {{$k == 0 ? 'active' : ""}}"
                                                        id="iternary-{{$k}}" data-bs-toggle="tab"
                                                        data-bs-target="#iternary-tab-pane-{{$k}}" type="button"
                                                        role="tab" aria-controls="iternary-tab-pane-{{$k}}"
                                                        aria-selected="true">Day {{ $iternary->day }}
                                                    </button>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="contentt">
                                            <div class="tab-content" id="myTabContent">
                                                @foreach($tour->itineraries as $k=>$iternary)
                                                <div class="tab-pane fade {{$k==0 ?'active show' : ''}}"
                                                    id="iternary-tab-pane-{{$k}}" role="tabpanel"
                                                    aria-labelledby="iternary-{{$k}}" tabindex="0">
                                                    <div class="mian-tabing">
                                                        {{--                                                                <div class="itineray-card-type">--}}
                                                        {{--                                                                    <div class="hightlight">--}}
                                                        {{--                                                                        <div class="circle">--}}
                                                        {{--                                                                            <i class="fa-solid fa-binoculars"></i>--}}
                                                        {{--                                                                        </div>--}}
                                                        {{--                                                                        <span class="time">08:00 AM</span>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                </div>--}}
                                                        <div class="itinerary-previews">
                                                            {{--                                                                    <div class="intinerary-img">--}}
                                                            {{--                                                                        <img src="assets/images/hunza-itineray1.jpeg"--}}
                                                            {{--                                                                             alt="">--}}
                                                            {{--                                                                    </div>--}}
                                                            <div class="infor-itinereay previews">
                                                                <h2>{{$iternary->title}}</h2>
                                                                {{--                                                                        <div class="icon-loaction">--}}
                                                                {{--                                                                            <i class="fa-solid fa-location-dot"></i>Hopper--}}
                                                                {{--                                                                            Glacier Viewpoint--}}
                                                                {{--                                                                        </div>--}}
                                                                <div class="iti-desc">
                                                                    {!! $iternary->description !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFive">
                                    <i class="fa-solid fa-people-group"></i> Inclusion & Exclusion
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    {!! $tour->inclusion !!}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseSix">
                                    <i class="fa-solid fa-list"></i> Destination Description
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    @foreach($tour->destinations as $destination)
                                    <p>{!! $destination->description !!}</p>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        {{--                            <div class="accordion-item">--}}
                        {{--                                <h2 class="accordion-header">--}}
                        {{--                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                        {{--                                            data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"--}}
                        {{--                                            aria-controls="panelsStayOpen-collapseSeven">--}}
                        {{--                                        <i class="fa-solid fa-circle-info"></i>Additional Information--}}
                        {{--                                    </button>--}}
                        {{--                                </h2>--}}
                        {{--                                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">--}}
                        {{--                                    <div class="accordion-body">--}}
                        {{--                                        <p><b>Add-ons:</b></p>--}}
                        {{--                                        <p>These can be added at an additional cost</p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Bonfire</li>--}}
                        {{--                                            <li>Cultural Dinner</li>--}}
                        {{--                                            <li>Cultural Dance</li>--}}
                        {{--                                            <li>BBQ Night</li>--}}
                        {{--                                            <li>Musical Night</li>--}}
                        {{--                                            <li>English Speaking Guide</li>--}}
                        {{--                                            <li>Lunch</li>--}}
                        {{--                                            <li>Dinner</li>--}}
                        {{--                                            <li>Jeep</li>--}}
                        {{--                                            <li>Entry Tickets</li>--}}
                        {{--                                            <li>Camps</li>--}}
                        {{--                                            <li>Change of Vehicle</li>--}}
                        {{--                                            <li>Heater</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>Standard hotels:</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Hunza: Hunza Elites, Al Barkat or similar</li>--}}
                        {{--                                            <li>Gilgit: Mandarin Inn or similar</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>Deluxe hotels:</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Hunza: Hunza Darbar, Eagles nest, Mountain Story or similar</li>--}}
                        {{--                                            <li>Gilgit: River Dale, Serena or similar</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>Deluxe hotels:</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Hunza: Hunza Darbar, Eagles nest, Mountain Story or similar</li>--}}
                        {{--                                            <li>Gilgit: River Dale, Serena or similar</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <h5><strong>Note: Quotation amount is subject to changes in the hotel rates &--}}
                        {{--                                                fuel prices</strong></h5>--}}
                        {{--                                        <p><b>Requirements:</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>--}}
                        {{--                                                COVID-19 Vaccination card--}}
                        {{--                                            </li>--}}
                        {{--                                            <li>National ID card</li>--}}
                        {{--                                            <li>Face mask</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="accordion-item">--}}
                        {{--                                <h2 class="accordion-header">--}}
                        {{--                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                        {{--                                            data-bs-target="#panelsStayOpen-collapseEigth" aria-expanded="false"--}}
                        {{--                                            aria-controls="panelsStayOpen-collapseEigth">--}}
                        {{--                                        <i class="fa-regular fa-lightbulb"></i> Travel Tips--}}
                        {{--                                    </button>--}}
                        {{--                                </h2>--}}
                        {{--                                <div id="panelsStayOpen-collapseEigth" class="accordion-collapse collapse">--}}
                        {{--                                    <div class="accordion-body">--}}
                        {{--                                        <p><b>Things to Keep in Mind:</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Please bring your medications as there are lack of resources in tour--}}
                        {{--                                                area--}}
                        {{--                                            </li>--}}
                        {{--                                            <li>Always keep cash with you</li>--}}
                        {{--                                            <li>Avoid long hikes and treks without a guide</li>--}}
                        {{--                                            <li>Keep a handy backpack</li>--}}
                        {{--                                            <li>Explore hidden locations</li>--}}
                        {{--                                            <li>Be mindful of the local culture</li>--}}
                        {{--                                            <li>Pack all your gadgets</li>--}}
                        {{--                                            <li>Research about the location before traveling</li>--}}
                        {{--                                            <li>Carry a basic first-aid kit box</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>Restaurant Recommendations: <br>For Local Cuisines:</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Hunza Food Pavilion by Laal Shehzadi</li>--}}
                        {{--                                            <li>Yak Grill</li>--}}
                        {{--                                            <li>Rewayat Restaurant</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>For Coffee and Desserts:</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Cafe de Hunza</li>--}}
                        {{--                                            <li>Mountain Cup Café</li>--}}
                        {{--                                            <li>Sweet Tooth</li>--}}
                        {{--                                            <li>Glacier Cake</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>What to expect in different seasons?--}}
                        {{--                                                <br>Winter (December - March)--}}
                        {{--                                            </b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Snow</li>--}}
                        {{--                                            <li>--}}
                        {{--                                                Winter Sports--}}
                        {{--                                            </li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>Spring (April - May) </b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Cherry Blossom</li>--}}
                        {{--                                            <li>Seasonal Fruits: apples, apricots, grapes, and peaches</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>Summer (June - August)</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Access to all major trekking routes/tracks--}}
                        {{--                                            </li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>Autumn (September - November)</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Fall colors</li>--}}
                        {{--                                            <li>Seasonal fruits: Mulberry and Plum</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <p><b>Local experiences:</b></p>--}}
                        {{--                                        <ul>--}}
                        {{--                                            <li>Cultural Lunch at a local’s house</li>--}}
                        {{--                                            <li>Cherry Picking</li>--}}
                        {{--                                            <li>Boating</li>--}}
                        {{--                                            <li>Treks</li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="accordion-item">--}}
                        {{--                                <h2 class="accordion-header">--}}
                        {{--                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                        {{--                                            data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"--}}
                        {{--                                            aria-controls="panelsStayOpen-collapseNine">--}}
                        {{--                                        <i class="fa-solid fa-bars"></i> Options--}}
                        {{--                                    </button>--}}
                        {{--                                </h2>--}}
                        {{--                                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse">--}}
                        {{--                                    <div class="accordion-body">--}}
                        {{--                                        <p><b>Duration :</b> 3 days</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTen">
                                    <i class="fa-regular fa-credit-card"></i>Policy
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        <b>
                                            Payment Policy:
                                        </b>
                                        &nbsp; Familiarize yourself with our payment policy to avoid any issues related
                                        to your booking. Please note the following:
                                    </p>
                                    <ul>
                                        <li>
                                            All advance payments are non-refundable
                                        </li>
                                        <li>We've introduced a unique 6-month redeemable payment plan for the first time
                                            in
                                            Pakistan. In case you are unable to join the trip on the selected dates, you
                                            can use
                                            your advance payment for any of our upcoming trips within a 6-month
                                            duration.</li>
                                    </ul>
                                    <p><b>Cancellation/Redeemable Criteria:</b></p>
                                    <ul>
                                        <li>
                                            Inform us about your cancellation at least 5 days before departure for full
                                            advance
                                            payment redemption
                                        </li>
                                        <li>If you inform us 3 days before departure, you can use 70% of the advance
                                            amount in
                                            your future trip</li>
                                        <li>No advance payment redemption is allowed if you inform us about cancellation
                                            within the last 3 days before departure</li>
                                    </ul>
                                    <p><b>Compliance and Understanding: </b> &nbsp; Kindly follow these guidelines
                                        diligently, and we request
                                        your cooperation in adhering to the outlined procedures. Failure to comply may
                                        result in
                                        inconvenience for other members. These measures have been implemented to ensure
                                        a
                                        hassle-free experience for all our customers. We appreciate your understanding
                                        and
                                        support in this regard.</p>
                                    <p><b>Kids Policy: </b></p>
                                    <ul>
                                        <li><b>No Charge: </b> &nbsp; We do not charge for kids who are 6 years old or
                                            younger.</li>
                                        <li><b>Full Charges: </b> &nbsp; Full charges will be applied for kids above 6
                                            years.</li>
                                        <li><b>Partial Charges: </b> &nbsp; For kids between 6 and 8 years who can
                                            manage on a jumper seat,
                                            we will charge 50%. However, for regular seats for kids above 6 years, full
                                            charges
                                            will be applied</li>
                                    </ul>
                                    <p>f you still have any queries or concerns, feel free to contact our representative
                                        or dial our
                                        helpline, <br>
                                        <a href="tel:+051-5913489">051-5913489</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @if($tour->available_to_book)
                <div class="book_this_tours">
                    <h4>Book This Tour</h4>
                    <hr>
                    <form id="booking-form" action="{{ route('front.bookings.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="tour_id" value="{{ $tour->id }}" />
                        <div class="booking_fields">
                            <div class="form-group w-100">
                                <label for="tour_departure_id">Departure</label>
                                <select name="tour_departure_id" id="tour_departure_id" class="form-control">
                                    <option value="">Select Departure Date</option>
                                    @foreach($tour->departures as $departure)
                                    <option value="{{ $departure->id }}">
                                        {{ $departure->departure_date->format('d F, Y') }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="main_trip_tickets">
                            <div class="tour_detailss">
                                <h4>Tickets:</h4>
                                <p class="please_select">please, select date first</p>
                            </div>
                            <div class="main_display_sec" style="display:none;">
                                <div class="ticketss_adults">
                                    <div class="input_select_title_value">
                                        Adult (18+ years) <span class="pricee">
                                            PKR {{ number_format($tour->price) }}
                                        </span>
                                    </div>
                                    <div class="inputs">
                                        <button type="button" data-decrease-adult>-</button>
                                        <input data-value-adult type="text" value="1" readonly required
                                            name="adult_persons" />
                                        <button type="button" data-increase-adult>+</button>
                                    </div>
                                </div>
                                <div class="ticketss_adults">
                                    <div class="input_select_title_value">
                                        Child (12+ years) <span class="pricee">
                                            PKR {{ number_format($tour->child_price) }}
                                        </span>
                                    </div>
                                    <div class="inputs">
                                        <button type="button" data-decrease-child>-</button>
                                        <input data-value-child type="text" value="0" readonly required
                                            name="child_persons" />
                                        <button type="button" data-increase-child>+</button>
                                    </div>
                                </div>
                            </div>
                            @if($user && $user->trip_coins > 0)
                            <div class="coin_usage">
                                <div class="form-group w-100">
                                    <label>
                                        <input type="checkbox" id="use_coins_checkbox" /> Use Coins?
                                    </label>
                                </div>
                                <div id="coins_input_container" style="display: none;">
                                    <div class="form-group w-100">
                                        <label for="coins_to_use">Coins to Use ({{ $user->trip_coins }} available)</label>
                                        <input type="number" name="coins_to_use" id="coins_to_use" class="form-control" 
                                               placeholder="Enter number of coins" min="0" max="{{ $user->trip_coins }}" value="0" 
                                               oninput="calculateDiscount()" />
                                        <small>100 coins = PKR 300</small>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-info">
                                You need to <a href="{{ route('login') }}">log in</a> to use your coins.
                            </div>
                        @endif
                            <div class="total_tickets_price">
                                <h4>Total:</h4>
                                <div class="total_amounts">
                                    PKR {{ number_format($tour->price) }}
                                </div>
                            </div>
                            <div class="glob_submitBook_btn">
                                <button type="submit" class="book-submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                @else
                <div class="request-free-tour">
                    <h5>Get Free Tour Consultation</h5>
                    @if(session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                    <form action="{{ route('store.consultation') }}" method="post">
                        @csrf
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
                            <input type="hidden" name="trip_title" value="{{ $tour->title }}">
                        </div>
                        <div class="form-field">
                            <input type="submit" value="Submit">
                        </div>

                    </form>
                </div>
                @endif

            </div>
        </div>
    </div>
</section>

<!-- commenting sec  -->
<section class="comments-secc">
    <div class="container">
        <div id="reviews" class="review-section">
            <h4>{{ $comments->count() }} Reviews</h4>
            <!-- Your sorting and star filter section -->

            <div class="review-list">
                <ul>
                    @foreach($comments as $comment)
                    <li>
                        <div class="d-flex">
                            <div class="left">
                                <span>
                                @php
                                $defaultMaleAvatar = 'https://www.pngall.com/wp-content/uploads/5/Profile-Male-PNG.png';
                                $defaultFemaleAvatar = 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fpngtree.com%2Ffree-png-vectors%2Fwoman-avatar&psig=AOvVaw2Hadj7XR6rK_7jxnN1GwX7&ust=1723088449770000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCID7yvz64YcDFQAAAAAdAAAAABAE';
                                $profilePicture = $comment->user->profile_picture_url;

                                if (!$profilePicture) {
                                    $profilePicture = $comment->user->gender === 'female' ? $defaultFemaleAvatar : $defaultMaleAvatar;
                                }
                            @endphp
                            <img src="{{ asset($profilePicture) }}" class="profile-pict-img img-fluid" alt="Profile Picture">
                                </span>
                            </div>
                            <div class="right">
                                <h4>
                                    {{ $comment->user->first_name }}
                                    <span class="gig-rating text-body-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                            <path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                            </path>
                                        </svg>
                                        {{ $comment->communication }}
                                    </span>
                                </h4>

                                <div class="review-description mt-2">
                                    <p>{{ $comment->comment }}</p>
                                </div>
                                <span class="publish py-3 d-inline-block w-100 mt-0">Published {{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="container">
            <h2>Add Testimonials</h2>
            <form action="{{ route('tour-comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="tour_id" value="{{ $tour->id }}">

                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="5" required></textarea>

                <div class="rating">
                    <label for="communication">Hotels Experience:</label>
                    <div class="starrrt">
                        <input type="radio" id="communication-1" name="communication" value=""><span class="star">★</span>
                        <input type="radio" id="communication-2" name="communication" value="4"><span class="star">★</span>
                        <input type="radio" id="communication-3" name="communication" value="3"><span class="star">★</span>
                        <input type="radio" id="communication-4" name="communication" value="2"><span class="star">★</span>
                        <input type="radio" id="communication-5" name="communication" value="1"><span class="star">★</span>
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

@endsection
@section('script')
<script>
    let adultPrice = {{ $tour->price }};
    let childPrice = {{ $tour->child_price ?? 0 }};

</script>
<script>
function calculateDiscount() {
    let coinsToUse = parseInt(document.getElementById('coins_to_use').value) || 0;
    let discount = (coinsToUse / 100) * 300; // Updated calculation
    let totalAmount = {{ $tour->price }};
    let finalTotal = totalAmount - discount;

    if (finalTotal < 0) {
        finalTotal = 0;
    }

    let totalAmountsElement = document.querySelector('.total_amounts');
    if (totalAmountsElement) {
        totalAmountsElement.innerText = `PKR ${finalTotal.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
    }
}



</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const useCoinsCheckbox = document.getElementById('use_coins_checkbox');
    const coinsInputContainer = document.getElementById('coins_input_container');

    useCoinsCheckbox.addEventListener('change', function() {
        if (useCoinsCheckbox.checked) {
            coinsInputContainer.style.display = 'block';
        } else {
            coinsInputContainer.style.display = 'none';
            document.getElementById('coins_to_use').value = 0;
            calculateDiscount(); // Reset the discount if the checkbox is unchecked
        }
    });
});
</script>
@endsection
