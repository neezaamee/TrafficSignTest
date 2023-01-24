<?php
//adding external connection file
require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include('Head.php'); ?>

<head>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/cupertino/jquery-ui.css">
    <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("#date").datepicker({
                minDate: 1,
                dateFormat: 'dd-mm-yy'
            });
        });

    </script>
</head>
<script>
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Letters only please");

</script>

<body>
    <style>
        .feedBack {
            margin-top: 20px;
        }

    </style>
    <?php include('Top.php');?>
    <div class="ui stackable grid">
        <div class="feedBack contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    Get Appointment for Driving Test
                </h1>
            </div>
            <!--/heading-->
            <div class="ui horizontal divider"></div>
            <div class="top-story">
                <div class="row">
                    <div class="ui stackable grid">
                        <div class="ui sixteen wide column">
                            <center> <span><b>Note: </b></span>
                                <br /> Days for Motor Cycle, Car, Tractor Agri = Monday, Wednesday, Friday, Saturday
                                <br /> Days for LTV = Tuesday, Thursday
                                <br /> Days for HTV,PSV = First Saturday of the Month + Third Saturday of the Month
                                <br />
                                <h2><span id="txtHint" style="color: red"></span></h2>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <?php
                /*$GetStockQ = "SELECT * FROM testappointment ORDER BY time_code DESC LIMIT 1"; $GetStockQR = mysqli_query($con,$GetStockQ); $GetStockNR = mysqli_num_rows($GetStockQR); $GetStockRow = mysqli_fetch_assoc($GetStockQR); $lastTimeCode=$GetStockRow['time_code'];*/
            
            ?>
            <!--Newspane Ends Here-->
            <div class="feedBackBox ui centered aligned grid">
                <div class="feedBackForm sixteen wide mobile ten wide tablet six wide computer column centered">
                    <form action="testAppointmentSaveData" method="post" id="getAppointment">
                        <div class="ui form piled segment secondary blue">
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Date:</label>
                                    <input name="date" id="date" type="text"> </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Name:</label>
                                    <input name="name" id="name" type="text" placeholder="Type Your Name Here"> </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>CNIC No:</label>
                                    <input name="cnic" id="cnic" type="text" placeholder="Type Your CNIC Here" required> </div>
                            </div>
                            <!--/ ui fields-->
                            <br>
                            <center>
                                <button type="submit" name="testAppointment" class="ui blue wide button">Submit</button>
                            </center>
                        </div>
                        <!--/ ui form segment-->
                    </form>
                </div>
                <!--/ feedBack Form-->
            </div>
            <!--/ feedBack Box-->
        </div>
        <!--/contentBox-->
    </div>
    <!--/stackable grid-->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#getAppointment").validate({
                rules: {
                    date: {
                        required: true
                    },
                    name: {
                        required: true,
                        lettersonly: true,
                        minlength: 3,
                        maxlength: 100
                    },
                    cnic: {
                        number: true,
                        minlength: 13,
                        maxlength: 13
                    }
                },
                messages: {
                    fbtype: {},
                    fbsubject: {},
                    fbname: {
                        maxlength: "Maximum Length for Name is 100 Characters.",
                        minlength: "Minimum Length for Name is 3 Characters."
                    },
                    fbcnic: {
                        maxlength: "Maximum Length for Contact is 11 starting with 0.   ",
                        minlength: "Minimum Length for Contact is 10 starting with 0.   "
                    },
                    fbcontact: {},
                    fbemail: {},
                    fbaddress: {},
                    fborganization: {},
                    fbto: {},
                    fbtext: {}
                }
            });
        });

    </script>
    <br>
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
