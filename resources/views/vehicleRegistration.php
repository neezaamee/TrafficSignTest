<?php
//adding external connection file
require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include('Head.php'); ?>

<body>
    <style>
        .vehicleRegistration {
            margin-top: 20px;
        }

    </style>
    <?php include('Top.php');?>
    <div class="ui stackable grid">
        <div class="vehicleRegistration contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    Verify Vehicle Registration
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>

            <div class="vehicleRegistrationBox">
                <iframe src="http://www.mtmis.excise-punjab.gov.pk/" width="100%" height="500" style="overflow:hidden;" style="border: none">
                    <p>Your browser does not support iframes.</p>
                </iframe>

            </div>
            <!--/Downloads-->
        </div>
        <!--/Downloads ContentBox-->
    </div>
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
