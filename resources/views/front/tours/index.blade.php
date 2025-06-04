@extends('front.layouts.app')


@section('contents')
    <section class="location_list_sec_1">
        <div class="container">
            <div class="full searchbar-hidden">
                <div class="flight_containerrr">
                    <form action="{{ route('front.tours.index') }}" method="get">
                        <input type="hidden" name="destination" value="{{ request()->destination ? request()->destination : $allDestinations[0]->name }}">
                        <div class="tour_search_bar">
                            <div class="tour_box" id="tourBox">
                                <span class="label">Location/ Tour</span>
                                <div class="value">{{ request()->destination ? request()->destination : $allDestinations[0]->name }}</div>
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
                            <button type="submit" class="search-btn">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="location_list_sec_2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="tour_filter">
                        <div class="metainfor">
                            <h5>Destination: 8 places found</h5>
                        </div>
                        <div class="filter_header">
                            <h5>Filter By</h5>
                        </div>
                        <div class="filter_container">
                            <div class="price_rangee">
                                <h5>Price Range</h5>
                                <div class="range-container">
                                    <div class="input-range-wrapper">
                                        <input id="rangeMin" type="range" min="2000" max="80000" value="{{$priceMin}}" step="10">
                                        <input id="rangeMax" type="range" min="2000" max="80000" value="{{$priceMax}}" step="10">
                                    </div>
                                    <div class="number-value">
                                        <span id="minAmount" class="min-amount">PKR 20,000</span>
                                        <span id="maxAmount" class="max-amount">PKR 80,000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="filter duration">
                                <h5>Duration</h5>
                                <div class="duration-wrapper">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="1-duration" name="duration" {{in_array('0-1',$durations)?'checked':null}} value="0-1">
                                        <label for="1-duration">
                                            <span>Less than 1 Day</span>
                                        </label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="3-5-duration" name="duration" {{in_array('3-5',$durations)?'checked':null}} value="3-5">
                                        <label for="3-5-duration">
                                            <span>3 - 5 Days</span>
                                        </label>
                                    </div>


                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="6-10-duration" name="duration" {{in_array('6-10',$durations)?'checked':null}} value="6-10">
                                        <label for="6-10-duration">
                                            <span>6 - 10 Days</span>
                                        </label>
                                    </div>

                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="10-duration" name="duration" {{in_array('10-100',$durations)?'checked':null}} value="10-100">
                                        <label for="10-duration">
                                            <span>More Than 10 Days</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            {{-- <div class="filter-type time">
                                <h5>Time</h5>
                                <div class="demo-inline-spacing">
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox1" value="0">
                                        <label for="checkbox1">
                                            <div class="input-content">
                                              <img src="{{asset('assets/images/sun-weather.png')}}" alt="">
                                                <span class="text">00-06</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox2" value="1">
                                        <label for="checkbox2">
                                            <div class="input-content">
                                                <img src="{{asset('assets/images/sun-weather.png')}}" alt="">
                                                <span class="text">06-12</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox3" value="2">
                                        <label for="checkbox3">
                                            <div class="input-content">
                                                <img src="{{asset('assets/images/sun-set-weather.png')}}" alt="">
                                                <span class="text">12-18</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="brand-block-checkbox">
                                        <input type="checkbox" id="checkbox4" value="3">
                                        <label for="checkbox4">
                                            <div class="input-content">
                                                <img src="{{asset('assets/images/moon-weather.png')}}" alt="">
                                                <span class="text">18-00</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                            </div> --}}
                            <div class="filter-type tagss">
                                <h5>Categories</h5>
                                <div class="tag-wrapper" id="tagWrapper">
                                    @foreach($allCategories as $category)
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="category_{{$category->id}}" name="category" value="{{ $category->id }}" {{ in_array($category->id,$categories) ? 'checked' : '' }} >
                                            <label for="category_{{$category->id}}"><small>{{ $category->name }}</small></label>
                                        </div>
                                    @endforeach
                                </div>
                                <button id="toggleButton" onclick="toggleCheckboxes()">Show More</button>



                            </div>
                            <div class="reset-filter-btn p-1">
                                <a href="/tours"><button type="button" class="btn btn-secondary btn-block">
                                    Reset Filters
                                </button></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tour_list-container">


                        <div class="tour_list-container-appends"></div>



                        <div class="">
                            <div class="label-info ">
                                <p class="text text-info">
                                    Showing <span id="showingResult">0</span> of <span id="showingResultOf">0</span>
                                </p>
                            </div>
                            <div class="looad_moree">
                            <button class="btn " id="load-more">Load More</button>
                        </div>
                        </div>


{{--                            @if($tours->currentPage() != $tours->lastPage())--}}
{{--                                <li class="page-item rlr-pagination__page-item">--}}
{{--                                    <a class="btn btn-transparent" href="{{ $tours->appends($_GET)->url($tours->lastPage()) }}" aria-label="Last">--}}
{{--                                        <span aria-hidden="true">Last</span>--}}
{{--                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M4.167 10h11.666m0 0L10 4.167M15.833 10 10 15.833" stroke="var(--body-color)" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

                        <div class="custom-tour-wrapper text-center">
                            <div class="tour-request-bar white" style="width: 100%;">
                                <p class="mb-sm-0 mb-1">Need a Customized Tour?</p>
                                <a href="/custom-tour"><button type="button" class="btn btn-secondary">Request Now</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('script')
    <script>

        let durations = {!! json_encode($durations) !!};
        let categories = {!! json_encode($categories) !!};
        function addToFavorite(tour_id){
            @auth
            $.post("{{route('front.favorites.store')}}",{_token:"{{csrf_token()}}",tour_id: tour_id},function(e){
            });
            @endauth
            @guest
            alert('You need to Login First!');
            @endguest
        }


        const baseUrl = '{{url('/')}}/';

        const toursUrl = "{{ route('front.tours.index') }}";

    </script>
    <script src="{{asset('assets/js/tours.js')}}"></script>

@endsection
