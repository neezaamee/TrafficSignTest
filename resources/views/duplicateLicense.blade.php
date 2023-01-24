@extends('Layout.Base')
@section('content')
    

<style>
    .duplicateLicense {
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
    <div class="duplicateLicense contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="duplicateLicenseBox">
            <h3>THE FOLLOWING DOCUMENTS ARE REQUIRED FOR DUPLICATE LICENSE:</h3>
            <ul>
                <li>
                    The applicant will provide naqal report if original Driving License has been lost.</li>
                <li>
                    A copy of C.N.I.C.</li>
                <li>
                    A snap will be taken at computer.</li>
                <li>
                    2 Passport Size Pictures.
                </li>
                <li>
                    A form will be issued to the applicant which will be return to the same office after medical report.</li>
                <li>
                    A Medical Certificate on Form "B".</li>
                <li>A Medical Fitness Certificate will also be provided by the applicant with application form who will be more than 50 years of age.</li>
                <li>
                    <span class="note"><b>All Punjab renewal applications will be entertained in Faisalabad .</b></span>
                </li>
                <br />
                <h4>FEE SCHEDULE FOR DUPLICATE LICENSE:</h4>
                <li>Ticket of Rs. 200 for HTV, HTV PSV </li>
                <li>Ticket of Rs. 100 for Motor Cycle, Tractor Commercial, Rickshaw </li>
                <li>Ticket of Rs. 150 for All other Categories </li>

            </ul>
        </div>
        <!--/Downloads-->
    </div>
    <!--/Downloads ContentBox-->
</div>

@endsection