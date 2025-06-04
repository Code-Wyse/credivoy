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
                        <select class="rlr-sidebar-menu__sub-menu rlr-form-select" id="rlr-js-sub-menu"
                            name="rlr-sub-menu">
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
            <div class="container-fluid">
                <div class="row">

                    @include("user.includes.user-sidebar")
                    <div class="content col-lg-9 col-xs-12">
                        <div class="rlr-data-container woocommerce-MyAccount-content">
                            <h1 class="type-h3 rlr-data-table__title">Your Orders</h1>
                            <div class="table">
                                <table
                                    class="rlr-data-table woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                                    <thead class="rlr-data-table__header">
                                        <tr class="rlr-data-table__header-row">
                                            <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number">
                                                <span class="nobr"> Order </span>
                                            </th>
                                            <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date">
                                                <span class="nobr"> Date </span>
                                            </th>
                                            <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status">
                                                <span class="nobr"> Status </span>
                                            </th>
                                            <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total">
                                                <span class="nobr"> Total </span>
                                            </th>
                                            <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total">
                                                <span class="nobr"> Remaining Amount </span>
                                            </th>
                                            <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total">
                                                <span class="nobr"> Type </span>
                                            </th>
                                            <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total">
                                                <span class="nobr"> Details </span>
                                            </th>
                                            <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions">
                                                <span class="nobr"> Actions </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $booking)
                                        <tr class="rlr-data-table__row woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
                                            <td class="rlr-data-table__cell woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number"
                                                data-title="Order">
                                                <a href="{{ route('dashboard.orders.show', $booking->id) }}">
                                                    #{{ $booking->id }}
                                                </a>
                                            </td>
                                            <td class="rlr-data-table__cell woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date"
                                                data-title="Date">
                                                <time datetime="{{ $booking->created_at }}">
                                                    {{ $booking->created_at->format('d F, Y') }}
                                                </time>
                                            </td>
                                            <td class="rlr-data-table__cell woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status"
                                                data-title="Status">
                                                {{ ucfirst($booking->payment_status) }}
                                            </td>
                                            <td class="rlr-data-table__cell rlr-data-table__cell-total woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total"
                                                data-title="Total">
                                                <span class="rlr-data-table__amount woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">PKR</span>
                                                    {{ number_format($booking->total_amount) }}
                                                </span>
                                            </td>
                                            <td class="rlr-data-table__cell rlr-data-table__cell-total woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total"
                                                data-title="Remaining Amount">
                                                <span class="rlr-data-table__amount woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">PKR</span>
                                                    {{ number_format($booking->remaining_amount) }}
                                                </span>
                                            </td>
                                            <td class="rlr-data-table__cell woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status"
                                                data-title="Type">
                                                @if($booking instanceof \App\Models\HotelBooking)
                                                    Hotel
                                                @else
                                                    Tour
                                                @endif
                                            </td>
                                            <td class="rlr-data-table__cell woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status"
                                                data-title="Details">
                                                @if($booking instanceof \App\Models\HotelBooking)
                                                    <a href="{{ route('front.hotels.show', $booking->hotel->id) }}">
                                                        {{ $booking->hotel->name }}
                                                    </a>
                                                @else
                                                    <a href="{{ route('front.tours.show', $booking->tour->slug) }}">
                                                        {{ $booking->tour->title }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td class="rlr-data-table__cell woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions"
                                                data-title="Actions">
                                                <a href="{{ route('dashboard.orders.show', $booking->id) }}"
                                                    class="rlr-data-table__link woocommerce-button button view">Details</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
