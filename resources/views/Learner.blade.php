@extends('Layout.Base')
@section('content')
    

<style>
    /* .Learner {
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
    } */

</style>
<div class="ui stackable grid">
    <div class="Learner contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="LearnerBox">
            <h3>REQUIRED DOCUMENTS FOR LEARNER PERMIT:</h3>
            <ol>
                <li>A copy of C.N.I.C.</li>
                <li>A ticket of Rs.60 per category from General Post Office.</li>
                <li>Medical Fitness Certificate (for the candidates of 50 years or more).</li><br>
                <span class="note"><b><u>Note:</u> Learner permits are issued on daily basis and is valid for 6 months only.</b><br></span>
            </ol>
            <h3>INFORMATION FOR LEARNER PERMIT:</h3>
            <ul>
                <li>Motor Cycle/ Motor Car, Tractor Agriculture = 18 Years.</li>

                <li>LTV, Rikshaw, Tractor Commercial = 21 Years <span style="color:green; text-decoration: underline">( 2 Years Old Motor Car License for LTV only).</span></li>
                <li>HTV = 22 Years + atleast 3 years old license of Motor Car/LTV or Tractor Commercial.</li>
            </ul>
            <h3>ISSUANCE OF LEARNER PERMIT FOR INVALID CARRIAGE:</h3>
            <ul>
                <span class="note"><b><u><a href="{{ url('/InvalidCarriage') }}">Click Here</a></u> For Details of Invalid Carriage License.</b></span>
            </ul>

            <h3 id="issuancecenters">ISSUANCE CENTERS FOR LEARNER PERMIT:</h3>
            <ol>
                <li>Office of the Chief Traffic Officer Faisalabad Near P.S. Civil Lines Faisalabad.</li> &nbsp;&nbsp;&nbsp;&nbsp; Phone #: 041-9200514

                <li>Police Station Peoples Colony near Abdullah Pur Jaranwala Road Faisalabad</li>
                <li>E-Khidmat Markz Opp. Mian Trust Hospital Faisalabad.</li>
                <li>Police Khidmat Markaz Opp. Agriculture University Faisalabad.</li>
                <li>Learner Branch, Opposite DPS School, Ghulam MUHAMMAD Abaad.</li>
                <!--li>Chamber of Commerce FCCI, E Canal Road, Zia Colony, Faisalabad.</li-->
                <li>Traffic Sector Office, Lahore Morr, Jaranwala.</li>
                <li>Police Khidmat Markaz, Jaranwala.</li>
                <li>Main Samundri Road, Opp. Dijkot CNG Station, Dijkot.</li>
                <li>15 Office, Gojra Road, Samundri.</li>
                <li>Opposite Police Station City, Jhumra.</li>
                <br>

                <span class="note"><b><u><a href="{{ url('Signal/PDF/Highway_CodeBook.pdf') }}">Click Here</a> </u>to Download Highway Code Book of traffic rules &amp; regulation.</b></span>

            </ol>
        </div>
        <!--/LearnerBox-->
    </div>
    <!--/Learner ContentBox-->
</div>
<!--/stackable grid-->
@endsection