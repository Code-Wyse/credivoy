@extends('front.layouts.app')

@section('contents')

<section class="loyalty_sec_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="loyalty_sec_">
                    <div class="loyalty_logo_gif">
                        <img src="assets/images/loyalty-logo.gif" alt="">
                    </div>
                    <p>[Brand Name]'s Loyalty Program</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loyalty_sec_2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="lifesloong_rewars">
                    @guest
                    <div class="box_reward_outer">
                        <div class="box_rewards">
                            <h4>Start Saving Now. Unlock Lifelong <span>REWARDS</span></h4>
                            <div class="download_sec">
                                <div class="reward_offer_para">
                                    <p>Join and instantly receive member rewards, discounts on 3,000+ hotels
                                        worldwide,
                                        and more perks.</p>
                                    <a href="{{ route('login') }}"><button class="join_now btn">Join Now - It's
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
                            <img src="{{ asset('assets/images/gift.png') }}" alt="">
                        </div>
                    </div>
                    @else
                    <div class="box_reward_outer another-gift-silverr">
                        <h4>Hi {{ $user->first_name }} {{ $user->last_name }}, congrats on being a [Brand Name] {{ ($user->membership->type) }} Tier Member </h4>
                        <div class="d-flex">
                        <div class="your-membership">
                            <div class="member-tier-info">
                                <div class="teir-logo-img">
                                    <img src="assets/images/silver_reward.png" alt="">
                                </div>
                                <div class="member-tier-notice_title">
                                    <h4>You're a {{ ucfirst($user->membership->type) }} Tier Member</h4>
                                
                                    @if ($nextUpgradeBookings > 0)
                                        <p>Instantly Upgrade to access {{ ucfirst($nextTier) }} Tier Rewards</p>
                                    @else
                                        <p>You have reached the highest tier</p>
                                    @endif                              
                                </div>
                                
                                                              
                            </div>
                            <div class="exps-bar-con">
                                <div data-tooltip-id="standard-tooltip" class="tripui-h5-click-bg exps-bar-node silver">
                                    <div class="tier-logo"></div>
                                </div>
                                <div class="exps-bar-order-node arc silver"></div>
                            
                                <div data-tooltip-id="premium-tooltip" class="tripui-h5-click-bg exps-bar-node gold">
                                    <div class="tier-logo"></div>
                                </div>
                                <div class="exps-bar-order-node arc-left silver"></div>
                                <div class="exps-bar-order-node arc-right silver"></div>
                            
                                <div data-tooltip-id="elite-tooltip" class="tripui-h5-click-bg exps-bar-node platinum">
                                    <div class="tier-logo"></div>
                                </div>
                                <div class="exps-bar-order-node arc-left silver"></div>
                                <div class="exps-bar-order-node middle silver"></div>
                                <div class="exps-bar-order-node middle silver"></div>
                                <div class="exps-bar-order-node arc-right silver"></div>
                            
                                <div data-tooltip-id="signature-tooltip" class="tripui-h5-click-bg exps-bar-node diamond">
                                    <div class="tier-logo"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="member-coins-con">
                            <div class="member-coins-content">
                                <div class="main-member-coins-info "><i class="coins-logo"></i>
                                    <div class="member-coins-info"><span class="member-coins-count">=PKR {{ number_format($user->trip_coins * 300 / 100, 2) }} </span><span
                                            class="member-coins-exchange-amount"><span
                                                class="member-coins-exchange-amount-text"><span>Trip
                                                    Coins</span>&nbsp;:&nbsp;<span>{{ $user->trip_coins }}</span>&nbsp; <i
                                                    class="icon fi fi-info tripui-h5-click"></i>&nbsp; <span
                                                    class="divider"></span></span></span><span
                                            class="member-coins-history tripui-h5-click"> <i
                                                class="arrow fi fi-arrow-right"></i></span></div>
                                </div>
                                <div class="exchange-tips-content "><span class="exchange-tips-title">More Trip Coins
                                        Details:</span><span class="exchange-tips-desc">Read the full detailed description about the Trip Coins at the bottom of the page   </span></div>
                            </div>
                            <div class="download-qrcode">
                                <div class="tcp-online-newadq default">

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    @endauth
                    <div class="tripss_rewardss_packages">
                        <h5><span>[Brand Name] Rewards</span></h5>
                        <h2>Earning rewards through our loyalty program is fast, easy, and most importantly,
                            free!</h2>
                        <ul>
                            <li id="Join-now">
                                <div class="packages_outer">
                                    <div class="packages_head">
                                        <div class="icon_level_reward_img">
                                            <img src="assets/images/silver_reward.png" alt="">
                                        </div>
                                        <h4>Standard</h4>
                                        <p>When you sign up</p>
                                    </div>
                                    <div class="packages_list1">
                                        <ul>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/silver-list1.png" alt="">
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Earn trip coins only</p>
                                                </div>
                                            </li>
                                            {{-- <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/silver-list2.png" alt="">
                                                    <span>5%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Up to 5% Off Hotels</p>
                                                </div>
                                            </li> --}}
                                        </ul>
                                    </div>
                                    @guest
                                    @php
                                    $standardMembership = $memberships->where('type', 'Standard')->first();
                                    @endphp
                                
                                    @if($standardMembership)
                                        <div class="btn_join_now">
                                            <form action="{{ route('membership.purchase') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="membership_id" value="{{ $standardMembership->id }}">
                                                <button type="submit" class="join_now btn">Join Now - It's Free</button>
                                            </form>
                                        </div>
                                    @else
                                        <p>Standard Membership not found.</p>
                                    @endif
                                    @endguest
                                </div>
                            </li>
                            <li>
                                <div class="packages_outer gold">
                                    <div class="packages_head gold">
                                        <div class="icon_level_reward_img">
                                            <img src="assets/images/gold_reward.png" alt="">
                                        </div>
                                        <h4>Premium</h4>
                                        <p>Instantly upgrade with just <strong>Rs 1999</strong></p>
                                    </div>
                                    <div class="packages_list1">
                                        <ul>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/gold-list1.png" alt="">
                                                    <span>5%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Earn 5% more trip 
                                                        coins</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/gold-list2.png" alt="">
                                                    <span>5%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Upto 5% discount 
                                                        on all trips</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/gold-list3.png" alt="">
                                                    <span>5%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Upto 5% discount 
                                                        on all hotels</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/gold-list3.png" alt="">
                                                    {{-- <span>5%</span> --}}
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Physical Card</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/gold-list3.png" alt="">
                                                    <span>5%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Upto 5% discount 
                                                        on restaurants 
                                                        across pakistan</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/gold-list3.png" alt="">
                                                    <span>5%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Pay trip amount in 
                                                        03 months 
                                                        Installments with 
                                                        0% interest</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @php
                                    $premiumMembership = $memberships->where('type', 'Premium')->first();
                                @endphp
                                
                                @if($premiumMembership)
                                    <div class="btn_join_now">
                                        <form action="{{ route('membership.purchase') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="membership_id" value="{{ $premiumMembership->id }}">
                                            <button type="submit" class="join_now btn">Buy Now</button>
                                        </form>
                                    </div>
                                @else
                                    <p>Premium Membership not found.</p>
                                @endif
                                </div>
                            </li>
                            <li>
                                <div class="packages_outer Platinum">
                                    <div class="packages_head Platinum">
                                        <div class="icon_level_reward_img">
                                            <img src="assets/images/platinum_reward.png" alt="">
                                        </div>
                                        <h4>Elite</h4>
                                        <p>Instantly upgrade with just <strong>Rs 3999</strong></p>
                                    </div>
                                    <div class="packages_list1">
                                        <ul>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/platinum-list1.png" alt="">
                                                    <span>15%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Earn 15% more trip 
                                                        coins</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/platinum-list2.png" alt="">
                                                    <span>10%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Upto 10% discount 
                                                        on all trips</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/platinum-list3.png" alt="">
                                                    <span>10%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Upto 10% discount 
                                                        on all hotels</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/platinum-list4.png" alt="">
                                                    {{-- <span>x2</span> --}}
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Physical Card</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/platinum-list5.png" alt="">
                                                    <span>10%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Upto 10% discount 
                                                        on restaurants 
                                                        across pakistan</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/platinum-list5.png" alt="">
                                                    <span>10%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Pay trip amount in 
                                                        06 months 
                                                        Installments with 
                                                        0% interest</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @php
                                    $eliteMembership = $memberships->where('type', 'Elite')->first();
                                @endphp
                                
                                @if($eliteMembership)
                                    <div class="btn_join_now">
                                        <form action="{{ route('membership.purchase') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="membership_id" value="{{ $eliteMembership->id }}">
                                            <button type="submit" class="join_now btn">Buy Now</button>
                                        </form>
                                    </div>
                                @else
                                    <p>Elite Membership not found.</p>
                                @endif
                                </div>
                            </li>
                            <li>
                                <div class="packages_outer Diamond">
                                    <div class="packages_head Diamond">
                                        <div class="icon_level_reward_img">
                                            <img src="assets/images/diamond_reward.png" alt="">
                                        </div>
                                        <h4>Signature</h4>
                                        <p>Instantly upgrade with just <strong>Rs 7999</strong></p>
                                    </div>
                                    <div class="packages_list1">
                                        <ul>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/diamond-list1.png" alt="">
                                                    <span>30%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Earn 30% more trip 
                                                        coins</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/diamond-list2.png" alt="">
                                                    <span>15%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Upto 15% discount 
                                                        on all trips</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/diamond-list3.png" alt="">
                                                    <span>20%</span>
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Upto 20% discount 
                                                        on all hotels</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/diamond-list4.png" alt="">
                                                    {{-- <span>x4</span> --}}
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Physical Card</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/diamond-list5.png" alt="">
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Upto 20% discount 
                                                        on restaurants 
                                                        across pakistan</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_packages_icons">
                                                    <img src="assets/images/diamond-list5.png" alt="">
                                                </div>
                                                <div class="list_packages_para">
                                                    <p>Pay trip amount in 
                                                        12 months 
                                                        Installments with 
                                                        0% interest</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @php
                                    $signatureMembership = $memberships->where('type', 'Signature')->first();
                                @endphp
                                
                                @if($signatureMembership)
                                    <div class="btn_join_now">
                                        <form action="{{ route('membership.purchase') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="membership_id" value="{{ $signatureMembership->id }}">
                                            <button type="submit" class="join_now btn">Buy Now</button>
                                        </form>
                                    </div>
                                @else
                                    <p>Signature Membership not found.</p>
                                @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-5 member_level_reward">
                        <h4>Plus, all [Brand Name] members enjoy</h4>
                        <ul>
                            <li>
                                <div class="level_reward_ico">
                                    <img src="assets/images/level_reward1.png" alt="">
                                </div>
                                <div class="level_reward_para">
                                    <p>Use Trip Coins Like Cash</p>
                                </div>
                            </li>
                            <li>
                                <div class="level_reward_ico">
                                    <img src="assets/images/level_reward2.png" alt="">
                                </div>
                                <div class="level_reward_para">
                                    <p>Trip-Hotel Cancellation Guarantee</p>
                                </div>
                            </li>
                            <li>
                                <div class="level_reward_ico">
                                    <img src="assets/images/level_reward3.png" alt="">
                                </div>
                                <div class="level_reward_para">
                                    <p> Trip-Hotel Price Alerts</p>
                                </div>
                            </li>

                            <li>
                                <div class="level_reward_ico">
                                    <img src="assets/images/level_reward4.png" alt="">
                                </div>
                                <div class="level_reward_para">
                                    <p>24/7 Support</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loyalty_sec_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="better_prices_sec">
                    <h5>Better Prices</h5>
                    <h2>Member-Only Rates</h2>
                    <div class="pricing_tabing">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach($destinations as $k=>$destination)
                            <li class="nav-item" role="presentation">
                                <button @class(['nav-link', 'active'=> $k == 0])
                                    id="destination-tab-{{$destination->id}}" data-bs-toggle="tab"
                                    data-bs-target="#tab-pane-{{$destination->id}}" type="button" role="tab"
                                    aria-controls="tab-pane-{{$destination->id}}"
                                    aria-selected="true">{{ $destination->name }}
                                </button>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @foreach($destinations as $k=>$destination)
                            <div @class(['tab-pane','fade','show'=> $k == 0,'active' => $k == 0])
                                id="tab-pane-{{$destination->id}}" role="tabpanel"
                                aria-labelledby="tab-{{$destination->id}}" tabindex="0">
                                <div class="main_loyalty_container">
                                    <div class="row">
                                        @foreach($destination->hotels as $hotel)
                                        <div class="col-md-4">
                                            <div class="main_boxx box2">
                                                <div class="deomestic_img">
                                                    <img src="{{$hotel->image}}" alt="">
                                                    <div class="fav features">
                                                        featured
                                                    </div>
                                                </div>
                                                <div class="demestic_content">
                                                    <div class="meta_itemss hotels_sec">
                                                        <div class="rch_ratingcontainer">
                                                            <div class="rating">
                                                                <span>{{ $hotel->rating }}</span>
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
                                                        <i class="fa-solid fa-location-dot"></i>
                                                        <span>{{ $hotel->address }}</span>
                                                    </div>
                                                    <div class="add_sign_line">
                                                        @guest
                                                        <p><i class="fa-solid fa-key"></i> Sign in or register to enjoy
                                                            special discounts</p>
                                                        @endguest
                                                    </div>
                                                    <div class="item_bottom hotels_bottom">
                                                        <div class="item_price">
                                                            <h6>Starting From</h6>
                                                            <h3>PKR
                                                                <strong>{{ $hotel->roomTypes[0]->price_per_night }}</strong>
                                                            </h3>
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
</section>

<section class="loyalty_sec_4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more_savings_sec">
                    <h5>More Savings</h5>
                    <h2>Save More With Coins!</h2>
                    <div class="more_savingg_tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Earn-tab" data-bs-toggle="tab"
                                    data-bs-target="#Earn-tab-pane" type="button" role="tab"
                                    aria-controls="Earn-tab-pane" aria-selected="true">How to Earn
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Use-tab" data-bs-toggle="tab"
                                    data-bs-target="#Use-tab-pane" type="button" role="tab" aria-controls="Use-tab-pane"
                                    aria-selected="false">How to Use
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Earn-tab-pane" role="tabpanel"
                                aria-labelledby="Earn-tab" tabindex="0">
                                <div class="main_saving_sec">
                                    <div class="module_to_earns_content">
                                        <h4>Earn Coins with Every Booking</h4>
                                        <p>For every 10000 or equivalent spent, you'll earn:</p>
                                        <ul class="module_earn_upper_coinss">
                                            <li>
                                                <div class="coins_earns_box">
                                                    <div class="coin_earns_icons">
                                                        <span>+75</span>
                                                    </div>
                                                    <h6>Coins for booking hotels</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="coins_earns_box">
                                                    <div class="coin_earns_icons">
                                                        <span>+100</span>
                                                    </div>
                                                    <h6>Coins for booking trips</h6>
                                                </div>
                                            </li>
                                            {{-- <li>
                                                <div class="coins_earns_box">
                                                    <div class="coin_earns_icons">
                                                        <span>+50</span>
                                                    </div>
                                                    <h6>Buy gift cards</h6>
                                                </div>
                                            </li> --}}
                                        </ul>
                                        <h4 class="mt-4">The higher your member tier, the more Trip Coins you earn</h4>
                                        <ul class="module_member_earn_coins">
                                            <li>
                                                <div class="member_earn_coind">
                                                    <div class="ico_member">
                                                        <span>+0%</span>
                                                    </div>
                                                    <h6>Standard</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="member_earn_coind">
                                                    <div class="ico_member">
                                                        <span>+10%</span>
                                                    </div>
                                                    <h6>Premium</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="member_earn_coind">
                                                    <div class="ico_member">
                                                        <span>+25%</span>
                                                    </div>
                                                    <h6>Elite</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="member_earn_coind">
                                                    <div class="ico_member">
                                                        <span>+40%</span>
                                                    </div>
                                                    <h6>Signature</h6>
                                                </div>
                                            </li>
                                        </ul>
                                        @guest
                                        <div class="btnss">
                                            <a href="{{ route('login') }}"> <button class="joins_now">Join Now - It's
                                                    Free</button></a>
                                        </div>
                                        @endguest
                                    </div>
                                    <div class="member_coinss_main_images">
                                        <img src="assets/images/saving_first1.png" alt="">
                                        <span class="first">
                                            Hotels
                                        </span>
                                        <div class="lower_txt">
                                            <h6>After you complete your stay, you'll earn</h6>
                                            <h5><b>75 Trip Coins</b></h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="Use-tab-pane" role="tabpanel" aria-labelledby="Use-tab"
                                tabindex="0">
                                <div class="main_saving_sec">
                                    <div class="module_to_earns_content">
                                        <h4>Spend Trip Coins Like Cash for Instant Savings</h4>
                                        <p>100 Trip Coins ≈ PKR 300</p>
                                        <h4>Use your coins to save on:</h4>
                                        <ul class="how_use_tabss">
                                            <li>
                                                <i class="fa-solid fa-hotel"></i> <span>Hotels</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-car"></i> <span>Car Rentals</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-plane-departure"></i> <span>Restaurants</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-chess"></i> <span>Trips</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-train"></i> <span>Entry Tickets</span>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-plane-arrival"></i>
                                                <span>Airport Transfers</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="member_coinss_main_images how_usee">
                                        <img src="assets/images/saving_first2.png" alt="">
                                        <span class="first">
                                            Book
                                        </span>
                                        <div class="lower_txt">

                                            <h5><b>Trip Coins</b></h5>
                                            <p>- US$10.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loyalty_sec_5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="how_its_works">
                    <h5>How It Works</h5>
                    <h2>The More You Pay, the Higher You Go</h2>
                    <ul>
                        <li>
                            <div class="member_upgrade_boxx">
                                <div class="icon">
                                    <img src="assets/images/silver_reward.png" alt="">
                                    <p>Standard</p>
                                </div>
                                <h6>Sign up</h6>
                            </div>
                        </li>
                        <li>
                            <div class="member_upgrade_boxx gold">
                                <div class="icon">
                                    <img src="assets/images/gold_reward.png" alt="">
                                    <p>Premium</p>
                                </div>
                                <h6>Upgrade with Rs 
                                    1999</h6>
                            </div>
                        </li>
                        <li>
                            <div class="member_upgrade_boxx platinum">
                                <div class="icon">
                                    <img src="assets/images/platinum_reward.png" alt="">
                                    <p>Elite</p>
                                </div>
                                <h6>Upgrade with Rs 
                                    3999</h6>
                            </div>
                        </li>
                        <li>
                            <div class="member_upgrade_boxx diamond">
                                <div class="icon">
                                    <img src="assets/images/diamondd.png" alt="">
                                    <p>Signature</p>
                                </div>
                                <h6>Upgrade with Rs 
                                    7999</h6>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-5 download_content_boxx">

                        <div class="download_main">
                            <h5>Start Earning Rewards Today!</h5>
                            @guest
                            <a href="{{ route('login') }}"><button class="join_now">Join Now - It's Free</button></a>
                            @endguest
                        </div>

                        <div class="download_right">
                            {{-- <div class="divider">
                                    <span>or</span>
                                </div> --}}
                            <div class="box_gift_img secon_replace_qr">
                                <img src="assets/images/gift.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="loyalty_sec_6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="faqs_sec">
                    <h2>FAQ</h2>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Member Tier Status
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Trip Coins
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Terms & Conditions
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="main_faqs_tabss_sec">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                How does the member tier system work?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="faqs_inner">
                                                    <p>Starting in June 2023, [Brand Name] will be rolling
                                                        out all-new
                                                        standards of classification for member tiers. Member tiers
                                                        will
                                                        no longer be determined according to tier points. Instead,
                                                        they
                                                        will be determined by the number of valid bookings that were
                                                        made within the past 12 months. The requirements for the
                                                        number
                                                        of bookings corresponding to each member tier within the
                                                        settlement period are as follows:</p>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;">Member Tier</th>
                                                                <th style="width: 30%;">Number of Bookings Requirements
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Silver</td>
                                                                <td>Register and receive</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gold</td>
                                                                <td>At least 1 completed booking</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Platinum</td>
                                                                <td>At least 3 completed bookings</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diamond</td>
                                                                <td>At least 8 completed bookings</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>Hotel bookings will be counted towards membership upgrades
                                                        after
                                                        your check-out has been confirmed, typically within 2–6
                                                        weeks
                                                        after check-out. In some cases, it may take longer for the
                                                        hotel
                                                        to confirm your check-out, resulting in a slower upgrade
                                                        process. Flight bookings will be counted towards membership
                                                        upgrades after the flight has departed.[Brand Name]
                                                        will decide
                                                        based on the risk assessments whether the related booking
                                                        can be
                                                        counted if it is discovered to have been made by a malicious
                                                        user, including but not limited to users who make malicious
                                                        bookings for membership tier upgrades. [Brand Name]
                                                        reserves all
                                                        rights of final interpretation of these rules as well as the
                                                        right to modify them. We recommend upgrading your [Brand Name]
                                                        International
                                                        app
                                                        to version 7.73.0 or above, so that you can experience the
                                                        new
                                                        membership page.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How long are member tiers valid for?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="faqs_inner">
                                                    <p>Starting in April 2023, [Brand Name] will be
                                                        releasing a new
                                                        member
                                                        tier validity mechanism: For users who attain a tier upgrade
                                                        by
                                                        completing a booking, their member tier will be extended by
                                                        1
                                                        year starting from the date their member tier changed. After
                                                        this expires, we will then reset your member tier according
                                                        to
                                                        your settlement date. Regarding member tier validity for
                                                        promotional membership trials, see the terms and conditions
                                                        that
                                                        are revealed at the time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                How can I advance my member tier?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="faqs_inner">
                                                    <p>On the Rewards Center page, it will display how many bookings
                                                        you
                                                        still need to complete before you can upgrade to the next
                                                        member
                                                        tier.Once the number of bookings you complete meets the
                                                        requirements for each membership tier before the expiration
                                                        date
                                                        of your current membership tier, you will complete the
                                                        corresponding upgrade. The specific method for doing so is
                                                        as
                                                        follows:</p>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Current Tier</th>
                                                                <th>Upgrade Method</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Unregistered user</td>
                                                                <td>Register a [Brand Name] account and
                                                                    sign in to become a
                                                                    Silver member
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Silver</td>
                                                                <td>Complete 1 booking within the member tier validity
                                                                    period to upgrade to a Gold tier, complete 3
                                                                    bookings to upgrade to a Platinum tier, and complete
                                                                    8 bookings to upgrade to a Diamond tier
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gold</td>
                                                                <td>Complete 2 bookings within the member tier validity
                                                                    period to upgrade to a Platinum tier, and complete 7
                                                                    bookings to upgrade to a Diamond tier
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Platinum</td>
                                                                <td>Complete 5 bookings within the member tier validity
                                                                    period to upgrade to a Diamond tier
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diamond</td>
                                                                <td>Keep your Diamond member tier until the following
                                                                    year by completing 5 bookings within the member tier
                                                                    validity period
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>Regarding the rules for the membership upgrades described
                                                        above,
                                                        the following two types of unusual situations may occur:Once
                                                        the
                                                        new membership rules take effect starting in June 2023, we
                                                        will
                                                        not downgrade your member tier, but the number of bookings
                                                        that
                                                        you will need to complete before you can upgrade to the next
                                                        member tier will be calculated according to the actual
                                                        situation
                                                        regarding your bookings from the past 12 months, and these
                                                        may
                                                        exceed the requirement for the number of bookings mentioned
                                                        above. If you cancel a booking, the number of bookings you
                                                        still
                                                        need to complete before you can upgrade to the next member
                                                        tier
                                                        will increase correspondingly, and may exceed the
                                                        requirement
                                                        for the number of bookings mentioned above.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                What are the rewards for each tier?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="faqs_inner">
                                                    <p>Starting from October 2023, [Brand Name] has
                                                        introduced a
                                                        comprehensive upgrade to its member rewards program. Members
                                                        will be eligible for the following rewards based on their
                                                        member
                                                        tiers:</p>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Silver</th>
                                                                <th>Gold</th>
                                                                <th>Platinum</th>
                                                                <th>Diamond</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>Earn Trip Coins</b></td>
                                                                <td><b>Accumulate Trip Coins</b></td>
                                                                <td><b>10% More Trip Coins</b></td>
                                                                <td><b>30% More Trip Coins</b></td>
                                                                <td><b>40% More Trip Coins</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Hotel Discounts</b></td>
                                                                <td><b>Up to 5% Off Hotels</b></td>
                                                                <td><b>Up to 10% Off Hotels</b></td>
                                                                <td><b>Up to 15% Off Hotels</b></td>
                                                                <td><b>Up to 20% Off Hotels</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>No Refund Handling Fees for Trains</b></td>
                                                                <td></td>
                                                                <td>1 time per year, app only</td>
                                                                <td>2 times per year, app only</td>
                                                                <td>4 times per year, app only</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Free Airport VIP Lounge Access</b></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>1 time per year</td>
                                                                <td>2 times per year</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Priority Assistance for Calls &amp; Chats</b>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Unlimited times</td>
                                                                <td>Unlimited times</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>Plus, all [Brand Name] members enjoy</p>
                                                    <ul>
                                                        <li>Use Trip Coins Like Cash</li>
                                                        <li>Flight-Hotel Cancellation Guarantee</li>
                                                        <li> Flight Price Alerts</li>
                                                        <li>Emergency Assistance</li>
                                                    </ul>
                                                    <p><b>Rewards Terms of Use</b></p>
                                                    <p><b>Flights</b></p>
                                                    <p><b>Free Airport VIP Lounge Access：</b></p>
                                                    <p>1. [Brand Name] members are eligible for free VIP
                                                        lounge passes
                                                        within each year (January–December): 2 passes for Diamond
                                                        members and 1 pass for Platinum members. If the benefits
                                                        issued
                                                        at the beginning of each year are not used within that year,
                                                        they will expire at the end of the year. If the benefits are
                                                        used to make a booking in one year, but that booking is
                                                        canceled
                                                        in the following year, the corresponding benefits will no
                                                        longer
                                                        be valid after cancellation. Due to a high volume of
                                                        benefits
                                                        being issued at the start of the year, there may be a 1-week
                                                        delay until benefits are credited to the user's account. 2.
                                                        If a
                                                        user's member tier is upgraded or downgraded, the number of
                                                        available VIP lounge passes will be adjusted depending on
                                                        their
                                                        new member tier. For downgrades, any passes that have
                                                        already
                                                        been used will not be revoked. However, for upgrades, the
                                                        passes
                                                        that have already been used will be deducted, and only the
                                                        difference will be granted. 3. When booking flights on
                                                        [Brand Name],
                                                        you can only apply this benefit if there is an eligible VIP
                                                        lounge at the departure airport. The latest time to redeem
                                                        the
                                                        lounge access is 23:59:59 one day prior to departure. When
                                                        you
                                                        choose to apply this benefit, you will receive a QR code
                                                        that
                                                        you can use to access the VIP lounge. VIP lounge passes are
                                                        not
                                                        available for Flight + Hotel bookings. After booking flight
                                                        tickets, you can add a VIP lounge pass to your booking
                                                        through
                                                        the [Brand Name] app or mobile website, but this is
                                                        currently
                                                        unavailable on [Brand Name]'s desktop website. 4.
                                                        Amenities and
                                                        services, usage method, usage duration, and cancellation and
                                                        change policies vary by VIP lounge. Refer to the terms and
                                                        conditions of the relevant lounge for details. 5. If a user
                                                        is
                                                        found to have obtained passes through improper methods,
                                                        [Brand Name]
                                                        has the right to withdraw the benefit and take further
                                                        action as
                                                        appropriate. [Brand Name] reserves the right of
                                                        final
                                                        interpretation
                                                        of this promotion.</p>
                                                    <p>The rewards can only be used by the user themselves and
                                                        cannot be
                                                        transferred to others. If any risk is found during the
                                                        issuance
                                                        and use of the rewards, [Brand Name] may adjust the
                                                        scope of
                                                        bookings required for upgrades and the rewards terms and
                                                        conditions.</p>
                                                    <p>Flight Price Alerts：We find low flight prices for you. Simply
                                                        choose your place of departure and destination and set your
                                                        target price, and we'll scan prices 24 hours a day to help
                                                        you
                                                        secure the best deal for your preferred flight.</p>
                                                    <p><b>Trains</b></p>
                                                    <p><b>No Refund Handling Fees for Trains：</b></p>
                                                    <p>1. Member Rewards i) [Brand Name] members are
                                                        eligible for refund
                                                        fee
                                                        waivers as follows within each calendar year: 4 waivers for
                                                        diamond tier members, 2 waivers for platinum tier members,
                                                        and 1
                                                        waiver for gold tier members. ii) Members can choose whether
                                                        to
                                                        use a refund fee waiver at the time of booking. Once they
                                                        choose
                                                        to use it, refund fees will be waived for all train tickets
                                                        on
                                                        that booking. iii) The refund fee waiver will be effective
                                                        immediately after the train tickets are issued. If tickets
                                                        are
                                                        not refunded afterward, the waiver will not be returned. If
                                                        tickets cannot be issued or the user cancels payment, the
                                                        waiver
                                                        will be returned. iv) The refund fee waiver can only be used
                                                        to
                                                        waive refund fees incurred when refunding tickets. It does
                                                        not
                                                        cover booking fees or delivery fees incurred when refunding
                                                        mainland China and Hong Kong train bookings. v) The refund
                                                        fee
                                                        waiver can currently be used in the app only. vi) The refund
                                                        fee
                                                        waiver is only applicable to point-to-point train tickets
                                                        for
                                                        railways operating in the UK, Europe, South Korea, mainland
                                                        China, and Hong Kong. It cannot be used for Taiwan
                                                        point-to-point train tickets, Taiwan High Speed Rail ticket
                                                        pick-up codes, Eurail passes, Italy train passes, UK Season
                                                        and
                                                        Flexi tickets and Railcards, bus tickets, and ferry
                                                        tickets.</p>
                                                    <p>2. Changes in the Number of Waivers If a user's membership
                                                        tier
                                                        is upgraded or downgraded, the number of available refund
                                                        fee
                                                        waivers will be adjusted depending on their new membership
                                                        tier.
                                                        Any waivers that have already been used will not be affected
                                                        by
                                                        the upgrade or downgrade.</p>
                                                    <p>3. Notices i) [Brand Name] reserves the right to
                                                        retract rewards
                                                        and
                                                        investigate the liability if it is found that waivers were
                                                        obtained through illegal, fraudulent, and other improper
                                                        means,
                                                        as well as breach of contract. ii) The refund fee waiver can
                                                        only be used by the user themselves and cannot be
                                                        transferred to
                                                        others. If any risk is found during the issuance and use of
                                                        the
                                                        refund fee waiver, [Brand Name] may adjust the
                                                        scope of bookings
                                                        required for upgrades and the rewards terms and conditions.
                                                        iii)
                                                        [Brand Name] reserves the right of final
                                                        interpretation for this
                                                        promotion.</p>
                                                    <p><b>Customer Support</b></p>
                                                    <p>Emergency Assistance：We help ensure a safe and worry-free
                                                        travel
                                                        experience by offering a range of emergency assistance. You
                                                        have
                                                        access to support for unaccompanied minors, medical issues,
                                                        translation services, and missing baggage.This reward is
                                                        currently only available in some English locales of the
                                                        app.</p>
                                                    <p>Priority Assistance for Calls & Chats：As a top-priority
                                                        member,
                                                        you'll enjoy fast access to a customer support agent</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="main_faqs_tabss_sec">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                How does the member tier system work?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="faqs_inner">
                                                    <p>Starting in June 2023, [Brand Name] will be rolling
                                                        out all-new
                                                        standards of classification for member tiers. Member tiers
                                                        will
                                                        no longer be determined according to tier points. Instead,
                                                        they
                                                        will be determined by the number of valid bookings that were
                                                        made within the past 12 months. The requirements for the
                                                        number
                                                        of bookings corresponding to each member tier within the
                                                        settlement period are as follows:</p>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30%;">Member Tier</th>
                                                                <th style="width: 30%;">Number of Bookings Requirements
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Silver</td>
                                                                <td>Register and receive</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gold</td>
                                                                <td>At least 1 completed booking</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Platinum</td>
                                                                <td>At least 3 completed bookings</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diamond</td>
                                                                <td>At least 8 completed bookings</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>Hotel bookings will be counted towards membership upgrades
                                                        after
                                                        your check-out has been confirmed, typically within 2–6
                                                        weeks
                                                        after check-out. In some cases, it may take longer for the
                                                        hotel
                                                        to confirm your check-out, resulting in a slower upgrade
                                                        process. Flight bookings will be counted towards membership
                                                        upgrades after the flight has departed.[Brand Name]
                                                        will decide
                                                        based on the risk assessments whether the related booking
                                                        can be
                                                        counted if it is discovered to have been made by a malicious
                                                        user, including but not limited to users who make malicious
                                                        bookings for membership tier upgrades. [Brand Name]
                                                        reserves all
                                                        rights of final interpretation of these rules as well as the
                                                        right to modify them. We recommend upgrading your [Brand Name]
                                                        International
                                                        app
                                                        to version 7.73.0 or above, so that you can experience the
                                                        new
                                                        membership page.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How long are member tiers valid for?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="faqs_inner">
                                                    <p>Starting in April 2023, [Brand Name] will be
                                                        releasing a new
                                                        member
                                                        tier validity mechanism: For users who attain a tier upgrade
                                                        by
                                                        completing a booking, their member tier will be extended by
                                                        1
                                                        year starting from the date their member tier changed. After
                                                        this expires, we will then reset your member tier according
                                                        to
                                                        your settlement date. Regarding member tier validity for
                                                        promotional membership trials, see the terms and conditions
                                                        that
                                                        are revealed at the time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                How can I advance my member tier?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="faqs_inner">
                                                    <p>On the Rewards Center page, it will display how many bookings
                                                        you
                                                        still need to complete before you can upgrade to the next
                                                        member
                                                        tier.Once the number of bookings you complete meets the
                                                        requirements for each membership tier before the expiration
                                                        date
                                                        of your current membership tier, you will complete the
                                                        corresponding upgrade. The specific method for doing so is
                                                        as
                                                        follows:</p>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Current Tier</th>
                                                                <th>Upgrade Method</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Unregistered user</td>
                                                                <td>Register a [Brand Name] account and
                                                                    sign in to become a
                                                                    Silver member
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Silver</td>
                                                                <td>Complete 1 booking within the member tier validity
                                                                    period to upgrade to a Gold tier, complete 3
                                                                    bookings to upgrade to a Platinum tier, and complete
                                                                    8 bookings to upgrade to a Diamond tier
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gold</td>
                                                                <td>Complete 2 bookings within the member tier validity
                                                                    period to upgrade to a Platinum tier, and complete 7
                                                                    bookings to upgrade to a Diamond tier
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Platinum</td>
                                                                <td>Complete 5 bookings within the member tier validity
                                                                    period to upgrade to a Diamond tier
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diamond</td>
                                                                <td>Keep your Diamond member tier until the following
                                                                    year by completing 5 bookings within the member tier
                                                                    validity period
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>Regarding the rules for the membership upgrades described
                                                        above,
                                                        the following two types of unusual situations may occur:Once
                                                        the
                                                        new membership rules take effect starting in June 2023, we
                                                        will
                                                        not downgrade your member tier, but the number of bookings
                                                        that
                                                        you will need to complete before you can upgrade to the next
                                                        member tier will be calculated according to the actual
                                                        situation
                                                        regarding your bookings from the past 12 months, and these
                                                        may
                                                        exceed the requirement for the number of bookings mentioned
                                                        above. If you cancel a booking, the number of bookings you
                                                        still
                                                        need to complete before you can upgrade to the next member
                                                        tier
                                                        will increase correspondingly, and may exceed the
                                                        requirement
                                                        for the number of bookings mentioned above.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                What are the rewards for each tier?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="faqs_inner">
                                                    <p>Starting from October 2023, [Brand Name] has
                                                        introduced a
                                                        comprehensive upgrade to its member rewards program. Members
                                                        will be eligible for the following rewards based on their
                                                        member
                                                        tiers:</p>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Silver</th>
                                                                <th>Gold</th>
                                                                <th>Platinum</th>
                                                                <th>Diamond</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><b>Earn Trip Coins</b></td>
                                                                <td><b>Accumulate Trip Coins</b></td>
                                                                <td><b>10% More Trip Coins</b></td>
                                                                <td><b>30% More Trip Coins</b></td>
                                                                <td><b>40% More Trip Coins</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Hotel Discounts</b></td>
                                                                <td><b>Up to 5% Off Hotels</b></td>
                                                                <td><b>Up to 10% Off Hotels</b></td>
                                                                <td><b>Up to 15% Off Hotels</b></td>
                                                                <td><b>Up to 20% Off Hotels</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>No Refund Handling Fees for Trains</b></td>
                                                                <td></td>
                                                                <td>1 time per year, app only</td>
                                                                <td>2 times per year, app only</td>
                                                                <td>4 times per year, app only</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Free Airport VIP Lounge Access</b></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>1 time per year</td>
                                                                <td>2 times per year</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Priority Assistance for Calls &amp; Chats</b>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Unlimited times</td>
                                                                <td>Unlimited times</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p>Plus, all [Brand Name] members enjoy</p>
                                                    <ul>
                                                        <li>Use Trip Coins Like Cash</li>
                                                        <li>Flight-Hotel Cancellation Guarantee</li>
                                                        <li> Flight Price Alerts</li>
                                                        <li>Emergency Assistance</li>
                                                    </ul>
                                                    <p><b>Rewards Terms of Use</b></p>
                                                    <p><b>Flights</b></p>
                                                    <p><b>Free Airport VIP Lounge Access：</b></p>
                                                    <p>1. [Brand Name] members are eligible for free VIP
                                                        lounge passes
                                                        within each year (January–December): 2 passes for Diamond
                                                        members and 1 pass for Platinum members. If the benefits
                                                        issued
                                                        at the beginning of each year are not used within that year,
                                                        they will expire at the end of the year. If the benefits are
                                                        used to make a booking in one year, but that booking is
                                                        canceled
                                                        in the following year, the corresponding benefits will no
                                                        longer
                                                        be valid after cancellation. Due to a high volume of
                                                        benefits
                                                        being issued at the start of the year, there may be a 1-week
                                                        delay until benefits are credited to the user's account. 2.
                                                        If a
                                                        user's member tier is upgraded or downgraded, the number of
                                                        available VIP lounge passes will be adjusted depending on
                                                        their
                                                        new member tier. For downgrades, any passes that have
                                                        already
                                                        been used will not be revoked. However, for upgrades, the
                                                        passes
                                                        that have already been used will be deducted, and only the
                                                        difference will be granted. 3. When booking flights on
                                                        [Brand Name],
                                                        you can only apply this benefit if there is an eligible VIP
                                                        lounge at the departure airport. The latest time to redeem
                                                        the
                                                        lounge access is 23:59:59 one day prior to departure. When
                                                        you
                                                        choose to apply this benefit, you will receive a QR code
                                                        that
                                                        you can use to access the VIP lounge. VIP lounge passes are
                                                        not
                                                        available for Flight + Hotel bookings. After booking flight
                                                        tickets, you can add a VIP lounge pass to your booking
                                                        through
                                                        the [Brand Name] app or mobile website, but this is
                                                        currently
                                                        unavailable on [Brand Name]'s desktop website. 4.
                                                        Amenities and
                                                        services, usage method, usage duration, and cancellation and
                                                        change policies vary by VIP lounge. Refer to the terms and
                                                        conditions of the relevant lounge for details. 5. If a user
                                                        is
                                                        found to have obtained passes through improper methods,
                                                        [Brand Name]
                                                        has the right to withdraw the benefit and take further
                                                        action as
                                                        appropriate. [Brand Name] reserves the right of
                                                        final
                                                        interpretation
                                                        of this promotion.</p>
                                                    <p>The rewards can only be used by the user themselves and
                                                        cannot be
                                                        transferred to others. If any risk is found during the
                                                        issuance
                                                        and use of the rewards, [Brand Name] may adjust the
                                                        scope of
                                                        bookings required for upgrades and the rewards terms and
                                                        conditions.</p>
                                                    <p>Flight Price Alerts：We find low flight prices for you. Simply
                                                        choose your place of departure and destination and set your
                                                        target price, and we'll scan prices 24 hours a day to help
                                                        you
                                                        secure the best deal for your preferred flight.</p>
                                                    <p><b>Trains</b></p>
                                                    <p><b>No Refund Handling Fees for Trains：</b></p>
                                                    <p>1. Member Rewards i) [Brand Name] members are
                                                        eligible for refund
                                                        fee
                                                        waivers as follows within each calendar year: 4 waivers for
                                                        diamond tier members, 2 waivers for platinum tier members,
                                                        and 1
                                                        waiver for gold tier members. ii) Members can choose whether
                                                        to
                                                        use a refund fee waiver at the time of booking. Once they
                                                        choose
                                                        to use it, refund fees will be waived for all train tickets
                                                        on
                                                        that booking. iii) The refund fee waiver will be effective
                                                        immediately after the train tickets are issued. If tickets
                                                        are
                                                        not refunded afterward, the waiver will not be returned. If
                                                        tickets cannot be issued or the user cancels payment, the
                                                        waiver
                                                        will be returned. iv) The refund fee waiver can only be used
                                                        to
                                                        waive refund fees incurred when refunding tickets. It does
                                                        not
                                                        cover booking fees or delivery fees incurred when refunding
                                                        mainland China and Hong Kong train bookings. v) The refund
                                                        fee
                                                        waiver can currently be used in the app only. vi) The refund
                                                        fee
                                                        waiver is only applicable to point-to-point train tickets
                                                        for
                                                        railways operating in the UK, Europe, South Korea, mainland
                                                        China, and Hong Kong. It cannot be used for Taiwan
                                                        point-to-point train tickets, Taiwan High Speed Rail ticket
                                                        pick-up codes, Eurail passes, Italy train passes, UK Season
                                                        and
                                                        Flexi tickets and Railcards, bus tickets, and ferry
                                                        tickets.</p>
                                                    <p>2. Changes in the Number of Waivers If a user's membership
                                                        tier
                                                        is upgraded or downgraded, the number of available refund
                                                        fee
                                                        waivers will be adjusted depending on their new membership
                                                        tier.
                                                        Any waivers that have already been used will not be affected
                                                        by
                                                        the upgrade or downgrade.</p>
                                                    <p>3. Notices i) [Brand Name] reserves the right to
                                                        retract rewards
                                                        and
                                                        investigate the liability if it is found that waivers were
                                                        obtained through illegal, fraudulent, and other improper
                                                        means,
                                                        as well as breach of contract. ii) The refund fee waiver can
                                                        only be used by the user themselves and cannot be
                                                        transferred to
                                                        others. If any risk is found during the issuance and use of
                                                        the
                                                        refund fee waiver, [Brand Name] may adjust the
                                                        scope of bookings
                                                        required for upgrades and the rewards terms and conditions.
                                                        iii)
                                                        [Brand Name] reserves the right of final
                                                        interpretation for this
                                                        promotion.</p>
                                                    <p><b>Customer Support</b></p>
                                                    <p>Emergency Assistance：We help ensure a safe and worry-free
                                                        travel
                                                        experience by offering a range of emergency assistance. You
                                                        have
                                                        access to support for unaccompanied minors, medical issues,
                                                        translation services, and missing baggage.This reward is
                                                        currently only available in some English locales of the
                                                        app.</p>
                                                    <p>Priority Assistance for Calls & Chats：As a top-priority
                                                        member,
                                                        you'll enjoy fast access to a customer support agent</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="main_faqs_tabss_sec">
                                <p>The [Brand Name] Rewards ("Program") is offered to frequent [Brand Name]
                                    International customers at the
                                    sole discretion of [Brand Name], and is available only to individuals
                                    who have
                                    registered as [Brand Name] Members.</p>
                                <p>By registering as a [Brand Name] Member ("Member(s)"), Members can earn
                                    [Brand Name]
                                    reward coins ("Trip Coins") by booking eligible travel products through the
                                    [Brand Name] website, mobile website, or app. Available Trip Coins can
                                    be used to
                                    obtain certain benefits, subject to these Terms and Conditions and the
                                    availability of eligible travel and benefits. One Member can only hold one
                                    [Brand Name] account ("Account").</p>
                                <p>The terms "you" and "your" throughout these Terms and Conditions refer to any
                                    Member eligible to earn and redeem Trip Coins under this Program. By registering
                                    as a Member and earning/using Trip Coins, you are deemed to agree with these
                                    Terms and Conditions. If you do not agree with the terms and conditions, please
                                    stop using Trip Coins and notify us. After receiving the notice, we will stop
                                    the accrual or reward of Trip Coins to your Account.</p>
                                <p><em>&nbsp;&nbsp; 1: How to Earn Trip Coins</em></p>
                                <p><em>&nbsp;&nbsp;&nbsp;&nbsp; a: Trip Coins can be earned in the following
                                        ways:</em></p>
                                <ul>
                                    <li>Booking hotels on [Brand Name] (website/mobile website/app).</li>
                                    <li>Booking flights on [Brand Name] (website/mobile website/app).</li>
                                    <li>Purchasing gift cards on [Brand Name] (website/mobile website/app).
                                    </li>
                                    <li>Booking South Korea trains on [Brand Name] (app only).</li>
                                    <li>Writing hotel reviews on [Brand Name] (website/mobile website/app).
                                    </li>
                                    <li>Posting Trip Moments on [Brand Name] (website/app)</li>
                                    <li>Writing attraction reviews on [Brand Name] (website/mobile
                                        website/app).</li>
                                    <li>Other irregular promotions on [Brand Name] (website/mobile
                                        website/app).</li>
                                </ul>
                                <p><em>&nbsp;&nbsp;&nbsp;&nbsp; b: Trip Coins cannot be earned for any of the
                                        following booking types: Flights and hotels that are part of Flight + Hotel
                                        deals, offline flight bookings such as those made on the phone via [Brand Name]
                                        International
                                        customer support, direct bookings made on partner sites, bookings made on
                                        C[Brand Name], bookings which are free of charge, bookings for
                                        which part of the
                                        booking is part of a promotion (according to the information on the
                                        promotion page), any other booking [Brand Name] deems not to meet
                                        the criteria
                                        for earning Trip Coins. If flight tickets are canceled or changed through a
                                        non-[Brand Name] channel, Trip Coins will not be earned for that
                                        flight; Trip
                                        Coins that have already been sent for that flight will be deducted from your
                                        account.</em></p>
                                <p><em>&nbsp;&nbsp;&nbsp;&nbsp; c: Conditions on Earning Trip Coins:</em></p>
                                <ul>
                                    <li>Eligible travel must be completed. This means that you or other travelers on
                                        an itinerary using your Account must stay in the booked hotel or take the
                                        booked flight. Trip Coins accrued for canceled flights or hotels will be
                                        deducted. For the avoidance of any doubt, when a booking contains multiple
                                        flights or hotels and only some are canceled, [Brand Name] will
                                        deduct the Trip
                                        Coins according to our cancellation policy.
                                    </li>
                                    <li>For applicable hotel and flight bookings, the amount of Trip Coins earned
                                        will be calculated according to the final payment amount for the booking
                                        (the final payment amount is the amount paid after discounts, promo codes,
                                        and Trip Coin discounts have been applied). The amount discounted using Trip
                                        Coins or paid with a gift card does not count as part of the final payment
                                        amount. No Trip Coins will be earned for the amount discounted using Trip
                                        Coins. Receipts and invoices will not be provided for the parts of the
                                        booking paid using gift cards or discounted through discounts, offers, promo
                                        codes, or Trip Coins.
                                    </li>
                                    <li>Trip Coins rewarded from eligible hotel reviews are based on the length of
                                        content & whether photos are included. The rules of accrual of Trip Coins
                                        from writing reviews are different from hotel/flight bookings and [Brand Name]
                                        International
                                        has absolute right to change/adjust such rules at any time.
                                    </li>

                                </ul>
                                <p><em>&nbsp;&nbsp; 2: Earning Trip Coins</em></p>
                                <ul>
                                    <li>For eligible flight and hotel bookings, 25 and 80 Trip Coins will be earned
                                        respectively for every $100 spent. For eligible hotel reviews, the amount of
                                        Trip Coins rewarded will be based on the length of text, whether photos are
                                        included & other criteria. Users are responsible for checking [Brand Name]
                                        International from
                                        time to time to stay updated on earning policies.
                                    </li>
                                    <li>The default currency [Brand Name] uses to calculate Trip Coins is
                                        USD. When
                                        paying in another currency, [Brand Name]'s exchange rate will be
                                        used to show
                                        prices in different currencies on its site at the time of calculation.
                                    </li>
                                </ul>
                                <p><em>&nbsp;&nbsp; 3: How to Use Trip Coins</em></p>
                                <ul>
                                    <li>Value of Trip Coins: 100 Trip Coins = $1</li>
                                    <li>You can use Trip Coins in the app to save instantly on bookings (you need to
                                        select "Save with Trip Coins" during the booking process). To find out
                                        whether you can use Trip Coins to save on your booking, please refer to the
                                        information on the booking page. Upper limits for how much can be discounted
                                        per booking will vary according to [Brand Name] promotions. Niazi
                                        Tours International reserves
                                        the right to modify the value, restrictions, or usage methods of Trip Coins
                                        at any time and without notification. If [Brand Name] discovers any
                                        illegal or
                                        fraudulent situation, use, or intended use relating to Trip Coins, [Brand Name]
                                        International
                                        reserves the right to remove user privileges or cancel user bookings at the
                                        sole discretion of [Brand Name].
                                    </li>
                                    <li>When using Trip Coins to obtain a discount on a booking, Trip Coins which
                                        are due to expire first will be used first. Trip Coins which are due to
                                        expire on the same day will be used in the following order:
                                        <ul>
                                            <li>Trip Coins which have been earned by writing hotel reviews or other
                                                activities on [Brand Name]
                                            </li>
                                            <li>Trip Coins which have been earned by booking</li>
                                        </ul>
                                    </li>
                                    <li>If for some reason your booking was canceled or refunded, the Trip Coins
                                        that were exchanged or used will be completely or partially returned to your
                                        [Brand Name] account. The validity period of the returned Trip
                                        Coins will be
                                        equal to the initial validity period of the used Trip Coins.
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Log that the script has started running
        console.log("Script loaded and running...");

        // Get the user's membership type from Blade and log it
        var membershipType = "{{ strtolower($user->membership->type) }}";
        console.log("Membership Type:", membershipType);

        // Define the order in which memberships appear
        var membershipOrder = ['silver', 'gold', 'platinum', 'diamond'];

        // Determine the index of the user's membership type and log it
        var currentIndex = membershipOrder.indexOf(membershipType);
        console.log("Current Membership Index:", currentIndex);

        // Log the membershipOrder array
        console.log("Membership Order Array:", membershipOrder);

        // Activate the correct membership icon
        for (var i = 0; i <= currentIndex; i++) {
            var activeIcon = document.querySelector('[data-tooltip-id="' + membershipOrder[i] + '-tooltip"]');
            if (activeIcon) {
                console.log("Activating icon for:", membershipOrder[i]);
                activeIcon.classList.add('active', 'current');
            } else {
                console.log("No element found for:", membershipOrder[i]);
            }
        }

        // Activate all the order nodes up to the current membership level
        var activeOrderNodes = document.querySelectorAll('.exps-bar-order-node');
        console.log("Number of order nodes found:", activeOrderNodes.length);

        for (var j = 0; j < currentIndex * 2; j++) {
            if (activeOrderNodes[j]) {
                console.log("Activating order node:", j);
                activeOrderNodes[j].classList.add('active');
            } else {
                console.log("No order node found at index:", j);
            }
        }
    });
</script> --}}

<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(isset($user))
            console.log("Script loaded and running...");

            var membershipType = "{{ strtolower($user->membership->type) }}";
            console.log("Membership Type:", membershipType);

            // Update membership order to match the correct order in your HTML structure
            var membershipOrder = ['standard', 'premium', 'elite', 'signature'];
            console.log("Membership Order:", membershipOrder);

            var currentIndex = membershipOrder.indexOf(membershipType);
            console.log("Current Membership Index:", currentIndex);

            if (currentIndex === -1) {
                console.error("Membership type not found in membershipOrder array.");
                return;
            }

            var activeOrderNodes = document.querySelectorAll('.exps-bar-order-node');
            console.log("Number of order nodes found:", activeOrderNodes.length);

            // Activate the correct membership icon
            var activeIcon = document.querySelector('[data-tooltip-id="' + membershipOrder[currentIndex] + '-tooltip"]');
            if (activeIcon) {
                console.log("Activating icon for:", membershipOrder[currentIndex]);
                activeIcon.classList.add('active', 'current');
            } else {
                console.warn("Icon not found for membership type:", membershipOrder[currentIndex]);
            }

            // Activate only the necessary order nodes based on the current membership level
            for (var i = 0; i < currentIndex * 2; i++) {
                console.log("Activating order node:", i);
                activeOrderNodes[i].classList.add('active');
            }

            // Dynamically detect and activate the last membership node if the user has the highest level
            if (membershipType === membershipOrder[membershipOrder.length - 1]) {
                console.log("User has the highest membership level, activating the last node...");
                if (activeOrderNodes[activeOrderNodes.length - 1]) {
                    activeOrderNodes[activeOrderNodes.length - 1].classList.add('active');
                } else {
                    console.warn("Last order node not found.");
                }
            }

        @else
            console.log("User is not logged in, script not executed.");
        @endif
    });
</script>










<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(isset($user))
            console.log("Script loaded and running...");

            var membershipType = "{{ strtolower($user->membership->type) }}";
            console.log("Membership Type:", membershipType);

            // Define the membership order and styles dynamically using the PHP variables passed from the controller
            var membershipOrder = @json($membershipTypes); // This is now correctly passed
            var membershipStyles = @json($membershipStyles); // This is now correctly passed

            // Create a mapping of membership types to their styles
            var membershipStylesMap = {};
            membershipOrder.forEach(function(type, index) {
                membershipStylesMap[type] = membershipStyles[index];
            });

            // Apply the styles to the elements
            var yourMembershipElement = document.querySelector('.your-membership');
            var teirLogoImgElement = document.querySelector('.teir-logo-img img');

            if (yourMembershipElement && membershipStylesMap[membershipType]) {
                console.log("Setting background color for:", membershipType);
                yourMembershipElement.style.background = membershipStylesMap[membershipType].background;
            }

            if (teirLogoImgElement && membershipStylesMap[membershipType]) {
                console.log("Setting image for:", membershipType);
                teirLogoImgElement.src = membershipStylesMap[membershipType].imageUrl;
            }
        @else
            console.log("User is not logged in, script not executed.");
        @endif
    });
</script>

