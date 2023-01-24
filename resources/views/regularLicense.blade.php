@extends('Layout.Base')
@section('content')
    
<style>
    .regularLicense {
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

    /* ol {
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
    <div class="regularLicense contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                 {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="regularLicenseBox">
            <div class="ui two column stackable relaxed grid">
                <div class="column">
                    <h3>DRIVING TEST DAYS:</h3>
                    <ul>
                        <li>LTV, LTV/PSV, Tractor Commercial, Motor Cycle Rickshaw: Tuesday, Thursday</li>
                        <li>Non Commercial License: Monday, Wednesday, Friday and Saturday</li>
                        <li>HTV, HTV/PSV:  Last Saturday of Every Month</li>
                    </ul>
                    <h3>REQUIRED DOCUMENTS FOR FRESH DRIVING LICENSE:</h3>
                    <ol>
                        <li>Application form (A) <span style="color: green; text-decoration: underline"></span></li>
                        <li>Original learner permit of atleast 42 days but not more than 6 month.</li>
                        <li>Medical Certificate</li>
                        <li>Medical Fitness Certificate (for the candidates of Age 50 years or more).</li>
                        <!--li>Three (03) passport size fresh photo graphs.</li-->
                        <li> A copy of CNIC.</li>
                        <li>Paste ticket(s) of mentioned fee on license document according to schedule.</li>
                        <h5 class="note">License documents are submitted at following address for traffic signs &amp; road tests. <br>Police Station Peoples Colony near Abdullah Pur Jaranwala Road Faisalabad.</h5>
                    </ol>
                </div>
                <div class="column">
                    <h3>FRESH DRIVING LICENSE FEE SCHEDULE:</h3>
                    <table style="border: 1px solid">
                        <tr>
                            <th>Vehicle</th>
                            <th>Tickets Rs.</th>
                        </tr>

                        <tr>
                            <td>Motor Cycle</td>
                            <td class="ui center aligned">550</td>
                        </tr>
                        <tr>
                            <td>Motor Cycle Rickshaw</td>
                            <td class="ui center aligned">600</td>
                        </tr>
                        <tr>
                            <td>Motor Cycle + Motor Cycle Rickshaw</td>
                            <td class="ui center aligned">650</td>
                        </tr>
                        <tr>
                            <td>Motor Car</td>
                            <td class="ui center aligned">900</td>
                        </tr>
                        <tr>
                            <td>Motor Cycle + Motor Car:</td>
                            <td class="ui center aligned">950</td>
                        </tr>
                        <tr>
                            <td>Motor Cycle + Ltv:</td>
                            <td class="ui center aligned">950</td>
                        </tr>
                        <tr>
                            <td>Tractor Commercial</td>
                            <td class="ui center aligned">600</td>
                        </tr>
                        <tr>
                            <td>Tractor Agriculture</td>
                            <td class="ui center aligned">300</td>
                        </tr>
                        <tr>
                            <td>LTV</td>
                            <td class="ui center aligned">900</td>
                        </tr>
                        <tr>
                            <td>LTV + PSV</td>
                            <td class="ui center aligned">950</td>
                        </tr>
                        <tr>
                            <td>HTV</td>
                            <td class="ui center aligned">1200</td>
                        </tr>
                        <tr>
                            <td>HTV + PSV</td>
                            <td class="ui center aligned">1200</td>
                        </tr>
                        <tr>
                            <td>Invalid Carriage</td>
                            <td class="ui center aligned">120</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <!--/regularLicenseBox-->
    </div>
    <!--/regularLicense ContentBox-->
</div>
@endsection