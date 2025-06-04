document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.getElementById('book-tour-from');
    const totalAmounts = document.querySelector('.total_amounts');
    const bookingForm = document.getElementById('booking-form');

    const adultDecreaseBtn = document.querySelector('[data-decrease-adult]');
    const adultIncreaseBtn = document.querySelector('[data-increase-adult]');
    const adultInput = document.querySelector('[data-value-adult]');
    const childDecreaseBtn = document.querySelector('[data-decrease-child]');
    const childIncreaseBtn = document.querySelector('[data-increase-child]');
    const childInput = document.querySelector('[data-value-child]');

    const departureDateField = document.getElementById('tour_departure_id');
    const ticketsSection = document.querySelector('.main_display_sec');
    const totalPriceSection = document.querySelector('.total_tickets_price');

    departureDateField.addEventListener('change',function(e){
        if(e.target.value) {
            ticketsSection.style.display = 'block';
            totalPriceSection.style.display = 'block';
        }
        else {
            ticketsSection.style.display = 'none';
            totalPriceSection.style.display = 'none';
        }
    });

    function calculateTotal() {
        const adultCount = parseInt(adultInput.value, 10);
        const childCount = parseInt(childInput.value, 10);
        const total = number_format((adultCount * adultPrice) + (childCount * childPrice),2);
        totalAmounts.textContent = `PKR ${total}`;
    }

    adultDecreaseBtn.addEventListener('click', function() {
        let value = parseInt(adultInput.value, 10);
        if (value > 0) {
            value -= 1;
            adultInput.value = value;
            calculateTotal();
        }
    });

    adultIncreaseBtn.addEventListener('click', function() {
        let value = parseInt(adultInput.value, 10);
        value += 1;
        adultInput.value = value;
        calculateTotal();
    });

    childDecreaseBtn.addEventListener('click', function() {
        let value = parseInt(childInput.value, 10);
        if (value > 0) {
            value -= 1;
            childInput.value = value;
            calculateTotal();
        }
    });

    childIncreaseBtn.addEventListener('click', function() {
        let value = parseInt(childInput.value, 10);
        value += 1;
        childInput.value = value;
        calculateTotal();
    });

    bookingForm.addEventListener('submit', function(event) {
        if (!dateInput.value) {
            event.preventDefault();
            alert('Please select a date to book the tour.');
        }
    });

    // Initial calculation to set the correct total
    calculateTotal();
});
