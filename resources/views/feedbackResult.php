<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('Head.php'); ?>

<body>
    <style>
        .feedbackResult {
            margin-top: 20px;
        }

    </style>
    <?php include('Top.php');?>
    <div class="ui stackable grid">
        <div class="feedbackResult contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    Feedback
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>

            <!--Newspane Starts Here-->
            <div class="top-story">
                <div class="row">
                    <div class="ui stackable grid">
                        <div class="ui sixteen wide column">
                            <marquee behavior="scroll" direction="left" loop="true" onmouseover="this.stop()" onmouseout="this.start()" style="padding-bottom:15px; color:#000; font-size:15px;">City Traffic Police Faisalabad is providing excellent services which is corruption free, and well mannered for public. But, if you find or feel and deficiency in our service you can send your views. We greatly appreciate your opinion, please leave us a comment. If there is any particular information that you would like to be added to the site, please do let us know. Sincerely. Chief Traffic Officer Faisalabad.</marquee>
                        </div>
                    </div>

                </div>

            </div>
            <br>
            <!--Newspane Ends Here-->

            <div class="feedbackResultBox ui centered aligned grid">
                <!-- Complaint Box Form-->
                <div class="feedbackResultBody sixteen wide mobile ten wide tablet six wide computer column centered">
                    <!-- Register Complaint PHP-->
                    <?php
                        if(isset($_POST['feedback']))
                        {
                            $fbType = CleanData($_POST['fbtype']);
                            $fbSubject = CleanData($_POST['fbsubject']);	
                            $fbName = CleanData($_POST['fbname']);
                            $fbCnic = CleanData($_POST['fbcnic']);
                            $fbContact = CleanData($_POST['fbcontact']);
                            $fbEmail = CleanData($_POST['fbemail']);
                            $fbAddress = CleanData($_POST['fbaddress']);
                            $fbOrganization = CleanData($_POST['fborganization']);
                            $fbTo = CleanData($_POST['fbto']);
                            $fbText = CleanData($_POST['fbcomments']);
                            $feedbackQ = "INSERT INTO feedback(fbtype,fbsubject,name,cnic,contact,email,address,organization,fbto,fbtext) VALUES('$fbType','$fbSubject','$fbName','$fbCnic','$fbContact','$fbEmail','$fbAddress','$fbOrganization','$fbTo','$fbText')";
                            $feedbackQR = mysqli_query($con,$feedbackQ);
                                if($feedbackQR)
                                {       
                                    echo "<center><h3>Thank You <br/> Your Feed back is precious for us.</h3></center>";
                                    ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = 'index';
                        }, 5000);

                    </script>
                    <script>
                        //window.location = "addItem2.php"
                        //window.history.go(-1);

                    </script>
                    <?php
                                    die();
                                }
                                else
                                {
                                    echo mysqli_error($con);
                                    echo "<h3 class='text-center'>Try Again.</h3>";
                                }

                            }
                        ?>
                    <!--/ Register Complaint Php-->
                </div>
                <!--/ Complaint Result-->
            </div>
            <!--/ Complaint Result Box-->
        </div>
        <!--/complaintResult contentBox-->
    </div>
    <!--/stackable grid-->
    <?php include('Footer.php');?>

    <!--LiveChat Script(powered by mylivechat.com)-->
    <script type="text/javascript">
        function add_chatinline() {
            var hccid = 13875899;
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
