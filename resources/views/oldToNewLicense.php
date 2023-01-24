<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .oldToNewLicense {
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
    <div class="oldToNewLicense contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                <?= $pageHeading ?>
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="oldToNewLicenseBox">
            <div class="ui two column stackable relaxed grid">
                <div class="column">
                    <h3>REQUIRED DOCUMENTS FOR OLD TO NEW LICENSE:</h3>
                    <ul>
                        <li>The applicant will provide original driving license to relevant officer in the driving license branch.</li>
                        <li>He will provide naqal report if he will lost his original driving license.</li>
                        <li>A copy of C.N.I.C.</li>
                        <li>A snap will be taken at computer.</li>
                        <li>A form will be issued to the applicant after verifying his/her previous record which will be return to the same office after medical report.</li>
                        <li>A Medical Fitness Certificate will also be provided by the applicant with application form if he is old than 50 years.</li>
                        <li>A certificate issued by relevant Post Office which expresses the expiry date of license.</li>
                        <li>Ticket(s) according to schedule related to license category.</li>
                    </ul>
                </div>
                <div class="column">
                    <h3>DRIVING LICENSE FEE SCHEDULE FOR OLD TO NEW:</h3>
                    <table style="border: 1px solid">
                        <tr>
                            <th>Vehicle</th>
                            <th>Tickets Rs.</th>
                        </tr>

                        <tr>
                            <td>Motor Cycle</td>
                            <td>600</td>
                        </tr>
                        <tr>
                            <td>Motor Car</td>
                            <td>900</td>
                        </tr>
                        <tr>
                            <td>Motor Cycle Rickshaw</td>
                            <td>600</td>
                        </tr>

                        <tr>
                            <td>Tractor Commercial</td>
                            <td>600</td>
                        </tr>
                        <tr>
                            <td>Tractor Agriculture</td>
                            <td>600</td>
                        </tr>
                        <tr>
                            <td>Motor Cycle/Motor Car</td>
                            <td>900</td>
                        </tr>
                        <tr>
                            <td>LTV</td>
                            <td>900</td>
                        </tr>
                        <tr>
                            <td>HTV</td>
                            <td>1200</td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>
        <!--/Downloads-->
    </div>
    <!--/Downloads ContentBox-->
</div>

<?= $this->endSection(); ?>
