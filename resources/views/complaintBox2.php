<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('Head.php'); ?>
<script>
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Letters only please");

</script>
<script src="https://www.google.com/recaptcha/api.js?render=6LfRxeoUAAAAAEmIaFxR3Ic0Pw_YBPcT6d8XDZVJ"></script>
<?php
if(isset($_POST) && isset($_POST['regComplaint']))
{
  $secretKey = '6LfRxeoUAAAAAKhUxO3GDZaEYCCy9SN3OmL3b6qK';
  $token = $_POST["g-toekn"];
  $ip = $_SERVER['REMOTE_ADDR'];
  
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."$response=".$token."$remoteip=".$ip;
  $request = file_get_contents($url);
  $response = json_decode($request);
}
?>


<body>
    <style>
        .complaint {
            margin-top: 20px;
        }

    </style>
    <?php include('Top.php');?>
    <div class="ui stackable grid">
        <div class="complaint contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    Register a Complaint
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>

            <!--Newspane Starts Here-->
            <div class="top-story">
                <div class="row">
                    <div class="ui stackable grid">
                        <div class="ui sixteen wide column">
                            <marquee behavior="scroll" direction="left" loop="true" onmouseover="this.stop()" onmouseout="this.start()" style="padding-bottom:15px; color:#000; font-size:1.5em;">City Traffic Police Faisalabad is providing excellent services which is corruption free, and well mannered for public. But, if you find or feel and deficiency in our service you can send your views. We greatly appreciate your opinion, please leave us a comment. If there is any particular information that you would like to be added to the site, please do let us know. Sincerely. Chief Traffic Officer Faisalabad.</marquee>
                        </div>
                    </div>

                </div>

            </div>
            <br>
            <!--Newspane Ends Here-->

            <div class="complaintBox ui centered aligned grid">
                <!-- Complaint Box Form-->
                <div class="complaintForm sixteen wide mobile ten wide tablet six wide computer column centered">
                    <form action="complaintResult.php" method="post" id="regComp">
                        <input type="hidden" id="g-token" name="g-toekn" />
                        <div class="ui form piled segment secondary red">
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Complaint Type: </label>
                                    <select name="comptype" id="comptype">
                                        <option value="misconduct">Misconduct</option>
                                        <option value="corruptions">Corruption</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Subject:</label>
                                    <input type="text" name="compsubject" id="compsubject" placeholder="Complaint Subject">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Name:</label>
                                    <input name="compname" id="compname" type="text" placeholder="Type Your Name Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>CNIC No:</label>
                                    <input name="compcnic" id="compcnic" type="text" placeholder="Type Your CNIC Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>Contact No:</label>
                                    <input name="compcontact" id="compcontact" type="text" placeholder="Type Your Contact Number Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Email:</label>
                                    <input name="compemail" id="compemail" type="email" placeholder="Type Your Email Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>Address:</label>
                                    <input name="compaddress" id="compaddress" type="text" placeholder="Type Your Address Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>Organization:</label>
                                    <input name="comporganization" id="comporganization" type="text" placeholder="Type Organization Name Here">
                                </div>
                            </div>
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>To: </label>
                                    <select name="compto" id="compto">
                                        <option value="CTO">CTO</option>
                                        <option value="DSP/HQ">DSP/Hqr</option>
                                        <option value="I Don't Know">I Don't Know</option>
                                    </select>
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Complaint: </label>
                                    <textarea name="comptext" id="compcomplaint" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <br>
                            <center>

                                <button type="submit" name="regComplaint" class="ui red wide button">Register Complaint</button>
                            </center>
                        </div>
                        <!--/ ui form segment-->
                    </form>
                </div>
                <!--/ Complaint Box Form-->
            </div>
            <!--/ Complaint Box-->
        </div>
        <!--/contentBox-->
    </div>
    <!--/stackable grid-->

    <script type="text/javascript">
        $(document).ready(function() {

            $("#regComp").validate({
                rules: {
                    comptype: {
                        required: true,
                        lettersonly: true
                    },
                    compsubject: {
                        required: true,
                        lettersonly: true
                    },
                    compname: {
                        required: true,
                        lettersonly: true
                    },
                    compcnic: {
                        number: true,
                        minlength: 13,
                        maxlength: 13
                    },
                    compcontact: {
                        number: true,
                        minlength: 10,
                        maxlength: 11
                    },
                    compemail: {
                        required: true,
                        email: true
                    },
                    compaddress: {
                        maxlength: 100
                    },
                    comporganization: {
                        lettersonly: true
                    },
                    compto: {
                        required: true
                    },
                    comptext: {
                        required: true,
                        maxlength: 1500
                    }

                },
                messages: {
                    comptype: {

                    },
                    compsubject: {

                    },
                    compname: {

                    },
                    compcnic: {

                    },
                    compcontact: {
                        maxlength: "Maximum Length for Contact is 11",
                        minlength: "Minimum Length for Contact is 10"
                    },
                    compemail: {

                    },
                    compaddress: {

                    },
                    comporganization: {

                    },
                    compto: {

                    },
                    comptext: {

                    }


                }
            });
        });

    </script>
    <script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LfRxeoUAAAAAEmIaFxR3Ic0Pw_YBPcT6d8XDZVJ', {action: 'homepage'}).then(function(token) {
       document.getElementById("g-token").value = token;
    });
});
</script>
    <br>
    <?php include('Footer.php');?>

    <!--LiveChat Script(powered by mylivechat.com)-->
    <script type="text/javascript">
        function add_chatinline() {
            var hccid = 85739534;
            var nt = document.createElement("script");
            nt.async = true;
            nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
            var ct = document.getElementsByTagName("script")[0];
            ct.parentNode.insertBefore(nt, ct);
        }
        add_chatinline();

    </script>
    <!--/LiveChat Script-->
</body>

</html>
