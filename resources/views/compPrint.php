<?php session_start();
    require_once('sessionSet.php');
    require_once('connection.php');
    include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.0/css/select.semanticui.min.css">-->



    <!--DataTable JS Library-->
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <!--
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.semanticui.min.js"></script>
-->

    <style>
        .Administrator {
            margin-top: 20px;
        }

        .complaintTable {
            width: 98%;
        }

        @media only screen and (max-width: 780px) {
            .Administrator img {
                width: 100%;
            }
        }
        @media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}

    </style>
</head>

<body onload="window.print();">
    <!--Header Starts Here-->
    <header>
        <div class="ui grid">
            <div class="row">
                <div class="sixteen wide column logo">
                    <img src="img/head.jpg" width="100%" />
                </div>
            </div>
        </div>
    </header>
    <!--Header Ends Here-->
    <div class="heading">
        <hr class="ui horizontal divider header">
        <h1 class="ui horizontal divider header">
            
            Print Complaint
            <a href="adminCtpFsd1915" class="no-print"><br>go back</a>
        </h1>
        
    </div>
    <!--Fetch Complaint Data-->
    <?php  
if(isset($_GET['compID']))
{
	 $complaintID =  $_GET['compID'];
    
    /* get complaint details */
	 $complaintDataQ = "select * from complaints where id='$complaintID'";
    
	 $complaintDataQR = mysqli_query($con,$complaintDataQ);    
     $complaintDataRow = mysqli_fetch_assoc($complaintDataQR);
     $compID=$complaintDataRow['id'];
     $compDate = $complaintDataRow['date'];
     $compType = $complaintDataRow['comptype'];
     $compSubject = $complaintDataRow['compsubject'];
     $Name = $complaintDataRow['name'];
     $CNIC = $complaintDataRow['cnic'];
     $Contact = $complaintDataRow['contact'];
     $Email = $complaintDataRow['email'];
     $Address = $complaintDataRow['address'];
     $Organization = $complaintDataRow['organization'];
     $complaintTo = $complaintDataRow['compto'];
     $complaintText = $complaintDataRow['complainttext'];
     $compStatus = $complaintDataRow['compstatus'];
     $trackingID = $complaintDataRow['trackingid'];
    //get date from datetime stamp
    $date = new DateTime($compDate);
    $compDate = $date->format('d/m/Y');
    //Complaint Status Text change to To Be Replied
    if($compStatus == "being processed"){
        $compStatus = "Status to be updated";
    }

    ?>

    <div class="complaintBox ui centered aligned grid">
        <!-- Complaint Box Form-->
        <div class="complaintForm sixteen wide mobile ten wide tablet six wide computer column centered">

            <br />
            <div class="ui form piled segment secondary red">

                <div class="ui fields">
                    <div class="four wide field">
                        <label>Complaint Tracking ID: </label>
                        <p name="comptext" id="compcomplaint" cols="30" rows="10"><?php echo $trackingID;?></p>
                    </div>
                    <div class="four wide field">
                        <label>Complaint Type: </label>
                        <p type="text" name="comptype" id="comptype"><?php echo $compType; ?>
                    </div>
                    <div class="four wide field">
                        <label>To: </label>
                        <p type="text" name="compto" id="compto"><?php echo $complaintTo;?></p>

                    </div>
                    <div class="four wide field">
                        <label>Dated: </label>
                        <p type="text" name="date" id="date"><?php echo $compDate;?></p>

                    </div>
                </div>
                <!--/ ui fields-->
                <div class="ui fields">
                    <div class="four wide field">
                        <label>Name:</label>
                        <p name="compname" id="compname" type="text"><?php echo $Name;?>
                    </div>
                    
                    
                    <div class="four wide field">
                        <label>CNIC No:</label>
                        <p name="compcnic" id="compcnic" type="text" placeholder="Type Your CNIC Here"><?php echo $CNIC;?></p>
                    </div>
                    <div class="four wide field">
                        <label>Contact No:</label>
                        <p name="compcontact" id="compcontact" type="text" placeholder="Type Your Contact Number Here"><?php echo $Contact;?></p>
                    </div>
                    <div class="four wide field">
                        <label>Email:</label>
                        <p name="compname" id="compname" type="text"><?php echo $Email;?>
                    </div>
                </div>
                <!--/ ui fields-->
                <div class="ui fields">
                    <div class="sixteen wide field">
                        <label>Subject:</label>
                        <p type="text" name="compsubject" id="compsubject"><?php echo $compSubject; ?>
                    </div>
                </div>
                <!--/ ui fields-->

                <div class="ui fields">
                    <div class="sixteen wide field">
                        <label>Complaint Text: </label>
                        <p name="comptext" id="compcomplaint" cols="30" rows="10"><?php echo $complaintText;?></p>
                    </div>
                </div>
                <div class="ui fields">
                    <div class="sixteen wide field">
                        <label>Complaint Status: </label>
                        <p name="compstatus" id="compstatus" cols="30" rows="10"><?php echo $compStatus;?></p>
                    </div>
                </div>

            </div>
            <!--/ ui form segment-->

        </div>
        <!--/ Complaint Box Form-->
    </div>
    <!--/ Complaint Box-->

    <?php

}?>
    <!--/Fetch Complaint Data-->
</body>
<script>
    setTimeout(function() {
        window.location.href = 'adminComplaints';
    }, 1000);

</script>
</html>
