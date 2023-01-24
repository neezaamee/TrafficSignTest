@extends('Layout.Base')
@section('content')
    

<style>
    .intLicense {
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
    <div class="intLicense contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="intLicenseBox">

            <h3>FOLLOWING DOCUMENTS ARE REQUIRED FOR INTERNATIONAL DRIVING PERMIT:</h3>
            <ol>
                <li>Attested copy of C.N.I.C.</li>
                <li>Attested copy of valid Driving License issued from Faisalabad.</li>
                <li>Attested copy of national passport valid for atleast 6 months with visa.</li>
                <li>Attested two (02) photo graphs, one from front and one from backside.</li>
                <li>Rs.66 court fee ticket.</li>
                <li>Rs.180 fee ticket.</li>
                <span class="note"><b><u>Note:</u>Applicant will bring his original C.N.I.C, driving license and passport alonghwith him.</b></span>
            </ol>
        </div>
        <!--/Downloads-->
    </div>
    <!--/Downloads ContentBox-->
</div>
@endsection