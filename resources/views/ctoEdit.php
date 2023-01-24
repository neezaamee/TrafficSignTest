<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<script>
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Letters only please");

</script>

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
                    <?= $pageHeading ?>
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>
            <br>

            <div class="complaintForm sixteen wide mobile ten wide tablet six wide computer column centered">
                <form action="<?= base_url(); ?>/AdminPanel/ctoEdit/<?= $id?>" method="post" id="regComp">
                    <div class="ui form piled segment secondary red">
                        <div class="ui fields">
                            <div class="four wide field">
                                <label>ID: </label>
                                <p><?= $id; ?></p>
                            </div>
                        </div>
                        <div class="ui fields">
                            <div class="required sixteen wide field">
                                <label>CTO Name:</label>
                                <input type="text" name="ctoname" id="ctoname" value="<?= $name; ?>">
                            </div>
                        </div>

                        <div class="ui fields">
                            <div class="required sixteen wide field">
                                <label>Date Appointment:</label>
                                <input type="date" name="dateappointment" id="dateappointment" value="<?= $dateappointment; ?>">

                            </div>
                        </div>
                        <div class="ui fields">
                            <div class="required sixteen wide field">
                                <label>Date Transfer:</label>
                                <input type="date" name="datetransfer" id="datetransfer" value="<?= $datetransfer; ?>">
                            </div>
                        </div>
                        <div class="ui fields">
                            <div class="required sixteen wide field">
                                <label>Image Name:</label>
                                <input type="text" name="imgurl" id="imgurl" value="<?= $imgurl; ?>">
                            </div>
                        </div>




                        <br>
                        <center>
                            <button type="submit" name="submit" class="ui red wide button">Update</button>
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
