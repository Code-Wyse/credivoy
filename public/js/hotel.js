document.addEventListener('DOMContentLoaded', function() {
    // Hotel booking script
    // const dateFromInput = document.getElementById('book-hotel-from');
    const dateToInput = document.getElementById('book-hotel-to');
    const hotelMainDisplaySec = document.querySelector('.book_this_hotel .main_display_sec');
    const hotelTotalTicketsPrice = document.querySelector('.book_this_hotel .total_tickets_price');
    const hotelTotalAmounts = document.querySelector('.book_this_hotel .total_amounts');
    const hotelBookingForm = document.getElementById('hotel-booking-form');
    const hotelPleaseSelectMessage = document.querySelector('.book_this_hotel .please_select');
    const hotelNightsRoomsMessage = document.querySelector('.book_this_hotel .nights_rooms_message');

    const hotelAdultDecreaseBtn = document.querySelector('.book_this_hotel [data-decrease-adult-hotel]');
    const hotelAdultIncreaseBtn = document.querySelector('.book_this_hotel [data-increase-adult-hotel]');
    const hotelAdultInput = document.querySelector('.book_this_hotel [data-value-adult-hotel]');

    const roomPrice = 27000;

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    dateFromInput.setAttribute('min', today);
    dateToInput.setAttribute('min', today);

    function calculateHotelTotal() {
        const adultCount = parseInt(hotelAdultInput.value, 10);
        const fromDate = new Date(dateFromInput.value);
        const toDate = new Date(dateToInput.value);

        // Calculate the number of nights, ensuring a stay from date X to date X+1 counts as 1 night
        const nights = Math.round((toDate - fromDate) / (1000 * 60 * 60 * 24));

        if (nights > 0) {
            const total = (nights * adultCount * roomPrice);
            hotelTotalAmounts.textContent = `PKR ${total}`;
            hotelNightsRoomsMessage.textContent = `${nights} night and ${adultCount} room`;
        } else {
            hotelTotalAmounts.textContent = `PKR 0`;
            hotelNightsRoomsMessage.textContent = ``;
        }
    }

    function checkDates() {
        if (dateFromInput.value && dateToInput.value) {
            hotelMainDisplaySec.style.display = 'block';
            hotelTotalTicketsPrice.style.display = 'block';
            hotelPleaseSelectMessage.style.display = 'none';
            // Set initial values when both dates are selected
            if (parseInt(hotelAdultInput.value, 10) === 0) {
                hotelAdultInput.value = 1;
            }
            calculateHotelTotal();
        } else {
            hotelMainDisplaySec.style.display = 'none';
            hotelTotalTicketsPrice.style.display = 'none';
            hotelPleaseSelectMessage.style.display = 'block';
            // Reset values when either date is deselected
            hotelAdultInput.value = 0;
            hotelTotalAmounts.textContent = `PKR 0`;
            hotelNightsRoomsMessage.textContent = ``;
        }
    }

    dateFromInput.addEventListener('change', function() {
        dateToInput.setAttribute('min', dateFromInput.value); // Ensure the "To" date can't be before the "From" date
        checkDates();
    });

    dateToInput.addEventListener('change', checkDates);

    hotelAdultDecreaseBtn.addEventListener('click', function() {
        let value = parseInt(hotelAdultInput.value, 10);
        if (value > 1) {
            value -= 1;
            hotelAdultInput.value = value;
            calculateHotelTotal();
        }
    });

    hotelAdultIncreaseBtn.addEventListener('click', function() {
        let value = parseInt(hotelAdultInput.value, 10);
        value += 1;
        hotelAdultInput.value = value;
        calculateHotelTotal();
    });

    hotelBookingForm.addEventListener('submit', function(event) {
        if (!dateFromInput.value || !dateToInput.value) {
            event.preventDefault();
            alert('Please select both "From" and "To" dates to book the hotel.');
        }
    });

    // Initial calculation to set the correct total
    calculateHotelTotal();
});
