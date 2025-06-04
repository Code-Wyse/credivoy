@extends('admin.layouts.app')
@section('title') Dashboard @endsection
@section('content')
<section>
<div class="dashboard-container">
    <div class="analytics">
        <h2>Revenue</h2>
        <canvas id="analyticsChart"></canvas>
        <div class="total-analytics">
            PKR {{number_format($total_revenue, 2)}}
        </div>
    </div>
     <div class="categories">
        <div class="category">
            <h3>Payments</h3>
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
                    <span class="object-name">Total Payments</span>
                    <span class="object-value">{{ $total_payments }}</span>
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
                    <span class="object-value">{{ $tours_booked }}</span>
                </div>
                <div class="category-item">
                    <span class="object-name">Hotels Booked</span>
                    <span class="object-value">{{ $hotels_booked }}</span>
                </div>
                <div class="category-item">
                    <span class="object-name">Vehicles Booked</span>
                    <span class="object-value">{{ $vehicles_booked }}</span>
                </div>
            </div>
        </div>
 </div>
 <div class="categories">
        <div class="category">
            <h3>Users</h3>
            <div class="category-grid">
                 <div class="category-item">
                     <span class="object-name">Registered Users</span>
                     <span class="object-value">{{ $registered_users }}</span>
                </div>
                <div class="category-item">
                    <span class="object-name">Silver Members</span>
                    <span class="object-value">{{ $silver_users }}</span>
                </div>
                <div class="category-item">
                    <span class="object-name">Gold Members</span>
                    <span class="object-value">{{$gold_users}}</span>
                </div>
                <div class="category-item">
                    <span class="object-name">Platinum Members</span>
                    <span class="object-value">{{ $platinum_users }}</span>
                </div>
                <div class="category-item">
                    <span class="object-name">Diamond Members</span>
                    <span class="object-value">{{ $diamond_users }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<style>
.dashboard-container {
    max-width: 1200px;
    margin: auto;
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('analyticsChart').getContext('2d');
const analyticsChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            @foreach($labels as $k=>$label)
            "{{$label}}"
            @if($k != count($labels) - 1),@endif
            @endforeach
        ],
        datasets: [{
            label: 'PKR',
            data: [{{ implode(',',$totals) }}],
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>
@endsection
