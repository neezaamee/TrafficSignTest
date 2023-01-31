@extends('Layout.Base')
@section('content')
<script>
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Letters only please");

</script>
    <style>
        .feedBack {
            margin-top: 20px;
        }
    </style>
    <div class="ui stackable grid">
        <div class="feedBack contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    <?= $pageHeading; ?>
                </h1>
            </div>
            <!--/heading-->
            <div class="ui horizontal divider"></div>
            <br>
            <!--Newspane Ends Here-->
            <div class="feedBackBox ui centered aligned grid">
                @isset($Message)
                    {{ $Message }}
                @else
                <div class="feedBackForm sixteen wide mobile ten wide tablet six wide computer column centered">
                    <form action="{{ route('Feedback.store') }}" method="post" id="regFeedback">
                        @csrf
                        <div class="ui form piled segment secondary blue">
                            <div class="ui fields">
                                <div class="sixteen wide field">
                                    <label>Feedback Type: </label>
                                    <select name="type" id="fbtype">
                                        <option value="Suggestion">Suggestion</option>
                                        <option value="General">General</option>
                                    </select>
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
                                    <label>Contact No:</label>
                                    <input name="contact" id="contact" type="text" placeholder="Type Your Contact Number Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Email:</label>
                                    <input name="email" id="email" type="email" placeholder="Type Your Email Here">
                                </div>
                            </div>
                            <!--/ ui fields-->
                            
                            <div class="ui fields">
                                <div class="required sixteen wide field">
                                    <label>Massage: </label>

                                    <textarea name="feedbacktext" id="feedbacktext" cols="30" rows="10" required></textarea>
                                </div>
                            </div>
                            <!--/ ui fields-->
                            <br>
                            <center>
                                <button type="submit" name="feedback" class="ui blue wide button">Submit</button>
                            </center>

                        </div>
                        <!--/ ui form segment-->
                    </form>
                </div>
                <!--/ feedBack Form-->
                @endisset
                
            </div>
            <!--/ feedBack Box-->
        </div>
        <!--/contentBox-->
    </div>
    <!--/stackable grid-->

    <script type="text/javascript">
        $(document).ready(function() {

            $("#regFeedback").validate({
                rules: {
                    fbtype: {
                        required: true,
                        lettersonly: true
                    },
                    fbsubject: {
                        required: true,
                        lettersonly: true
                    },
                    fbname: {
                        required: true,
                        lettersonly: true
                    },
                    fbcnic: {
                        number: true,
                        minlength: 13,
                        maxlength: 13
                    },
                    fbcontact: {
                        number: true,
                        minlength: 10,
                        maxlength: 11
                    },
                    fbemail: {
                        required: true,
                        email: true
                    },
                    fbaddress: {
                        maxlength: 100
                    },
                    fborganization: {
                        lettersonly: true
                    },
                    fbto: {
                        required: true
                    },
                    fbtext: {
                        required: true,
                        maxlength: 1500
                    }

                },
                messages: {
                    fbtype: {

                    },
                    fbsubject: {

                    },
                    fbname: {

                    },
                    fbcnic: {

                    },
                    fbcontact: {
                        maxlength: "Maximum Length for Contact is 11 starting with 0.   ",
                        minlength: "Minimum Length for Contact is 10 starting with 0.   "
                    },
                    fbemail: {

                    },
                    fbaddress: {

                    },
                    fborganization: {

                    },
                    fbto: {

                    },
                    fbtext: {

                    }


                }
            });
        });

    </script>
    
@endsection
