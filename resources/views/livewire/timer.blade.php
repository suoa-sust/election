<div>
    <p class="countdown" id="countdown"></p>
</div>

@push('styles')
    <style>
        .countdown {
            text-align: center;
            font-size: 60px;
            margin-top: 0px;
            color: darkorange;
        }
        </style>
@endpush
@push('scripts-first')
    <script>
        // Set the date we're counting down to
        let datetime = '{{ $year->election_date }}';
        var countDownDate = new Date(datetime).getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("countdown").innerHTML = "আর মাত্র<br>"+ days + " দিন " + hours + " ঘন্টা "
                + minutes + " মিনিট " + seconds + " সেকেন্ড <br> বাকী";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "ভোট গ্রহণ চলছে";
            }
        }, 1000);
    </script>
@endpush
