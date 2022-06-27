var target_date = new Date('11/19/2022 6:00 PM').getTime();

var days, hours, minutes, seconds;
function checarTiempo() {
    setInterval(function () {
        var current_date = new Date().getTime();

        var seconds_left = (target_date - current_date) / 1000;

        days = parseInt(seconds_left / 86400);

        seconds_left = seconds_left % 86400;

        hours = parseInt(seconds_left / 3600);

        seconds_left = seconds_left % 3600;

        minutes = parseInt(seconds_left / 60);

        seconds = parseInt(seconds_left % 60);
        document.getElementById('date-day').innerHTML = days;
        document.getElementById('date-hr').innerHTML = hours;
        document.getElementById('date-min').innerHTML = minutes;
        document.getElementById('date-seg').innerHTML = seconds;

    }, 1000);
    var myCarousel = document.querySelector('#carouselExampleSlidesOnly')
    var carousel = new bootstrap.Carousel(myCarousel)
}