@extends('front.layouts.app')

@section('contents')
    <section class="hotel_detailss_sec_1">
        <div class="container">
            <div class="row bg-white">
                <div class="col-md-8">
                    <div class="images_carouse">
                        <ul class="main_slider hotel_main">
                            @if ($hotel->image)
                                <li><a data-fancybox="gallery" href="{{ $hotel->image }}">
                                    <img src="{{ $hotel->image }}" alt="{{ $hotel->name }}">
                                </a></li>
                            @endif
                            <!-- Add more images if needed -->
                        </ul>
                        <ul class="forNav hotel_nav">
                            @if ($hotel->image)
                                <li><a data-fancybox="gallery" href="{{ $hotel->image }}">
                                    <img src="{{ $hotel->image }}" alt="{{ $hotel->name }}">
                                </a></li>
                            @endif
                            <!-- Add more images if needed -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hotel_info_details">
                        <div class="hotel_type rating">
                            <h2>{{ $hotel->name }}</h2>
                            <div class="d-flex item_stars">
                                <span class="rating"><i class="fa-solid fa-star"></i><span class="star_text">{{ $hotel->rating }} Star</span></span>
                                <div class="location">
                                    <a href=""><svg class="svg-inline--fa fa-location-dot" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path></svg>
                                        <!-- <i class="fa-solid fa-location-dot"></i> Font Awesome fontawesome.com -->
                                        <span>{{ $hotel->address }}</span></a>
                                    {{-- @if (strpos($hotel->location, 'https://www.google.com/maps') !== false)
                                        <iframe src="{{ $hotel->location }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    @else
                                        <a href="{{ $hotel->location }}" target="_blank"><i class="fa-solid fa-location-dot"></i><span>{{ $hotel->address }}</span></a>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                        <div class="guest_rating">
                           <a href="#reviewws"> <button class="reviewss">See all reviews <i class="fa-solid fa-chevron-right"></i></button></a>
                            <span class="guest_rating_value">{{ $hotel->guest_rating }}/5.0 Good</span>
                        </div>
                        <div class="nearby">
                            <p class="small">What's Nearby</p>
                            @foreach(explode("\n", $hotel->nearby_locations) as $location)
                                @if(trim($location) !== '')
                                    <div style="display: flex; align-items: center;">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span style="margin-left: 5px;">{!! $location !!}</span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        {{-- <div class="couple_friendly">
                            <span><svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#couple-tag"></use>
                            </svg>Couple Friendly</span>
                            <div class="tooltip-inner">
                                <ul>
                                    <li>No marriage certificate needed</li>
                                    <li>Each guest's valid ID (NID, Passport etc) is needed</li>
                                    <li>Hassle-free check-in</li>
                                    <li>Guests must be adults</li>
                                </ul>
                            </div>
                        </div>
                        <div class="amenities">
                            <h5>Facilities</h5>
                            <ul>
                                <li><i class="fa-solid fa-house-medical"></i> Laundry Facilities</li>
                                <li><i class="fa-solid fa-utensils"></i> Restaurant</li>
                                <li><i class="fa-solid fa-house-medical"></i>TerraceLuggage Storage</li>
                                <li>Shop</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hotel_details_sec_2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="maincustom_list">
                        <ul>
                            {{-- <li><a href="#rooms">Rooms</a></li> --}}
                            <li><a href="#whats-nearby">What's Nearby</a></li>
                            <li><a href="#facilities">Facilities</a></li>
                            <li><a href="#policy">Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="hotel_descriptions">
                        <h5>Hotel Description</h5>
                        <div class="hotel_meta">
                            <span>Number of Rooms: {{ $hotel->number_of_rooms }}</span>
                            <span>Number of Floors: {{ $hotel->number_of_floors }}</span>
                            <span> Year of construction: {{ $hotel->year_of_construction }}</span>
                        </div>
                        <p id="mainText">
                            {!! $hotel->description !!}
                            <span id="dots">...</span>
                            <span id="moreText" style="display: none;">{!! $hotel->description !!}</span>
                        </p>
                        <a id="readMore" href="javascript:void(0);">Read More</a>
                        <a id="readLess" href="javascript:void(0);" style="display: none;">Read Less</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="book_this_hotel book_this_tours">
                        <h4>Book This Hotel</h4>
                        <hr>
                        <form id="hotel-booking-form  hotel-booking" action="{{ route('hotel_booking.store',$hotel) }}" method="POST" >
                            @csrf
                            <div class="booking_fields d-block mb-2">
                                <label for="room-type">Room Type</label>
                                <select id="room-type" name="room-type" class="form-control" required>
                                    @foreach($hotel->roomTypes as $roomType)
                                        <option value="{{ $roomType->type }}" data-price="{{ $roomType->price_per_night }}">
                                            {{ ucfirst($roomType->type) }} - PKR {{ $roomType->final_price }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="booking_fields">
                                <label for="book-hotel-from">From</label>
                                <input type="date" id="book-hotel-from" name="book-hotel-from" required>
                            </div>
                            <div class="booking_fields">
                                <label for="book-hotel-to">To</label>
                                <input type="date" id="book-hotel-to" name="book-hotel-to" required>
                            </div>
                            
                            <div class="booking_fields no-of-room">
                                <label for="number_of_rooms">No. of Rooms</label>
                                <input type="number" step="1" value="1" min="1" max="{{ $hotel->number_of_rooms }}" name="number_of_rooms" id="number_of_rooms" class="form-control" required />
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
                                <div class="total_amounts">PKR 0</div>
                                <p class="nights_rooms_message"></p>
                            </div>
                            <div class="glob_submitBook_btn">
                                <button type="submit" class="book-submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12" id="whats-nearby">
                    <div class="whats_nearby">
                        <h2>What's Nearby</h2>
                        <div class="row mt-3 bg-white">
                            <div class="col-md-6">
                                <div class="location_emb">
                                    @if (strpos($hotel->location, 'https://www.google.com/maps') !== false)
                                        <iframe src="{!! $hotel->location !!}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="address_points">
                                    <p class="small">Interest Points</p>
                                    {!! $hotel->nearby_locations !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" id="facilities">
                    <div class="facilites_sec">
                        <h2>Facilities</h2>
                        <div class="main_sec_facility">
                            {!! $hotel->facilities !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-12" id="policy">
                    <div class="hotels_rules">
                        <h2>Policy</h2>
                        <div class="rules_cointainer">
                            {!! $hotel->policy !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="comments-secc" id="reviewws">
        <div class="container">
            <div id="reviews" class="review-section">
            <h4>{{ $hotel->hotelComments()->count() }} Reviews</h4>

                <!-- Your sorting and star filter section -->
                @if(count($hotel->hotelComments) > 0)
                <div class="review-list">
                    <ul>
                        @foreach($hotel->hotelComments as $comment)
                        <li>
                            <div class="d-flex">
                                <div class="left">
                                    <span>
                                    <img src="{{ $comment->user?->avatar }}" class="profile-pict-img img-fluid" alt="Profile Picture">
                                    </span>
                                </div>
                                <div class="right">
                                    <h4>
                                        {{ $comment->user?->first_name }}
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
                @else
                    <p>No reviews available.</p>
                @endif
            </div>

            <div class="container">
                <h2>Add Testimonials</h2>
                <form action="{{ route('hotel-comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">

                    <label for="comment">Comment:</label>
                    <textarea id="comment" name="comment" rows="5" required></textarea>

                    <div class="rating">
                        <label for="communication">Hotels Experience:</label>
                        <div class="starrrt">
                            <input type="radio" id="communication-1" name="communication" value="5"><span class="star">★</span>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fromDateInput = document.getElementById('book-hotel-from');
            const toDateInput = document.getElementById('book-hotel-to');
            const roomTypeSelect = document.getElementById('room-type');
            const totalAmounts = document.querySelector('.total_amounts');
            const nightsRoomsMessage = document.querySelector('.nights_rooms_message');
            const numberOfRooms = document.getElementById('number_of_rooms');

            function calculateTotal() {
                const fromDate = new Date(fromDateInput.value);
                const toDate = new Date(toDateInput.value);
                const timeDiff = toDate.getTime() - fromDate.getTime();
                const dayDiff = timeDiff / (1000 * 3600 * 24);
                const selectedRoomType = roomTypeSelect.options[roomTypeSelect.selectedIndex];
                const roomPrice = parseFloat(selectedRoomType.getAttribute('data-price'));
                const totalRooms = parseInt(numberOfRooms.value);

                if (!isNaN(dayDiff) && dayDiff > 0 && !isNaN(roomPrice)) {
                    const totalPrice = dayDiff * roomPrice * totalRooms;
                    totalAmounts.textContent = `PKR ${totalPrice}`;
                    nightsRoomsMessage.textContent = `${dayDiff} nights`;
                } else {
                    totalAmounts.textContent = 'PKR 0';
                    nightsRoomsMessage.textContent = '';
                }
            }

            fromDateInput.addEventListener('change', calculateTotal);
            toDateInput.addEventListener('change', calculateTotal);
            roomTypeSelect.addEventListener('change', calculateTotal);
            numberOfRooms.addEventListener('change', calculateTotal);
        });
    </script>
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

<script>
    function calculateDiscount() {
        let coinsToUse = parseInt(document.getElementById('coins_to_use').value) || 0;
        let roomTypeSelect = document.getElementById('room-type');
        let selectedRoomTypePrice = parseFloat(roomTypeSelect.options[roomTypeSelect.selectedIndex].dataset.price);

        let discount = (coinsToUse / 100) * 300; // Updated calculation
        let finalTotal = selectedRoomTypePrice - discount;

        if (finalTotal < 0) {
            finalTotal = 0;
        }

        let totalAmountsElement = document.querySelector('.total_amounts');
        if (totalAmountsElement) {
            totalAmountsElement.innerText = `PKR ${finalTotal.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const useCoinsCheckbox = document.getElementById('use_coins_checkbox');
        const coinsInputContainer = document.getElementById('coins_input_container');
        const coinsInput = document.getElementById('coins_to_use');
        const roomTypeSelect = document.getElementById('room-type');

        useCoinsCheckbox.addEventListener('change', function() {
            if (useCoinsCheckbox.checked) {
                coinsInputContainer.style.display = 'block';
            } else {
                coinsInputContainer.style.display = 'none';
                coinsInput.value = 0;
                calculateDiscount(); // Reset the discount if the checkbox is unchecked
            }
        });

        // Add event listener to calculate discount when coins input changes
        coinsInput.addEventListener('input', function() {
            calculateDiscount();
        });

        // Recalculate the discount when room type changes
        roomTypeSelect.addEventListener('change', function() {
            calculateDiscount();
        });

        // Initial calculation
        calculateDiscount();
    });
</script>


