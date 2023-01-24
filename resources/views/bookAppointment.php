<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
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
                    <?= $pageHeading; ?>
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>
            <br>
            <?php // if ($trackingID == null): ?>

            <div class="complaintBox">
                <div class="ui centered stackable grid">                    
                    <!-- Appointment Form-->
                    <div class="six wide column">
                        <div class="ui form piled segment secondary red">
                            <form action="<?= base_url(); ?>/AdminPanel/appointmentRegister" method="post" id="regAppointment">
                                <input type="hidden" id="g-token" name="g-toekn" />
                                
                                <div class="ui fields">
                                    <div class="required sixteen wide field">
                                        <label>Appointment Type: </label>
                                        <select name="type" id="type">
                                            <option value="Test">Driving Test</option>
                                            <option value="Learner">Learner</option>
                                            <option value="Renewal">Renewal</option>
                                            <option value="Duplicate">Duplicate</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/ ui fields-->
                                
                                <div class="ui fields">
                                    <div class="required sixteen wide field">
                                        <label>Center: </label>
                                        <select name="compto" id="compto">
                                            <option value="1">People Colony</option>
                                            <option value="2">GM Abad</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/ ui fields-->
                                
                                <div class="ui fields">
                                    <div class="required sixteen wide field">
                                        <label>Appointment Date: </label>
                                        <input type="date" name="appointmentdate" id="appointmentdate">
                                    </div>
                                </div>
                                <!--/ ui fields-->
                                                            
                                <center>
                                    <button type="submit" name="regComplaint" class="ui blue wide button">Search Appointment</button>
                                </center>
                                   
                                <div class="ui fields">
                                    <div class="required sixteen wide field">
                                        <label>Hour Time Slot: </label>
                                        <select name="compto" id="hourslot">
                                            <option value="1">09:00 to 10:00</option>
                                            <option value="1">10:00 to 11:00</option>
                                            <option value="1">11:00 to 12:00</option>
                                            <option value="1">12:00 to 13:00</option>
                                            <option value="1">13:00 to 14:00</option>
                                            <option value="1">14:00 to 15:00</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/ ui fields-->
                                
                                <div class="ui fields">
                                    <div class="required sixteen wide field">
                                        <label>Minutes Time Slot: </label>
                                        <select name="compto" id="mintslot">
                                            <option value="1">09:00</option>
                                            <option value="1">09:05</option>
                                            <option value="1">09:10</option>
                                            <option value="1">09:15</option>
                                            <option value="1">09:20</option>
                                            <option value="1">09:25</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/ ui fields-->
                                                                
                                <div class="ui fields">
                                    <div class="required sixteen wide field">
                                        <label>Name:</label>
                                        <input name="compname" id="compname" type="text" placeholder="Type Your Name Here">
                                    </div>
                                </div>
                                <!--/ ui fields-->
                                <div class="ui fields">
                                    <div class="required sixteen wide field">
                                        <label>CNIC No:</label>
                                        <input name="compcnic" id="compcnic" type="text" placeholder="Type Your CNIC Here">
                                    </div>
                                </div>
                                <!--/ ui fields-->
                                <div class="ui fields">
                                    <div class="required sixteen wide field">
                                        <label>Contact No:</label>
                                        <input name="compcontact" id="compcontact" type="text" placeholder="Type Your Contact Number Here">
                                    </div>
                                </div>
                                <!--/ ui fields-->
                                <div class="ui fields">
                                    <div class="required sixteen wide field">
                                        <label>Email:</label>
                                        <input name="compemail" id="compemail" type="email" placeholder="Type Your Email Here">
                                    </div>
                                </div>
                                <!--/ ui fields-->
                               
                                <br>
                                <center>
                                    <button type="submit" name="regComplaint" class="ui red wide button">Get Appointment</button>
                                </center>

                                <!--/ ui form segment-->
                            </form>
                        </div>
                    </div>
                    <!--/ Complaint Box Form-->
                </div>
            </div>

            <?php // else: ?>

            <? //= //$trackingID; ?>

            <?php //endif ?>
            <!--/ Complaint Box-->

            <!--Newspane Ends Here-->
        </div>
        <!--/contentBox-->
    </div>
<!--/stackable grid-->    
<script type="text/javascript">
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Letters only please");

</script>
<script type="text/javascript">
        $(document).ready(function() {

            $("#regComp").validate({
                rules: {
                    comptype: {
                        required: true,
                        lettersonly: true
                    },
                    compsubject: {
                        required: true,
                        lettersonly: true
                    },
                    compname: {
                        required: true,
                        lettersonly: true
                    },
                    compcnic: {
                        number: true,
                        minlength: 13,
                        maxlength: 13
                    },
                    compcontact: {
                        number: true,
                        minlength: 10,
                        maxlength: 11
                    },
                    compemail: {
                        required: true,
                        email: true
                    },
                    compaddress: {
                        maxlength: 100
                    },
                    comporganization: {
                        lettersonly: true
                    },
                    compto: {
                        required: true
                    },
                    comptext: {
                        required: true,
                        maxlength: 1500
                    }

                },
                messages: {
                    comptype: {

                    },
                    compsubject: {

                    },
                    compname: {

                    },
                    compcnic: {

                    },
                    compcontact: {
                        maxlength: "Maximum Length for Contact is 11",
                        minlength: "Minimum Length for Contact is 10"
                    },
                    compemail: {

                    },
                    compaddress: {

                    },
                    comporganization: {

                    },
                    compto: {

                    },
                    comptext: {

                    }


                }
            });
        });

    </script>

<?= $this->endSection(); ?>
