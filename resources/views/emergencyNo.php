<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .emergencyNo {
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
    <div class="emergencyNo contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                Emergency Numbers
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="emergencyNoBox">
            <center>
                <article>
                    <table style="border: 1px solid">

                        <tr>
                            <td>Police Emergency</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>CPLC Emergency</td>
                            <td>1261</td>
                        </tr>
                        <tr>
                            <td>Ambulance</td>
                            <td>115</td>
                        </tr>
                        <tr>
                            <td>Rescue</td>
                            <td>1122</td>
                        </tr>
                        <tr>
                            <td>DCO Faisalabad</td>
                            <td>041-9200205</td>
                        </tr>
                        <tr>
                            <td>Commissionar Office</td>
                            <td>041-9201717</td>
                        </tr>
                        <tr>
                            <td>CPO Faisalabad</td>
                            <td>041-9200233-34</td>
                        </tr>
                        <tr>
                            <td>Exchange CPO Office</td>
                            <td>041-9200244-45</td>
                        </tr>
                        <tr>
                            <td>Exchange RPO Office</td>
                            <td>041-9200497-98</td>
                        </tr>
                        <tr>
                            <td>RPO Office Faisalabad</td>
                            <td>041-9200610-11</td>
                        </tr>
                    </table>

                </article>
            </center>
        </div>
        <!--/salientFeaturesBox-->
    </div>
    <!--/salient-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
