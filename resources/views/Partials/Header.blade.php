<!--Header Starts Here-->
<header>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div class="ui grid">
        <div class="row">
            <div class="sixteen wide column logo">
                <img src="{{ asset('/img/head.jpg') }}" width="100%" />
            </div>
        </div>
    </div>

    <!--Navbar Starts Here-->
    <div class="ui container navbar">
        <div class="row">
            <div class="topnav" id="myTopnav">
                <a href="{{ url('/') }}" class="active">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">About Us
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/Profile') }}">Profile</a>
                        <a href="{{ url('/CTOsHistory') }}">CTO's History</a>
                        <a href="{{ url('/Messages') }}">Messages</a>
                        <a href="{{ url('/Organogram') }}">Organogram</a>
                        <a href="{{ url('/AboutFaisalabad') }}">About Faisalabad</a>
                        <a href="{{ url('/ContactUs') }}">Contact US</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Public Services
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/GetAppointment')}}">Get Appointment</a>
                        <a href="{{ url('/SafetyTips')}}">Safety Tips</a>
                        <a href="{{ url('/FinePaymentProcess')}}">Fine Payment Process</a>
                        <a href="{{ url('/TrafficSigns')}}">Traffic Signs</a>
                        <a href="{{ url('/TestModules')}}">Sign Test Preparation</a>
                        <a href="{{ url('/DrivingTicketsCalculator')}}">Driving Tickets Calculator</a>
                        <a href="{{ url('/FAQS')}}">Frequently Asked Questions</a>
                        <a href="{{ url('/DrivingSchoolsCTPF')}}">Driving Schools CTPF</a>

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
                <div class="dropdown">
                    <button class="dropbtn">E-Police
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ url('/ComplaintBox')}}">Complaint Box</a>
                        <a href="{{ url('/ComplaintStatus')}}">Complaint Status</a>
                        <a href="{{ url('/Feedback')}}">Feedback</a>
                    </div>
                </div>
                <a href="{{ url('/Downloads')}}">Downloads</a>
                <a href="{{ url('/DrivingSchool')}}"><span class="blinking" style="color: yellow;">Driving Schools CTPF</span></a>
                <a href="{{ url('/TicketCalculator')}}"><span class="blinking" style="color: yellow;">Ticket Calculator</span></a>
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
    <!--Navbar Ends Here-->

</header>
<!--Header Ends Here-->
<br />
