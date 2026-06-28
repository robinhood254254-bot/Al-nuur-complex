document.addEventListener('DOMContentLoaded', function() {
    var bookingForm = document.getElementById('booking-form');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var service = document.getElementById('booking-service').value;
            var date = document.getElementById('booking-date').value;
            var time = document.getElementById('booking-time').value;
            var name = document.getElementById('booking-name').value;
            var phone = document.getElementById('booking-phone').value;
            var location = document.getElementById('booking-location').value;
            var desc = document.getElementById('booking-desc').value;

            if (!service || !date || !time || !name || !phone) {
                alert('Please fill in all required fields.');
                return;
            }

            var message = '*Booking Request*%0A%0A' +
                '*Name:* ' + encodeURIComponent(name) + '%0A' +
                '*Phone:* ' + encodeURIComponent(phone) + '%0A' +
                '*Location:* ' + encodeURIComponent(location || 'Not provided') + '%0A' +
                '*Service:* ' + encodeURIComponent(service) + '%0A' +
                '*Preferred Date:* ' + encodeURIComponent(date) + '%0A' +
                '*Preferred Time:* ' + encodeURIComponent(time) + '%0A' +
                '*Description:* ' + encodeURIComponent(desc || 'Not provided');

            window.open('https://wa.me/254758289578?text=' + message, '_blank');
        });

        var minDate = new Date();
        minDate.setDate(minDate.getDate() + 1);
        var dateInput = document.getElementById('booking-date');
        if (dateInput) {
            dateInput.setAttribute('min', minDate.toISOString().split('T')[0]);
        }
    }

    var contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var name = document.getElementById('contact-name').value;
            var phone = document.getElementById('contact-phone').value;
            var message = document.getElementById('contact-message').value;

            if (!name || !phone) {
                alert('Please fill in your name and phone number.');
                return;
            }

            var waMessage = '*Hello Al Nuur Complex!*%0A%0A' +
                '*Name:* ' + encodeURIComponent(name) + '%0A' +
                '*Phone:* ' + encodeURIComponent(phone) + '%0A' +
                '*Message:* ' + encodeURIComponent(message || 'I would like to make an inquiry.');

            window.open('https://wa.me/254758289578?text=' + waMessage, '_blank');
        });
    }
});
