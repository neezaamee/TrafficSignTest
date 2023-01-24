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
                    Appointment for Driving Test
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
                        if(isset($_POST['testAppointment']))
                        {
                            	
                            $Date = CleanData($_POST['date']);
                            
$people = array("30-07-2020", "31-07-2020", "01-08-2020", "02-08-2020", "03-08-2020");

if (in_array($Date, $people))
  {
  echo "<center><h3>Select Date after 03-08-2020 due to Eid ul Azha Holidays</h3></center>";
  }
else
  {
$Name = CleanData($_POST['name']);
                            $CNIC = CleanData($_POST['cnic']);
                            $sql = "SELECT * FROM testappointment WHERE cnic='$CNIC' AND date='$Date'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $appointmentToken = $row["token"];
                            $appointmentCNIC = $row["cnic"];
                          
                                echo "<center><h3> CNIC ".$appointmentCNIC."<br />has already Appointment for ".$Date." <br /> Your Appointment Token is <br /> ".$appointmentToken." </h3></center>";
                                ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = '2getTestTime';
                        }, 20000);

                    </script>
                    <?php
                          }
                        else {
                            $GetStockQ = "select * from testappointment where date='$Date' Order By appointmentno DESC LIMIT 1";
                            $result2 = $conn->query($GetStockQ);
                            if($result2->num_rows > 0)
                            {
                                $appointmentTime = 0;
                         while($row = $result2->fetch_assoc())
                         {
                             $lastAppointmentNo = $row['appointmentno'];
                             if($lastAppointmentNo <= 4){
                                 $lastAppointmentNo++;                                 
                                 switch ($lastAppointmentNo) {
                                          case 2:
                                            $appointmentTime="11:00am";
                                            break;
                                          case 3:
                                            $appointmentTime="11:30am";
                                            break;
                                          case 4:
                                            $appointmentTime="12:00pm";
                                            break;                                         
                                          case 5:
                                            $appointmentTime="12:30pm";
                                            break;
                                          case 6:
                                            $appointmentTime="01:00pm";
                                            break;
                                          case 7:
                                            $appointmentTime="01:30pm";
                                            break;
                                          case 8:
                                            $appointmentTime="02:00pm";
                                            break;
                                          case 9:
                                            $appointmentTime="02:30pm";
                                            break;
                                          case 10:
                                            $appointmentTime="03:00pm";
                                            break;
                                          default:
                                            $appointmentTime="03:30pm";
                                        }
                                 
                                 
                                 $insertQ = "INSERT INTO testappointment(date,appointmentno,time,name,cnic) VALUES('$Date','$lastAppointmentNo','$appointmentTime','$Name','$CNIC')";
                                 $insertQR = $conn->query($insertQ);
                                if($insertQR)
                                {
                                    $last_id = $conn->insert_id;
                                    $getDataLastInsertQ = "select * from testappointment where id='$last_id'";
                                    $getDataLastInsertQR = $conn->query($getDataLastInsertQ);                                    
                                if($getDataLastInsertQR->num_rows > 0){
                                    $getDataLastInsertRow= $getDataLastInsertQR->fetch_assoc();
                                    $lastDate = $getDataLastInsertRow['date'];
                                    $lastTime = $getDataLastInsertRow['time'];
                                    $lastName = $getDataLastInsertRow['name'];
                                    $appointmentToken = $lastDate."-CTP-".$lastAppointmentNo."-".$lastName;
                                    
                                    
                                    $updateTokenQ = "UPDATE testappointment SET token='$appointmentToken' WHERE id='$last_id'";
                                    if ($conn->query($updateTokenQ) === TRUE)
                                    {
                                        echo "<center><h3>Thank You <br/> Your Appointment is Booked. Your Appointment Token is <br /> ".$appointmentToken."<br/>You have to Appear in Test Center between 8am to 9am along with screen shot aur printed Token Number</h3></center>";
                                        }
                                    else {
                                            echo "Error updating record: " . $conn->error;
                                        }                                  
                                    
                                }                                    
                                    ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = '2getTestTime';
                        }, 200000);

                    </script>
                    <?php
                                }
                                else
                                {
                                    echo mysqli_error($con);
                                    echo "<h3 class='text-center'>Try Again.</h3>";
                                }
                                 
                             }
                             else{
                                echo "<h3 class='text-center'>Appointment Full.</h3>";              
                    ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = '2getTestTime';
                        }, 10000);

                    </script>
                    <?php
                             }
                        }
                    }//if condition ends here
                            else{
                                $appointmentNo = 1;
                                $appointmentTime = "10:30am";
                                
                                $afeedbackQ = "INSERT INTO testappointment(date,name,appointmentno,time,cnic) VALUES('$Date','$Name','$appointmentNo','$appointmentTime','$CNIC')";
                                $afeedbackQR = $conn->query($afeedbackQ);
                                if($afeedbackQR){
                                    $alast_id = $conn->insert_id;
                                    $aGetStockQ = "select * from testappointment where id='$alast_id'";
                            $aGetStockQR = $conn->query($aGetStockQ);
                                    if($aGetStockQR->num_rows > 0){
                                            $aGetStockRow= $aGetStockQR->fetch_assoc();
                                            $alastDate = $aGetStockRow['date'];
                                            $alastName = $aGetStockRow['name'];
                                            $alastAppointmentNo = $aGetStockRow['appointmentno'];
                                            $aappointmentToken = $alastDate."-CTP-".$alastAppointmentNo."-".$alastName;                                 
                                                                            
                                        $aupdateTokenQ = "UPDATE testappointment SET token='$aappointmentToken' WHERE id='$alast_id'";
                                    if ($conn->query($aupdateTokenQ) === TRUE)
                                    {
                                        echo "<center><h3>Thank You <br/> Your Appointment is Booked. Your Appointment Token is <br /> ".$aappointmentToken."<br/>You have to Appear in Test Center between 8am to 9am along with screen shot aur printed Token Number</h3></center>";
                                        ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = '2getTestTime';
                        }, 200000);

                    </script>
                    <?php
                                        }
                                    else {
                                            echo "Error updating record: " . $conn->error;
                                        }

                                    } 
                                }
                                
                            }
                            }
  }
                            
                            /*$Name = CleanData($_POST['name']);
                            $CNIC = CleanData($_POST['cnic']);
                            $sql = "SELECT * FROM testappointment WHERE cnic='$CNIC' AND date='$Date'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $appointmentToken = $row["token"];
                            $appointmentCNIC = $row["cnic"];
                          
                                echo "<center><h3> CNIC ".$appointmentCNIC."<br />has already Appointment for ".$Date." <br /> Your Appointment Token is <br /> ".$appointmentToken." </h3></center>";
                                ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = '2getTestTime';
                        }, 10000);

                    </script>
                    <?php
                          }
                        else {
                            $GetStockQ = "select * from testappointment where date='$Date' Order By appointmentno DESC LIMIT 1";
                            $result2 = $conn->query($GetStockQ);
                            if($result2->num_rows > 0)
                            {
                                $appointmentTime = 0;
                         while($row = $result2->fetch_assoc())
                         {
                             $lastAppointmentNo = $row['appointmentno'];
                             if($lastAppointmentNo <= 11){
                                 $lastAppointmentNo++;                                 
                                 switch ($lastAppointmentNo) {
                                          case 2:
                                            $appointmentTime="11:00am";
                                            break;
                                          case 3:
                                            $appointmentTime="11:30am";
                                            break;
                                          case 4:
                                            $appointmentTime="12:00pm";
                                            break;                                         
                                          case 5:
                                            $appointmentTime="12:30pm";
                                            break;
                                          case 6:
                                            $appointmentTime="01:00pm";
                                            break;
                                          case 7:
                                            $appointmentTime="01:30pm";
                                            break;
                                          case 8:
                                            $appointmentTime="02:00pm";
                                            break;
                                          case 9:
                                            $appointmentTime="02:30pm";
                                            break;
                                          case 10:
                                            $appointmentTime="03:00pm";
                                            break;
                                          default:
                                            $appointmentTime="03:30pm";
                                        }
                                 
                                 
                                 $insertQ = "INSERT INTO testappointment(date,appointmentno,time,name,cnic) VALUES('$Date','$lastAppointmentNo','$appointmentTime','$Name','$CNIC')";
                                 $insertQR = $conn->query($insertQ);
                                if($insertQR)
                                {
                                    $last_id = $conn->insert_id;
                                    $getDataLastInsertQ = "select * from testappointment where id='$last_id'";
                                    $getDataLastInsertQR = $conn->query($getDataLastInsertQ);                                    
                                if($getDataLastInsertQR->num_rows > 0){
                                    $getDataLastInsertRow= $getDataLastInsertQR->fetch_assoc();
                                    $lastDate = $getDataLastInsertRow['date'];
                                    $lastTime = $getDataLastInsertRow['time'];
                                    $lastName = $getDataLastInsertRow['name'];
                                    $appointmentToken = $lastDate."-CTP-".$lastAppointmentNo."-".$lastName;
                                    
                                    
                                    $updateTokenQ = "UPDATE testappointment SET token='$appointmentToken' WHERE id='$last_id'";
                                    if ($conn->query($updateTokenQ) === TRUE)
                                    {
                                        echo "<center><h3>Thank You <br/> Your Appointment is Booked. Your Appointment Token is <br /> ".$appointmentToken."</h3></center>";
                                        }
                                    else {
                                            echo "Error updating record: " . $conn->error;
                                        }                                  
                                    
                                }                                    
                                    ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = '2getTestTime';
                        }, 10000);

                    </script>
                    <?php
                                }
                                else
                                {
                                    echo mysqli_error($con);
                                    echo "<h3 class='text-center'>Try Again.</h3>";
                                }
                                 
                             }
                             else{
                                echo "<h3 class='text-center'>Appointment Full.</h3>";              
                    ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = '2getTestTime';
                        }, 10000);

                    </script>
                    <?php
                             }
                        }
                    }//if condition ends here
                            else{
                                $appointmentNo = 1;
                                $appointmentTime = "10:30am";
                                
                                $afeedbackQ = "INSERT INTO testappointment(date,name,appointmentno,time,cnic) VALUES('$Date','$Name','$appointmentNo','$appointmentTime','$CNIC')";
                                $afeedbackQR = $conn->query($afeedbackQ);
                                if($afeedbackQR){
                                    $alast_id = $conn->insert_id;
                                    $aGetStockQ = "select * from testappointment where id='$alast_id'";
                            $aGetStockQR = $conn->query($aGetStockQ);
                                    if($aGetStockQR->num_rows > 0){
                                            $aGetStockRow= $aGetStockQR->fetch_assoc();
                                            $alastDate = $aGetStockRow['date'];
                                            $alastName = $aGetStockRow['name'];
                                            $alastAppointmentNo = $aGetStockRow['appointmentno'];
                                            $aappointmentToken = $alastDate."-CTP-".$alastAppointmentNo."-".$alastName;                                 
                                                                            
                                        $aupdateTokenQ = "UPDATE testappointment SET token='$aappointmentToken' WHERE id='$alast_id'";
                                    if ($conn->query($aupdateTokenQ) === TRUE)
                                    {
                                        echo "<center><h3>Thank You <br/> Your Appointment is Booked. Your Appointment Token is <br /> ".$aappointmentToken."</h3></center>";
                                        ?>
                    <script>
                        setTimeout(function() {
                            window.location.href = '2getTestTime';
                        }, 10000);

                    </script>
                    <?php
                                        }
                                    else {
                                            echo "Error updating record: " . $conn->error;
                                        }

                                    } 
                                }
                                
                            }
                            }*/
                            
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
