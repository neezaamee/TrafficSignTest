@extends('Layout.Base')
@section('content')
<style>
    .Learner {
        margin-top: 20px;
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
</style>
<div class="ui stackable grid">
    <div class="Learner contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                Invalid Carriage <br> <span style="font-size: 18px">License For Differently Abled Persons</span>
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="LearnerBox">
            <h3>ISSUANCE OF LEARNER PERMIT FOR INVALID CARRIAGE:</h3>
            <ul>
                <li>An application will be submitted to Licensing Authority</li>
                <li>A letter along with Candidat's Application will be written to DHQ by Licensing Authority.</li>
                <li>Medical Board DHQ will examin physical condition of candidate wheather he/she can drive or not.</li>
                <li>On recommendation of Medical Board DHQ Learner Permit for Invalid Carriage will be issued to candidate by Learner Permit Issuance Center.</li>
            </ul>
            <h3>REQUIRED DOCUMENTS FOR FRESH INVALID CARRIAGE LICENSE:</h3>
            <ol>
                <li>Application form (A) <span style="color: green; text-decoration: underline"></span></li>
                <li>Original learner permit of atleast 42 days but not more than 6 month.</li>
                <li>Medical Certificate</li>
                <!--li>Three (03) passport size fresh photo graphs.</li-->
                <li> A copy of CNIC.</li>
                <li>Paste ticket(s) of mentioned fee (120rs) on license document according to schedule.</li>
                <h5 class="note">License documents are submitted at following address for traffic signs &amp; road tests. <br>Police Station Peoples Colony near Abdullah Pur Jaranwala Road Faisalabad.</h5>
            </ol>
            <h3>ISSUANCE CENTERS FOR LEARNER PERMIT:</h3>
            <span class="note"><b><u><a href="{{ url('/LearnerPermit#InvalidCarriage') }}">Click Here</a> For Details of Issuance Center.</u></b></span>
            <h3>
                RENEWAL OF INVALID CARRIAGE LICENSE
            </h3>
            <span class="note"><b><u>Renewal Process for Invalid Carriage License is same as Renewal  of Other Categories <br /><a href="{{ url('Signal/PDF/Highway_Code_Book.pdf') }}">Click Here</a> For Details of Renwal Process of Driving License.</u></b></span>
        </div>
        <!--/LearnerBox-->
    </div>
    <!--/Learner ContentBox-->
</div>
<!--/stackable grid-->
@endsection