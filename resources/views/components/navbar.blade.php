<div class="ui container navbar">
    <div class="row">
        <div class="topnav" id="myTopnav">
            <a href="{{ url('/') }}" class="active">Home</a>
            <a href="{{ url('/TrafficSigns') }}">Signs Preparation</a>
            <a href="{{ url('/SignTest')}}">Take Sign Test</a>
            <a href="{{ url('/DrivingTicketsCalculator')}}">Ticket Calculator</a>
            {{-- <a href="{{ url('/TicketCalculator')}}"><span class="blinking" style="color: yellow;">Ticket Calculator</span></a> --}}
            <a href="{{ url('/ContactUs')}}">Contact Us</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        <script>
            /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </div>
</div>