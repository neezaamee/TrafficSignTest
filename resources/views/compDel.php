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
</head>

<body>
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

    </style>
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
    <?php 
if(isset($_GET['compID']))
{
	$complaintID =  $_GET['compID'];
	
	$complaintIDQ = "DELETE from complaints where id='$complaintID';";
	
	$complaintIDQR = mysqli_query($con,$complaintIDQ);
	
	if($complaintIDQR)
	{
		
		echo "<center><h3 class=\"text-center\">Complaint deleted.</h3></center>";
		?>
    <script>
        setTimeout(function() {
            window.location.href = 'adminComplaints';
        }, 1000);

    </script>
    <?php
	}
	else
	{
		echo "<h3 class=\"text-center\">Try Again. </h3>";
	}
	
}?>

</body>

</html>
