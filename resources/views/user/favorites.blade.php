@extends("front.layouts.app")

@section("header")

<link rel="stylesheet" href="{{asset("styles/plugins.css")}}">
<link rel="stylesheet" href="{{asset("styles/main.css")}}">

@endsection


@section("contents")
    <!-- Main Content -->
    <main id="rlr-main" class="rlr-main--fixed-top">
        <div class="rlr-section__content--md-top">
            <div class="rlr-section rlr-section__my">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 rlr-sidebar-menu__mobile">
                            <select class="rlr-sidebar-menu__sub-menu rlr-form-select" id="rlr-js-sub-menu" name="rlr-sub-menu">
                                <option>Navigate to...</option>
                                <option value="my-account-pages--dashboard">Dashboard</option>
                                <option value="my-account-pages--order">Orders</option>
                                <option value="my-account-pages--favorites">Favorites</option>
                                <option value="my-account-pages--dashboard">Account Details</option>
                                <option value="my-account-pages--dashboard">Logout</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        @include("user.includes.user-sidebar")
                        <div class="content col-lg-9 col-xs-12">
                            <div class="rlr-data-container woocommerce-MyAccount-content">
                                <h1 class="type-h3 rlr-data-table__title">Favorites</h1>
                                <div class="row rlr-search-results-page__card-wrapper">
                                    @foreach($favorites as $favorite)
                                        <div class="col-md-6 col-lg-4">
                                            <!-- Product card item -->
                                            <article class="rlr-product-card rlr-product-card--v3" itemscope itemtype="https://schema.org/Product">
                                                <!-- Product card image -->
                                                <figure class="rlr-product-card__image-wrapper">
                                                    @if($favorite->tour->is_featured)
                                                        <span class="rlr-badge rlr-badge-- rlr-badge--accent-red rlr-product-card__badge"> Featured </span>
                                                    @endif
                                                    <div class="rlr-product-detail-header__button-wrapper">
                                                        <button type="button"
                                                                class="btn rlr-button rlr-button--circle rlr-wishlist rlr-wishlist-button--light rlr-wishlist-button rlr-js-action-wishlist {{ $favorite->tour->is_favorite ? "is-active" : "" }}"
                                                                aria-label="Save to Wishlist" onclick="addToFavorite({{$favorite->tour->id}})" >
                                                            <i class="rlr-icon-font flaticon-heart-1"> </i>
                                                        </button>
                                                        <span class="rlr-product-detail-header__helptext rlr-js-helptext"></span>
                                                    </div>
                                                    <a href="{{ route('front.tours.show',$favorite->tour->slug) }}">
                                                        <div class="swiper rlr-js-product-multi-image-swiper">
                                                            <div class="swiper-wrapper">
                                                                @foreach($favorite->tour->media as $media)
                                                                    <div class="swiper-slide">
                                                                        @if($media->mime === "image/jpg" || $media->mime === "image/png")
                                                                            <img src="{{ returnMedia($media->media_file) }}"  itemprop="image" data-sizes="auto" data-src="{{ returnMedia($media->media_file) }}" data-srcset="{{ returnMedia($media->media_file) }}" class="lazyload tour-pic" alt="{{ $media->alt_text }}" />
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <button type="button" class="btn rlr-button splide__arrow splide__arrow--prev" aria-label="prev button">
                                                                <i class="rlr-icon-font flaticon-left-chevron"> </i>
                                                            </button>
                                                            <button type="button" class="btn rlr-button splide__arrow splide__arrow--next" aria-label="next button">
                                                                <i class="rlr-icon-font flaticon-chevron"> </i>
                                                            </button>
                                                        </div>
                                                    </a>
                                                </figure>
                                                <div class="rlr-product-card__detail-wrapper rlr-js-detail-wrapper">
                                                    <!-- Product card header -->
                                                    <header class="rlr-product-card__header">
                                                        <div>
                                                            <a href="{{ route('front.tours.show',$favorite->tour->slug) }}" class="rlr-product-card__anchor-title">
                                                                <h2 class="rlr-product-card__title" itemprop="name">{{ $favorite->tour->title }}</h2>
                                                            </a>
                                                            <div>
                                                                <a href="{{ route('front.tours.show',$favorite->tour->id) }}" class="rlr-product-card__anchor-cat">
                                                                    <span class="rlr-product-card__sub-title">{{ implode(", ",$favorite->tour->categories->pluck('name')->toArray()) }}</span>
                                                                </a>
                                                                <span class="rlr-product-card__sub-title">|</span>
                                                                <a href="{{ route('front.tours.show',$favorite->tour->id) }}" class="rlr-product-card__anchor-sub-cat">
                                                                    <span class="rlr-product-card__sub-title">{{ $favorite->tour->location }}</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <!-- Product card body -->
                                                    <div class="rlr-product-card__details">
                                                        <div class="rlr-product-card__prices" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                                            <span class="rlr-product-card__from">from </span>
                                                            <span class="rlr-product-card__price"> <mark itemprop="priceCurrency">PKR&nbsp;</mark><mark itemprop="price">{{$favorite->tour->price}}</mark> </span>
                                                        </div>
                                                        <div class="rlr-product-card__ratings" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                            <div class="rlr-review-stars" itemprop="ratingValue" itemscope itemtype="https://schema.org/Product">
                                                                <i class="rlr-icon-font flaticon-star{{ $favorite->tour->rating >= 1 ? "-1" : "" }}"> </i>
                                                                <i class="rlr-icon-font flaticon-star{{ $favorite->tour->rating >= 2 ? "-1" : "" }}"> </i>
                                                                <i class="rlr-icon-font flaticon-star{{ $favorite->tour->rating >= 3 ? "-1" : "" }}"> </i>
                                                                <i class="rlr-icon-font flaticon-star{{ $favorite->tour->rating >= 4 ? "-1" : "" }}"> </i>
                                                                <i class="rlr-icon-font flaticon-star{{ $favorite->tour->rating >= 5 ? "-1" : "" }}"> </i>
                                                            </div>
                                                            <span class="rlr-product-card__rating-text" itemprop="reviewCount">{{ number_format($favorite->tour->rating,1) ?? "0" }} ({{ $favorite->tour->rating_count ?? "0" }})</span>
                                                        </div>
                                                    </div>
                                                    <!-- Product card footer -->
                                                    <div class="rlr-product-card__footer">
                                                        <div class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-three-o-clock-clock"> </i> <span class="">{{ $favorite->tour->duration }} Days </span></div>
                                                        {{--                                            <ul class="rlr-product-card__icon-text-list">--}}
                                                        {{--                                                <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">New on Emprise </span></li>--}}
                                                        {{--                                                <li class="rlr-icon-text rlr-product-card__icon-text"><i class="rlr-icon-font flaticon-check"> </i> <span class="rlr-icon-text__title">Free Cancellation </span></li>--}}
                                                        {{--                                            </ul>--}}
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        function addToFavorite(tour_id){
            $.post("{{route('front.favorites.store')}}",{_token:"{{csrf_token()}}",tour_id: tour_id},function(e){
            });
        }
    </script>
@endsection
