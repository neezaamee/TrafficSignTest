@extends('Layout.Base')
@section('content')
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
                    {{ $pageHeading }}
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>
            <br>
            <div class="complaintBox">
                @if(session()->has('message'))
                <center>
                    <h2>
                        Your Complaint Has Been Registered
                        <br>      
                        Your Tracking Number is
                        {{ session('message') }}
                        <br>
                    </h2>
                </center>
                    @else
                    <div class="ui two column stackable grid">
                        <div class="four wide column">
                            <p style="text-align: justify; text-justify: inter-word;">City Traffic Police Faisalabad is providing excellent services which is corruption free, and well mannered for public. But, if you find or feel any deficiency in our service you can send your views. We greatly appreciate your opinion, please leave us a comment. If there is any particular information that you would like to be added to the site, please do let us know. Sincerely. Chief Traffic Officer Faisalabad.</p>
                            <h3>Address: </h3>
                            <p>Complaint Cell Branch, Office of the Chief Traffic Officer <br>near PS Civil Lines in front of Kachehri Faisalabad.</p>
                            <h3>Phone No.</h3>
                            <p>041-9200518</p>
                            <h3>E-mail:</h3>
                            <p>fsd.ctp@gmail.com</p>
                            
                        </div>
                        <!-- Complaint Box Form-->
                        <div class="ten wide column">
                            <div class="ui form piled segment secondary red">
                                <form action="{{ url('/ComplaintBox') }}" method="post" id="regComp">
                                    @csrf
                                    <input type="hidden" id="g-token" name="g-toekn" />
                                    <div class="ui fields">
                                        <div class="required sixteen wide field">
                                            <label>Complaint Type: </label>
                                            <select name="type" id="comptype">
                                                <option value="misconduct">Misconduct</option>
                                                <option value="corruptions">Corruption</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/ ui fields-->
                                    <div class="ui fields">
                                        <div class="required sixteen wide field">
                                            <label>Subject:</label>
                                            <input type="text" name="subject" id="compsubject" placeholder="Complaint Subject">
                                        </div>
                                    </div>
                                    <!--/ ui fields-->
                                    <div class="ui fields">
                                        <div class="required sixteen wide field">
                                            <label>Name:</label>
                                            <input name="name" id="name" type="text" placeholder="Type Your Name Here">
                                        </div>
                                    </div>
                                    <!--/ ui fields-->
                                    <div class="ui fields">
                                        <div class="sixteen wide field">
                                            <label>CNIC No:</label>
                                            <input name="cnic" id="cnic" type="text" placeholder="Type Your CNIC Here">
                                        </div>
                                    </div>
                                    <!--/ ui fields-->
                                    <div class="ui fields">
                                        <div class="sixteen wide field">
                                            <label>Contact No:</label>
                                            <input name="contact" id="compcontact" type="text" placeholder="Type Your Contact Number Here">
                                        </div>
                                    </div>
                                    <!--/ ui fields-->
                                    <div class="ui fields">
                                        <div class="required sixteen wide field">
                                            <label>Email:</label>
                                            <input name="email" id="compemail" type="email" placeholder="Type Your Email Here">
                                        </div>
                                    </div>
                                    <!--/ ui fields-->
                                    <div class="ui fields">
                                        <div class="sixteen wide field">
                                            <label>Address:</label>
                                            <input name="address" id="compaddress" type="text" placeholder="Type Your Address Here">
                                        </div>
                                    </div>
                                    <!--/ ui fields-->
                                    <div class="ui fields">
                                        <div class="sixteen wide field">
                                            <label>Organization:</label>
                                            <input name="organization" id="comporganization" type="text" placeholder="Type Organization Name Here">
                                        </div>
                                    </div>
                                    <div class="ui fields">
                                        <div class="required sixteen wide field">
                                            <label>To: </label>
                                            <select name="complainto" id="compto">
                                                <option value="CTO">CTO</option>
                                                <option value="DSP/HQ">DSP/Hqr</option>
                                                <option value="I Don't Know">I Don't Know</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/ ui fields-->
                                    <div class="ui fields">
                                        <div class="required sixteen wide field">
                                            <label>Complaint: </label>
                                            <textarea name="complaintext" id="compcomplaint" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <!--/ ui fields-->
                                    <br>
                                    <center>
                                        
                                        <button type="submit" name="regComplaint" class="ui red wide button">Register Complaint</button>
                                    </center>
                                    
                                    <!--/ ui form segment-->
                                </form>
                            </div>
                        </div>
                        <!--/ Complaint Box Form-->
                    </div>
                    @endif
                
            </div>
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
@endsection