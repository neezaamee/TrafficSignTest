<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<script>
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Letters only please");

</script>
<!--<script src="https://www.google.com/recaptcha/api.js?render=6LfRxeoUAAAAAEmIaFxR3Ic0Pw_YBPcT6d8XDZVJ"></script>-->
<?php
/*if(isset($_POST) && isset($_POST['regComplaint']))
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
        .complaint {
            margin-top: 20px;
        }

        .complaintBox h3 {
            color: green;
        }

        ol {
            list-style: none;
            counter-reset: my-awesome-counter;
        }

        ol>li {
            counter-increment: my-awesome-counter;
        }

        ol>li::before {
            content: counter(my-awesome-counter) ". ";
            color: red;
            font-weight: bold;
        }

        .complaintBox p {
            font-weight: bold;
        }

    </style>
    <div class="ui stackable grid">
        <div class="complaint contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    <?= $pageHeading;  ?><br><a href="<?= base_url(); ?>/AdminPanel">go back</a>
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>
            <br>
            <!--Newspane Ends Here-->
            <div class="complaintForm sixteen wide mobile ten wide tablet six wide computer column centered">
                <form action="<?= base_url() ?>/AdminPanel/trafficNews" method="post" id="regComp" style="margin-top: 20px">
                    <div class="ui form piled segment secondary red">
                        <div class="ui fields">
                            <div class="required sixteen wide field">
                                <label>Traffic News Text: </label>
                                <textarea name="newstext" id="newstext" autofocus></textarea>
                            </div>
                        </div>
                        <!--/ ui fields-->
                        <br>
                        <center>
                            <button type="submit" name="submit" class="ui red wide button">Submit</button>
                        </center>
                    </div>
                    <!--/ ui form segment-->
                </form>
            </div>
            <!--/ Traffic News Box Form-->
        </div>
        <!--/contentBox-->
    </div>
    <!--/stackable grid-->

    <?= $this->endSection(); ?>
