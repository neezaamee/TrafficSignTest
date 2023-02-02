
<div class="ui fluid container">
    <div class="row">
        <div class="topnav" id="myTopnav">
            <a href="{{ url('/') }}" class="navbarLink">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Find Us
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/FeedbackForm') }}" class="navbarLink">Leave Feedback</a>
                        <a href="{{ url('/ContactUs')}}" class="navbarLink">Contact Us</a>
                        <a href="{{ url('/AboutFaisalabad') }}" class="navbarLink">About Faisalabad</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Public Services
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/SafetyTips')}}" class="navbarLink">Safety Tips</a>
                        <a href="{{ url('/FinePaymentProcess')}}" class="navbarLink">Fine Payment Process</a>
                        <a href="{{ url('/TrafficSigns')}}" class="navbarLink">Traffic Signs</a>
                        <a href="{{ url('/DrivingTicketsCalculator')}}" class="navbarLink">Driving Tickets Calculator</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Driving License
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/VerifyLicense')}}" class="navbarLink">Verify License</a>
                        <a href="{{ url('/TrackLicense')}}" class="navbarLink">Track License</a>
                        <a href="{{ url('/LearnerPermit')}}" class="navbarLink">Learner Driving Permit</a>
                        <a href="{{ url('/RegularLicense')}}" class="navbarLink">Regular License</a>
                        <a href="{{ url('/RenewLicense')}}" class="navbarLink">Renewal License</a>
                        <a href="{{ url('/DuplicateLicense')}}" class="navbarLink">Duplicate License</a>
                        <a href="{{ url('/EndorsementLicense')}}" class="navbarLink">Endorsement License</a>
                        <a href="{{ url('/InternationalDrivingPermit')}}" class="navbarLink">Int. Driving Permit</a>
                        <a href="{{ url('/InvalidCarriage')}}" class="navbarLink">Invalid Carriage</a>

                    </div>
                </div>

                <a href="{{ url('/Downloads')}}" class="navbarLink">Downloads</a>
                <a href="{{ url('/DrivingTicketsCalculator')}}" class="navbarLink">Ticket Calculator</a>
                {{-- <a href="{{ url('/DrivingTicketsCalculator')}}"><span class="blinking" style="color: yellow;">Ticket Calculator</span></a> --}}
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
        <script>
            // Get the container element
            var btnContainer = document.getElementById("myTopnav");

            // Get all buttons with class="btn" inside the container
            var btns = btnContainer.getElementsByClassName("navbarLink");

            // Loop through the buttons and add the active class to the current/clicked button
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
              });
            }
        </script>
    </div>
</div>
