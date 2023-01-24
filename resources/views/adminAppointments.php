<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<?= $this->include('Partials/adminAssets'); ?>
<style>
    .Administrator {
        margin-top: 20px;
    }

    .complaintTable {
        width: 98%;
    }

    @media only screen and (max-width: 780px) {
        .Administrator img {
            width: 100%;
        }
    }

</style>
<div class="ui stackable grid">
    <div class="Administrator contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                <?= $pageHeading; ?> <br><a href="<?= base_url()?>/AdminPanel">go back</a>
            </h1>
        </div>
        <!--/heading-->
        <div class="ui horizontal divider"></div>
        <div class="AdministratorBox">
            <?php
                $serial=1;
                if(!empty($Appointments)):
            ?>
            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th data-priority="1" class="all">Sr.</th>
                        <th data-priority="2" class="all">Name</th>
                        <th data-priority="3" class="all">CNIC</th>
                        <th>Appointment Token</th>
                        <th>Appointment No</th>
                        <th>Date</th>
                        <th>Time</th>
                        <!--<th>Booking Date</th>-->
                        <!--<th>Delete</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Appointments as $appointment): ?>
                    <tr>
                        <td>
                            <?= $serial; ?>
                        </td>
                        <td>
                            <?= $appointment['name']; ?>
                        </td>
                        <td style="text-align: center">
                            <?= $appointment['cnic']; ?>
                        </td>


                        <td style="text-align: center">
                            <?= $appointment['token'];  ?>
                        </td>
                        <td style="text-align: center">
                            <?= $appointment['appointmentno'];  ?>
                        </td>
                        <td style="text-align: center">
                            <?= $appointment['date']; ?>
                        </td>
                        <td style="text-align: center">
                            <?= $appointment['time']; ?>
                        </td>
                    </tr>
                    <?php
                        $serial++;
                        endforeach;                        
                        ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>CNIC</th>

                        <th>Appointment Token</th>
                        <th>Appointment No</th>
                        <th>Date</th>
                        <th>Time</th>
                        <!--<th>Booking Date</th>-->
                    </tr>
                </tfoot>
            </table>

            <?php else: ?>
            <h1>Chalo Shahbash Shapar ho jao</h1>
            <?php endif; ?>
        </div>
        <!--/ AdministratorBox-->
    </div>
    <!--/Administrator contentBox-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
