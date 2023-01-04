<div>
    <p class="countdown" id="countdown"></p>
</div>

@push('styles')
    <style>
        .countdown {
            text-align: center;
            font-size: 50px;
            margin-top: 0px;
            color: darkorange;
        }
        </style>
@endpush
@push('scripts-first')
    <script>
        var finalEnglishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};

        //Converting english numbers into bangla
        String.prototype.getDigitBanglaFromEnglish = function() {
            var retStr = this;
            for (var x in finalEnglishToBanglaNumber) {
                retStr = retStr.replace(new RegExp(x, 'g'), finalEnglishToBanglaNumber[x]);
            }
            return retStr;
        };
        // Set the date we're counting down to
        let datetime = '{{ $year->election_date }}';
        var countDownDate = new Date(datetime).getTime();
        // Update the count-down every 1 second
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
            document.getElementById("countdown").innerHTML = "আর মাত্র<br>"+days.toString().getDigitBanglaFromEnglish()+ " দিন " + hours.toString().getDigitBanglaFromEnglish() + " ঘন্টা "
                + minutes.toString().getDigitBanglaFromEnglish() + " মিনিট " + seconds.toString().getDigitBanglaFromEnglish() + " সেকেন্ড <br> বাকী";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "ভোট গ্রহণ শুরু হয়েছে";
            }
        }, 1000);
    </script>
@endpush
