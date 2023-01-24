<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .renewLicense {
        margin-top: 20px;
    }

    table {
        border: 5px solid red;
        padding: 10px;
    }

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
                <?= $pageHeading ?>
            </h1>
        </div>
        <!--/heading-->
        <div class="ui horizontal divider"></div>
        <div class="renewLicenseBox">
            <div class="ui one column stackable relaxed grid">
                <div class="column">
                    <center>
                        <table style="border: 1px solid">
                            <tr>
                                <th>Title</th>
                                <th>Download Link</th>
                            </tr>
                            <!--<tr>
                                <td>Highway Code Book</td>
                                <td><a href="Signal/PDF/Highway_Code_Book.pdf">Click Here</a></td>
                            </tr>-->
                            <tr>
                                <td>Books By Police Officers</td>
                                <td><a href="<?= base_url(); ?>/Books">Click Here</a></td>
                            </tr>
                            <tr>
                                <td>Regular Driving License Form</td>
                                <td><a href="https://dlims.punjab.gov.pk/public/downloads/regular.pdf">Click Here</a></td>
                            </tr>
                            <tr>
                                <td>Driving License Renewal Form</td>
                                <td><a href="https://dlims.punjab.gov.pk/public/downloads/Renewal.pdf">Click Here</a></td>
                            </tr>
                            <tr>
                                <td>Duplicate Form</td>
                                <td><a href="https://dlims.punjab.gov.pk/public/downloads/duplicate.pdf">Click Here</a></td>
                            </tr>
                            <tr>
                                <td>International Driving License Form</td>
                                <td><a href="https://dlims.punjab.gov.pk/public/downloads/international.doc">Click Here</a></td>
                            </tr>
                            <!--<tr>
                                <td>Medical Form</td>
                                <td><a href="https://dlims.punjab.gov.pk/public/downloads/medical.pdf">Click Here</a></td>
                            </tr>-->
                            <tr>
                                <td>Endorsement of License Form</td>
                                <td><a href="https://dlims.punjab.gov.pk/public/downloads/Endorsement.pdf">Click Here</a></td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
        </div>
        <!--/renewLicenseBox-->
    </div>
    <!--/renewLicense ContentBox-->
</div>
<!--/ stackable grid-->

<?= $this->endSection(); ?>
