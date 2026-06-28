document.addEventListener('DOMContentLoaded', function() {
    var toggle = document.querySelector('.menu-toggle');
    var wrapper = document.querySelector('.nav-menu-wrapper');
    if (toggle && wrapper) {
        toggle.addEventListener('click', function() {
            this.classList.toggle('active');
            wrapper.classList.toggle('open');
            this.setAttribute('aria-expanded', wrapper.classList.contains('open'));
        });
    }

    document.querySelectorAll('.menu-item-has-children > a').forEach(function(link) {
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                this.parentElement.classList.toggle('open');
            }
        });
    });

    var slides = document.querySelectorAll('.hero-slide');
    var dots = document.querySelectorAll('.hero-dot');
    var current = 0;
    if (slides.length > 1) {
        function showSlide(index) {
            slides.forEach(function(s) { s.classList.remove('active'); });
            dots.forEach(function(d) { d.classList.remove('active'); });
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            current = index;
        }
        dots.forEach(function(dot, i) {
            dot.addEventListener('click', function() { showSlide(i); });
        });
        setInterval(function() {
            showSlide((current + 1) % slides.length);
        }, 6000);
    }
});
