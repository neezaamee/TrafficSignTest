<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('Head.php'); ?>

<body>
    <style>
        .complaintResult {
            margin-top: 20px;
        }

    </style>
    <?php include('Top.php');?>
    <div class="ui stackable grid">
        <div class="complaintResult contentBox" style="width: 100%;">
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
                            <marquee behavior="scroll" direction="left" loop="true" onmouseover="this.stop()" onmouseout="this.start()" style="padding-bottom:15px; color:#000; font-size:15px;">City Traffic Police Faisalabad is providing excellent services which is corruption free, and well mannered for public. But, if you find or feel and deficiency in our service you can send your views. We greatly appreciate your opinion, please leave us a comment. If there is any particular information that you would like to be added to the site, please do let us know. Sincerely. Chief Traffic Officer Faisalabad.</marquee>
                        </div>
                    </div>

                </div>

            </div>
            <br>
            <!--Newspane Ends Here-->

            <div class="complaintResultBox ui centered aligned grid">
                <!-- Complaint Box Form-->
                <div class="complaintResult sixteen wide mobile ten wide tablet six wide computer column centered">
                    <!-- Register Complaint PHP-->
                    <?php
                        if(isset($_POST['regComplaint']))
                        {
                            $date=date("dmy");
                            $randomNum=mt_rand(1,100000);
                            $trackingID =$date."-CTO-".$randomNum;//generate tracking number
                            $compType = CleanData($_POST['comptype']);
                            $compSubject = CleanData($_POST['compsubject']);	
                            $compName = CleanData($_POST['compname']);
                            $compCnic = CleanData($_POST['compcnic']);
                            $compContact = CleanData($_POST['compcontact']);
                            $compEmail = CleanData($_POST['compemail']);
                            $compAddress = CleanData($_POST['compaddress']);
                            $compOrganization = CleanData($_POST['comporganization']);
                            $compTo = CleanData($_POST['compto']);
                            $compText = CleanData($_POST['comptext']);
                            $regComplaintQ = "INSERT INTO complaints(comptype,compsubject,name,cnic,contact,email,address,organization,compto,complainttext,compstatus,trackingid) VALUES('$compType','$compSubject','$compName','$compCnic','$compContact','$compEmail','$compAddress','$compOrganization','$compTo','$compText','being processed','$trackingID')";
                            $regComplaintQR = mysqli_query($con,$regComplaintQ);
                            $insertID =mysqli_insert_id($con);//get last insert id

                                if($regComplaintQR)
                                {       
                                    echo "<center><h3>Complaint Registered <span style='color: green;'>Successfully.</span><br/><br/> Your Complaint Tracking ID is <br/><span style='color: blue;'> ".$trackingID."<br> </span><br></h3><u><b>Note: </b><br />Don't Forget to note the Tracking ID.<br />You can track your complaint at https://ctpfsd.gop.pk/trackComplaint </u></center>";
                                    ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = 'index';
                        }, 50000);

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
