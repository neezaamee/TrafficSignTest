<style>
    
    .blinking{
    animation:blinkingText 1.2s infinite;
    color: white;
}
@keyframes blinkingText{
    0%{     color: yellow;    }
    49%{    color: yellow; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: yellow;    }
}
</style>

<!--Header Starts Here-->
<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div class="ui grid">
        <div class="row">
            <div class="sixteen wide column logo">
                <img src="img/head.jpg" width="100%" />
            </div>
        </div>
    </div>

    <!--Navbar Starts Here-->
    <div class="ui container navbar">
        <div class="row">
            <div class="topnav" id="myTopnav">
                <a href="./index" class="active">Home</a>

                <div class="dropdown">
                    <button class="dropbtn">About Us
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="Profile">Profile</a>
                        <a href="ctoHistory">CTO's History</a>
                        <a href="Messages">Massages</a>
                        <a href="Organogram">Organogram</a>
                        <a href="aboutFsd">About Faisalabad</a>
                        <a href="contactUs">Contact US</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Public Services
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="safetyTips">Safety Tips</a>
                        <a href="Fine">Fine Payment Process</a>
                        <a href="trafficSigns">Traffic Signs</a>
                        <a href="vehicleRegistration">Verify Vehicle Registration</a>
                        <a href="testModules">Sign Test Preparation</a>
                        <a href="DrivingTicketCalculator">Ticket Calculator</a>
                        <a href="Faq">Frequently Asked Questions</a>
                        <a href="drivingSchool">Driving Schools CTPF</a>

                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Driving License
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="verifyLicense">Verify License</a>
                        <a href="trackLicense">Track License</a>
                        <a href="Learner">Learner Driving Permit</a>
                        <a href="regularLicense">Regular License</a>
                        <a href="intLicense">Int. Driving Permit</a>
                        <a href="duplicateLicense">Duplicate License</a>
                        <a href="renewLicense">Renewal License</a>
                        <a href="Endorsment">Endorsement License</a>
                        <a href="oldToNewLicense">Old to New License</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">E-Police
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="complaintBox">Complaint Box</a>
                        <a href="trackComplaint">Complaint Status</a>
                        <a href="feedBack">Feedback</a>
                    </div>
                </div>
                <a href="Downloads">Downloads</a>
                <a href="imgGallery">Gallery</a>
                <!--a href="2getTestTime"><span class="blinking" style="color: yellow;">Appointment For Driving Test</span></a-->
                <!--a href="2getTestTime">Appointment For Driving Test</a-->
                
                <a href="drivingSchool"><span class="blinking" style="color: yellow;">Driving Schools CTPF</span></a>

                <a href="DrivignTicketCalculator"><span class="blinking" style="color: yellow;">Ticket Calculator</span></a>

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
