$(window).load(function() {  
	
    	CountDownTimer('08/15/2015 11:59 PM', 'countdown', 'days', 'hours', 'minutes', 'seconds');

    function CountDownTimer(dt, id, dd, hh, mm, ss) {
        var end = new Date(dt);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            if (distance < 0) {

                clearInterval(timer);
                document.getElementById(dd).innerHTML = '00';
            	document.getElementById(hh).innerHTML = '00';
            	document.getElementById(mm).innerHTML = '00';
            	document.getElementById(ss).innerHTML = '00';

                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

            document.getElementById(dd).innerHTML = days;
            document.getElementById(hh).innerHTML = hours;
            document.getElementById(mm).innerHTML = minutes;
            document.getElementById(ss).innerHTML = seconds;
        }

        timer = setInterval(showRemaining, 1000);
    }

});