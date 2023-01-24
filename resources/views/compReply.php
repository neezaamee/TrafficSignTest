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
                <form action="<?= base_url(); ?>/AdminPanel/complaintReply/<?= $id?>" method="post" id="regComp">
                    <div class="ui form piled segment secondary red">
                        <div class="ui fields">
                            <div class="four wide field">
                                <label>ID: </label>
                                <p><?= $id; ?></p>
                            </div>
                            <div class="four wide field">
                                <label>Complaint Tracking ID: </label>
                                <p><?= $trackingid?></p>
                            </div>
                            <div class="four wide field">
                                <label>Complaint Type: </label>
                                <p type="text" name="comptype" id="comptype"><?= $comptype; ?>
                            </div>
                            <div class="four wide field">
                                <label>To: </label>
                                <p type="text" name="compto" id="compto"><?= $compto;?></p>

                            </div>
                        </div>
                        <div class="ui fields">
                            <div class="four wide field">
                                <label>CNIC No:</label>
                                <p name="compcnic" id="compcnic" type="text" placeholder="Type Your CNIC Here"><?= $cnic;?></p>
                            </div>
                            <div class="four wide field">
                                <label>Contact No:</label>
                                <p name="compcontact" id="compcontact" type="text" placeholder="Type Your Contact Number Here"><?= $contact;?></p>
                            </div>
                            <div class="four wide field">
                                <label>Email:</label>
                                <p name="compemail" id="compemail" type="email" placeholder="Type Your Email Here"><?= $email;?></p>
                            </div>
                        </div>
                        <!--/ ui fields-->
                        <div class="ui fields">
                            <div class="ten wide field">
                                <label>Name:</label>
                                <p name="compname" id="compname" type="text"><?= $name;?>
                            </div>
                        </div>
                        <!--/ ui fields-->

                        <div class="ui fields">
                            <div class="sixteen wide field">
                                <label>Subject:</label>
                                <p type="text" name="compsubject" id="compsubject"><?= $compsubject; ?>
                            </div>
                        </div>
                        <!--/ ui fields-->

                        <div class="ui fields">
                            <div class="sixteen wide field">
                                <label>Complaint Text: </label>
                                <p name="comptext" id="compcomplaint" cols="30" rows="10"><?= $comptext;?></p>
                            </div>
                        </div>
                        <!--/ ui fields-->
                        <div class="ui fields">
                            <div class="required sixteen wide field">
                                <label>Reply Massage: </label>
                                <textarea name="compreply" id="compreply" cols="30" rows="10" autofocus></textarea>
                            </div>
                        </div>
                        <!--/ ui fields-->
                        <br>
                        <center>
                            <button type="submit" name="submit" class="ui red wide button">Reply</button>
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
