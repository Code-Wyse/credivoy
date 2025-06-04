@extends("front.layouts.app")

@section("header")

<link rel="stylesheet" href="{{asset("styles/plugins.css")}}">
<link rel="stylesheet" href="{{asset("styles/main.css")}}">

<style>

    .dashboard-container {
        max-width: 1200px;
        margin: auto;
        padding-top: 20px;
    }

    .analytics {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        position: relative;
    }

    .analytics h2 {
        margin: 0;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .total-analytics {
        font-size: 48px;
        font-weight: bold;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .categories {
        display: flex;
        flex-direction: column;
        margin-bottom: 30px;
        gap: 20px;
    }

    .category {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .category h3 {
        margin: 0;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .category-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    .category-item {
        background: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
    }

    .object-name {
        display: block;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .object-value {
        font-size: 24px;
        font-weight: bold;
    }

</style>

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
                                <option value="my-account-pages--subscription">Subscriptions</option>
                                <option value="my-account-pages--dashboard">Addresses</option>
                                <option value="my-account-pages--dashboard">Payment Methods</option>
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
                                <h1 class="type-h3 rlr-data-table__title">Dashboard</h1>
                                <section>
                                    <div class="dashboard-container">
                                        <div class="categories">
                                            <div class="category">
                                                <h3>Payments & Coins</h3>
                                                <div class="category-grid">
                                                    <div class="category-item">
                                                        <span class="object-name">Cash Payments</span>
                                                        <span class="object-value">{{ $cash_payments }}</span>
                                                    </div>
                                                    <div class="category-item">
                                                        <span class="object-name">Online Payments</span>
                                                        <span class="object-value">{{ $online_payments }}</span>
                                                    </div>
                                                    <div class="category-item">
                                                        <span class="object-name">Coins Earned</span>
                                                        <span class="object-value">{{ auth()->user()->trip_coins }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="categories">
                                            <div class="category">
                                                <h3>Bookings</h3>
                                                <div class="category-grid">
                                                    <div class="category-item">
                                                        <span class="object-name">Tours Booked</span>
                                                        <span class="object-value">{{ auth()->user()->bookings()->count() }}</span>
                                                    </div>
                                                    <div class="category-item">
                                                        <span class="object-name">Hotels Booked</span>
                                                        <span class="object-value">{{ auth()->user()->hotelBookings()->count() }}</span>
                                                    </div>
                                                    <div class="category-item">
                                                        <span class="object-name">Vehicles Booked</span>
                                                        <span class="object-value">{{ auth()->user()->vehicleBookings()->count() }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
