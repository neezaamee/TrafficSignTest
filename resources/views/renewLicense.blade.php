@extends('Layout.Base')
@section('content')
    
<style>
    .renewLicense {
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
    <div class="renewLicense contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="renewLicenseBox">
            <div class="ui two column stackable relaxed grid">
                <div class="column">
                    <h3>THE FOLLOWING DOCUMENTS ARE REQUIRED FOR RENEWAL OF LICENSE:</h3>
                    <ul>
                        <li>The applicant will provide original driving license to relevant officer in the driving license branch.</li>
                        <li>He will provide naqal report if he will lost his original driving license.</li>
                        <li>A copy of C.N.I.C</li>
                        <li>A snap will be taken at computer</li>

                        <li>Renew form &quot;E&quot; will be submitted filled by the applicant to the relevant officer.</li>
                        <li>A Medical Certificate on Form "B".</li>
                        <li>A Medical Fitness Certificate will also be provided by the applicant with application form who will be more than 50 years of age.</li>
                        <li><span class="note"><b>Ticket(s) according to schedule related to license category.
                                    License is renewed for five years.</b></span></li>
                        <li>
                            <span class="note"><b>All Punjab renewal applications will be entertained in Faisalabad .</b></span>
                        </li>

                    </ul>

                    <ul>
                        <b>LATE FEE FOR RENEWAL:</b>
                        <li>With in 30 days of Expiry: Nill</li>
                        <li>After 30 Days and with in 90 days: 10% of License Fee</li>
                        <li>After 90 Days and with in 1 Year: 20% of License Fee</li>
                        <li>After 1 Year: 50% of License Fee (For each year).</li>
                        <li>
                            <span class="note"><b>To check Tickets Fee <a href="ticketCalculator">click here</a>.</b></span>
                        </li>

                    </ul>

                </div>
                <div class="column">
                    <h3>FEE SCHEDULE FOR RENEWAL LICENSE:</h3>
                    <table style="border: 1px solid">
                        <tr>
                            <th>Vehicle</th>
                            <th>Tickets Rs.</th>
                        </tr>

                        <tr>
                            <td>Motor Cycle</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Motor Car</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <td>Motor Cycle / Motor Car</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <td>Rickshaw</td>
                            <td>500</td>
                        </tr>

                        <tr>
                            <td>Tractor Commercial</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Tractor Agriculture</td>
                            <td>250</td>
                        </tr>
                        <tr>
                            <td>LTV</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <td>HTV</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>Invalid Carriage</td>
                            <td>100</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <!--/renewLicenseBox-->
    </div>
    <!--/renewLicense ContentBox-->
</div>
<!--/ stackable grid-->
@endsection
