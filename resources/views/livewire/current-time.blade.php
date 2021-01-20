
{{--<span wire:poll.keep-alive>--}}
{{--        <strong style="font-size: 15pt">{{ now()->format('F j, Y h:i:s A') }}</strong>--}}
{{--</span>--}}


<strong style="font-size: 15pt" id="time"></strong>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
<script type="text/javascript">
    {{--var timestamp = '{{ now() }}';--}}
    {{--function updateTime(){--}}
    {{--    $('#time').html(Date(timestamp.format('MMMM Do YYYY, h:mm:ss a')));--}}
    {{--    timestamp++;--}}
    {{--}--}}
    {{--$(function(){--}}
    {{--    setInterval(updateTime, 1000);--}}
    {{--});--}}

    var update;
    (update = function() {
        document.getElementById("time")
            .innerHTML = moment().format('MMMM DD, YYYY  hh:mm:ss A');
    })();
    setInterval(update, 1000);
</script>
