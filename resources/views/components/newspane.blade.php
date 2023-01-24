<!--Newspane Starts Here-->
<div class="top-story" id="traffic-news">
    <div class="row">
        <div class="ui stackable two column grid">
            <div class="ui four wide column">
                <h4 class="ui horizontal divider header">
                    <span style="color: #133886;">
                        <h2>Traffic News</h2>
                    </span>
                    <?php
    $cdate = new DateTime('now', new DateTimeZone('Asia/karachi'));
    echo "<span style='color:#133886;'>".$cdate->format('F j, Y, g:i a')."</span>";
?>
                </h4>
            </div>
            <div class="ui twelve wide column" style="background: #133886;">
                <?php
	 
                    /*$GetStockQ = "SELECT * FROM trafficnews ORDER BY id DESC LIMIT 1";
					 	 
                     $GetStockQR = mysqli_query($con,$GetStockQ);

                     $GetStockNR = mysqli_num_rows($GetStockQR);

                     if($GetStockNR>0)
                     {
                         $GetStockRow = mysqli_fetch_assoc($GetStockQR);                          
                             
                             $trafficNews = $GetStockRow['text'];
                        
                            
                     }*/
                                 ?>
                <marquee behavior="scroll" direction="left" style="padding-bottom:15px; color:#fff; font-size:25px;">
                    Hello World
                </marquee>
            </div>
        </div>
    </div>
</div>
<br>
<!--Newspane Ends Here-->
