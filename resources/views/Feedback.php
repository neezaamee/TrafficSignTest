<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<script>
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Letters only please");

</script>
<!--<script src="https://www.google.com/recaptcha/api.js?render=6LfRxeoUAAAAAEmIaFxR3Ic0Pw_YBPcT6d8XDZVJ"></script>-->
<?php
/*if(isset($_POST) && isset($_POST['feedback']))
{
  $secretKey = '6LfRxeoUAAAAAKhUxO3GDZaEYCCy9SN3OmL3b6qK';
  $token = $_POST["g-toekn"];
  $ip = $_SERVER['REMOTE_ADDR'];
  
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."$response=".$token."$remoteip=".$ip;
  $request = file_get_contents($url);
  $response = json_decode($request);
}*/
?>

<body>
    <style>
        .feedBack {
            margin-top: 20px;
        }

    </style>
    <div class="ui stackable grid">
        <div class="feedBack contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    <?= $pageHeading; ?>
                </h1>
            </div>
            <!--/heading-->
            <div class="ui horizontal divider"></div>
            <div class="top-story">
                <div class="row">
                    <div class="ui stackable grid">
                        <div class="ui sixteen wide column">
                            <marquee behavior="scroll" direction="left" style="padding-bottom:15px; color:#000; font-size:15px;">City Traffic Police Faisalabad is providing excellent services which is corruption free, and well mannered for public. But, if you find or feel and deficiency in our service you can send your views. We greatly appreciate your opinion, please leave us a comment. If there is any particular information that you would like to be added to the site, please do let us know. Sincerely. Chief Traffic Officer Faisalabad.</marquee>
                        </div>
                    </div>

                </div>

            </div>
            <br>
            <!--Newspane Ends Here-->

            <?php if ($Result == null): ?>
            <div class="feedBackBox ui centered aligned grid">
                <div class="feedBackForm sixteen wide mobile ten wide tablet six wide computer column centered">
                    <form action="<?= base_url(); ?>/AdminPanel/FeedbackRegister" method="post" id="regFeedback">
                        <div class="ui form piled segment secondary blue">
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>Feedback Type: </label>
                                    <select name="fbtype" id="fbtype">
                                        <option value="Suggestion">Suggestion</option>
                                        <option value="General">General</option>
                                    </select>
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Subject:</label>
                                    <input name="fbsubject" id="fbsubject" type="text" placeholder="Complaint Subject">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Name:</label>
                                    <input name="fbname" id="fbname" type="text" placeholder="Type Your Name Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>CNIC No:</label>
                                    <input name="fbcnic" id="fbcnic" type="text" placeholder="Type Your CNIC Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>Contact No:</label>
                                    <input name="fbcontact" id="fbcontact" type="text" placeholder="Type Your Contact Number Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Email:</label>
                                    <input name="fbemail" id="fbemail" type="email" placeholder="Type Your Email Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>Address:</label>
                                    <input name="fbaddress" id="fbaddress" type="text" placeholder="Type Your Address Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>Organization:</label>
                                    <input name="fborganization" id="fborganization" type="text" placeholder="Type Organization Here">
                                </div>
                            </div>
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>To: </label>

                                    <select name="fbto" id="fbto">
                                        <option value="CTO">CTO</option>
                                        <option value="DSP/HQ">DSP/Hqr</option>
                                        <option value="I Don't Know">I Don't Know</option>
                                    </select>
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Massage: </label>

                                    <textarea name="fbcomments" id="fbcomplaint" cols="30" rows="10" required></textarea>
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <br>
                            <center>
                                <button type="submit" name="feedback" class="ui blue wide button">Submit</button>
                            </center>

                        </div>
                        <!--/ ui form segment-->
                    </form>
                </div>
                <!--/ feedBack Form-->
            </div>
            <?php else: ?>

            <?= $Result; ?>

            <?php endif ?>
            <!--/ feedBack Box-->
        </div>
        <!--/contentBox-->
    </div>
    <!--/stackable grid-->

    <script type="text/javascript">
        $(document).ready(function() {

            $("#regFeedback").validate({
                rules: {
                    fbtype: {
                        required: true,
                        lettersonly: true
                    },
                    fbsubject: {
                        required: true,
                        lettersonly: true
                    },
                    fbname: {
                        required: true,
                        lettersonly: true
                    },
                    fbcnic: {
                        number: true,
                        minlength: 13,
                        maxlength: 13
                    },
                    fbcontact: {
                        number: true,
                        minlength: 10,
                        maxlength: 11
                    },
                    fbemail: {
                        required: true,
                        email: true
                    },
                    fbaddress: {
                        maxlength: 100
                    },
                    fborganization: {
                        lettersonly: true
                    },
                    fbto: {
                        required: true
                    },
                    fbtext: {
                        required: true,
                        maxlength: 1500
                    }

                },
                messages: {
                    fbtype: {

                    },
                    fbsubject: {

                    },
                    fbname: {

                    },
                    fbcnic: {

                    },
                    fbcontact: {
                        maxlength: "Maximum Length for Contact is 11 starting with 0.   ",
                        minlength: "Minimum Length for Contact is 10 starting with 0.   "
                    },
                    fbemail: {

                    },
                    fbaddress: {

                    },
                    fborganization: {

                    },
                    fbto: {

                    },
                    fbtext: {

                    }


                }
            });
        });

    </script>
    <!--<script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfRxeoUAAAAAEmIaFxR3Ic0Pw_YBPcT6d8XDZVJ', {
                action: 'homepage'
            }).then(function(token) {
                document.getElementById("g-token").value = token;
            });
        });

    </script>-->


    <?= $this->endSection(); ?>
