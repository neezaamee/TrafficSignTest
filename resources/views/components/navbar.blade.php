<div class="ui fluid container">
    <div class="row">
        <div class="topnav" id="myTopnav">
            <a href="{{ url('/') }}" class="active">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">About Us
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/AboutFaisalabad') }}">About Faisalabad</a>
                        <a href="{{ url('/ContactUs')}}">Feedback</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Public Services
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/SafetyTips')}}">Safety Tips</a>
                        <a href="{{ url('/FinePaymentProcess')}}">Fine Payment Process</a>
                        <a href="{{ url('/TrafficSigns')}}">Traffic Signs</a>
                        <a href="{{ url('/DrivingTicketsCalculator')}}">Driving Tickets Calculator</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Driving License
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/VerifyLicense')}}">Verify License</a>
                        <a href="{{ url('/TrackLicense')}}">Track License</a>
                        <a href="{{ url('/LearnerPermit')}}">Learner Driving Permit</a>
                        <a href="{{ url('/RegularLicense')}}">Regular License</a>
                        <a href="{{ url('/RenewLicense')}}">Renewal License</a>
                        <a href="{{ url('/DuplicateLicense')}}">Duplicate License</a>
                        <a href="{{ url('/EndorsementLicense')}}">Endorsement License</a>
                        <a href="{{ url('/InternationalDrivingPermit')}}">Int. Driving Permit</a>
                        <a href="{{ url('/InvalidCarriage')}}">Invalid Carriage</a>

                    </div>
                </div>
                
                <a href="{{ url('/Downloads')}}">Downloads</a>
                <a href="{{ url('/DrivingTicketsCalculator')}}">Ticket Calculator</a>
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
    </div>
</div>