@extends('front.layouts.app')


@section('contents')
<section class="destinationss">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="destinations-content">
                    <h2>{{ $destination->name }}</h2>
                    <p>
                        {!! $destination->description !!}
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="main-destination-img">
                    <img src="{{ returnMedia($destination->picture?->media_file) }}" alt="">
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
                    {{-- <p>What’s new in</p> --}}
                    <h2>Destination Tours</h2>
                </div>
            </div>
            @foreach($destination->tours as $tour)
                <div class="col-md-4">
                    <div class="main_boxx box2">
                        <div class="deomestic_img">
                            <img src="{{ returnMedia($tour->media[0]->media_file) }}" alt="">
                            @if($tour->is_featured)
                                <div class="fav features">
                                    featured
                                </div>
                            @endif
                        </div>
                        <div class="demestic_content">
                            <div class="meta_itemss">
                                <div class="right_items">
                                    <span class="dayss">
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>{{ $tour->duration }} days</span>
                                    </span>
                                    <span class="users">
                                        <i class="fa-regular fa-user"></i>
                                        <span>{{ $tour->group_size }}</span>
                                    </span>
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
                                <h2>{{ $tour->title }}</h2>
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
                                    <a href="{{ route('front.tours.show',$tour->slug) }}">Explore <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
            <div class="col-md-12">
                <div class="glob_exxplore_bt">
                    {{-- <button class="explore_more">
                        Explore More<i class="fa-solid fa-arrow-right"></i>
                    </button> --}}
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
</section>
@endsection
