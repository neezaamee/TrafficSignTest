@extends('Layout.Base')
@section('content')
<style>
    #ticketTable,#ticketTable tr,#ticketTable th,#ticketTable td {
        border: 1px solid black;
        padding: 5px 15px 5px 15px;
        font-size: 1em;
        font-weight: 700;
    }

    #ticketTable th {
        font-size: 1.5em;
        padding: 5px 15px 5px 15px;
    }

    #ticketTable tbody {
        background: aliceblue;
    }

    #totalTickets {
        background: #1599fd;
        color: ghostwhite;
        font-size: large;

    }

    #totalCharges {
        background: #009688;
        color: ghostwhite;
        font-size: large;
        display: none;
    }

    #note {
        display: none;
    }

</style>
<div class="ui stackable grid">
    <div class="ticketCalc contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                <?= $pageHeading ?>
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="ticketCalcBox ui centered aligned grid">
            <div class="ticketCalcForm sixteen wide mobile ten wide tablet six wide computer column centered">
                <form action="ticketCalculator" method="post">
                    <div class="ui form piled segment secondary blue">

                        <div class="ui fields">
                            <div class="required sixteen wide field">
                                <label>Expiry Date:</label>
                                <input name="expdate" id="expdate" type="date" placeholder="License Expiry Date" autofocus>
                            </div>
                        </div>
                        <!--/ ui fields-->


                        <div class="ui fields">
                            <div class="required sixteen wide field">
                                <label>Select License Category: </label>
                                <select name="licensetype" id="licensetype" onfocus="foo(this)" onchange="foo(this)">
                                    <option value="M/Cycle">M/Cycle</option>
                                    <option value="Car">Car</option>
                                    <option value="M/Cycle+Car">M/Cycle+Car</option>
                                    <option value="Tractor Agriculture">Tractor Agriculture</option>
                                    <option value="M/Cycle+Car+Tractor Agriculture">M/Cycle+Car+Tractor Agriculture</option>
                                    <option value="Tractor Commercial">Tractor Commercial</option>
                                    <option value="LTV">LTV</option>
                                    <option value="M/Cycle+LTV">M/Cycle+LTV</option>
                                    <option value="M/Cycle+LTV+Tractor Commercial">M/Cycle+LTV+Tractor Commercial</option>
                                    <option value="HTV">HTV</option>
                                    <option value="HTV(Psv)">HTV(Psv)</option>
                                    <option value="LTV(Psv)">LTV(Psv)</option>
                                    <option value="Rikshaw">Rikshaw</option>
                                    <option value="M/Cycle+Rikshaw">M/Cycle+Rikshaw</option>
                                    <option value="Invalid Carriage">Invalid Carriage</option>
                                </select>
                            </div>
                        </div>
                        <!--/ ui fields-->

                        <!--div class="ui fields">
                            <div class="sixteen wide field">
                                <div class="ui checkbox">
                                    <input type="checkbox" name="dup-check" id="dup-check" onchange="duplicateUpdate(this.value)">
                                    <label>Duplicate License ??</label>
                                </div>
                            </div>
                        </div-->
                        <!--/ ui fields-->
                        <script>
                            /*function duplicateUpdate(value) {
                                //var value = $('#dup-check').value();
                                if (value = false) {
                                    //$("#dup-row").hide();
                                    document.getElementById("dup-check").checked = true;
                                    //alert(value);
                                } else {
                                    //$("#dup-row").show();
                                    document.getElementById("dup-check").checked = false;
                                    //alert(value);
                                }
                                //alert(duprow);

                            }*/

                        </script>



                        <br />
                    </div>
                    <!--/ ui form segment-->
                </form>
            </div>
            <!--/ ticketCalc Form-->
        </div>
        <!--/ ticketCalc Box-->
        <div class="ui horizontal divider"></div>
        <div class="trackingResultBox">

            <!--<div class="column">
                <center>
                    <h3>Tickets Charges Details</h3>
                    <table style="border: 1px solid" id="ticketTable">
                        <tr>
                            <td id="category">Category</td>
                            <th id="category-value">Motor Cycle</th>
                        </tr>
                        <tr>
                            <td id="duration">Duration</td>
                            <th id="duration-value">
                                <span>2 Years + 165 Days</span>
                            </th>
                        </tr>
                        <tr>
                            <td id="duration-fine">Duration Fine</td>
                            <th id="duration-fine-value">200 + 100</th>
                        </tr>
                        <tr>
                            <td id="renewal-fee">Renewal Fee</td>
                            <th id="renewal-fee-value">550</th>
                        </tr>
                        <tr id="dup-row">
                            <td id="duplicate-fee">Duplicate Fee</td>
                            <th id="duplicate-fee-value">150</th>
                        </tr>
                        <tr>
                            <td id="total-tickets">Total Tickets Fee</td>
                            <th id="total-tickets-value">1100</th>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td id="courier-fee">Courier Fee</td>
                            <th id="courier-fee-value">180</th>
                        </tr>
                        <tr>
                            <td id="total-charges">Total Charges</td>
                            <th id="total-charges-value">1100</th>
                        </tr>


                    </table>
                </center>
            </div>-->
            <center>
                <div class="trackingResult" id="result"></div>
                <div class="trackingResult" id="resultt"></div>
            </center>
        </div>
    </div>
    <!--/contentBox-->
</div>
<!--/stackable grid-->
<script type="text/javascript" src="js/ticketCalculator.js"></script>

@endsection