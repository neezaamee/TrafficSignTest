@extends('Layout.Base')
@section('content')
<style>
    .Endorsment {
        margin-top: 20px;
    }

    table,
    th,
    tr,
    td {
        border: 1px solid black;
        padding: 5px 30px 5px 30px;
    }

    tbody {
        background: aliceblue;
    }

</style>
<div class="ui stackable grid">
    <div class="Endorsment contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                 {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="EndorsmentBox">
            <div class="ui one column stackable relaxed grid">
                <div class="column">
                    <h3>FOLLOWING DOCUMENTS ARE REQUIRED FOR ENDORSEMENT OF LICENSE:</h3>
                    <ul>
                        <li>Endorsement Form</li>
                        <li>Medical Certificate</li>
                        <li>Medical Fitness Certificate (for the candidates of 50 years or more).</li>
                        <li>A Copy of C.N.I.C.</li>
                        <li>Two (02) Attested Fresh Photographs.</li>
                        <li>Original Learner Permit of atleast 42 days but not more than six month.</li>
                        <li>Ticket(s) of 450rs.</li>
                        <li>Previous license will be attached.</li>
                        <span class="note"><b>For Further Detail Please Contact City Traffic Police Faisalabad Inquiry Office. <br>(Ph#: 041-2023816).</b></span>
                    </ul>
                </div>
                <!--div class="column">
                        <h3>FRESH DRIVING LICENSE FEE SCHEDULE:</h3>
                        <table style="border: 1px solid">
                            <tr>
                                <th>Vehicle</th>
                                <th>Tickets Rs.</th>
                            </tr>

                            <tr>
                                <td>Motor Cycle</td>
                                <td>550</td>
                            </tr>
                            <tr>
                                <td>Motor Cycle Rickshaw</td>
                                <td>600</td>
                            </tr>
                            <tr>
                                <td>Motor Cycle + Motor Cycle Rickshaw</td>
                                <td>650</td>
                            </tr>
                            <tr>
                                <td>Motor Car</td>
                                <td>900</td>
                            </tr>
                            <tr>
                                <td>Motor Cycle + Motor Car:</td>
                                <td>950</td>
                            </tr>
                            <tr>
                                <td>Motor Cycle + Ltv:</td>
                                <td>950</td>
                            </tr>
                            <tr>
                                <td>Tractor Commercial</td>
                                <td>600</td>
                            </tr>
                            <tr>
                                <td>Tractor Agriculture</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>LTV</td>
                                <td>900</td>
                            </tr>
                            <tr>
                                <td>LTV + PSV</td>
                                <td>950</td>
                            </tr>
                            <tr>
                                <td>HTV</td>
                                <td>1200</td>
                            </tr>
                            <tr>
                                <td>HTV + PSV</td>
                                <td>1200</td>
                            </tr>

                        </table>
                    </div-->
            </div>
        </div>
        <!--/EndorsmentBox-->
    </div>
    <!--/Endorsment ContentBox-->
</div>
<!--/stackable grid-->
@endsection