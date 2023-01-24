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
                <?= $pageHeading; ?> <br><a href="<?= base_url(); ?>/AdminPanel">go back</a>
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="AdministratorBox">
            <?php
                $serial=1;
                if(!empty($Complaints)):
            ?>

            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th data-priority="1" class="all">Sr.</th>
                        <th data-priority="2" class="all">Date</th>
                        <th class="none">Tracking ID</th>
                        <th data-priority="3" class="all">Type</th>
                        <th data-priority="4" class="all">Name</th>
                        <th data-priority="5">Subject</th>
                        <th class="none">CNIC</th>
                        <th data-priority="7" class="none">Contact</th>
                        <th class="none">Email</th>
                        <th class="none">Address</th>
                        <th class="none">Organization</th>
                        <th class="none">Complaint To</th>
                        <th data-priority="9">Complain Text</th>
                        <th data-priority="6" class="all">Status</th>
                        <th>Reply</th>
                        <th>Delete</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Complaints as $comp): ?>
                    <tr>
                        <td>
                            <?= $serial ?>
                        </td>
                        <td>
                            <?php
                            $compDate = $comp['datetime'];
                            $date = new DateTime($compDate);
                            $compDate = $date->format('d/m/y');
                            echo $compDate;
                            ?>
                        </td>
                        <td>
                            <?= $comp['trackingid'];  ?>
                        </td>
                        <td>
                            <?= $comp['comptype']; ?>
                        </td>
                        <td>
                            <?= $comp['name']; ?>
                        </td>
                        <td>
                            <?= $comp['compsubject']; ?>
                        </td>
                        <td>
                            <?= $comp['cnic']; ?>
                        </td>
                        <td>
                            <?= $comp['contact']; ?>
                        </td>
                        <td>
                            <?= $comp['email']; ?>
                        </td>
                        <td>
                            <?= $comp['address']  ?>
                        </td>
                        <td>
                            <?= $comp['organization']  ?>
                        </td>
                        <td>
                            <?= $comp['compto']  ?>
                        </td>
                        <td>
                            <?= $comp['comptext']  ?>
                        </td>
                        <td>
                            <?= $comp['compstatus']  ?>
                        </td>
                        <td>
                            <form action="<?= base_url(); ?>/AdminPanel/complaintReply/<?= $comp['id']; ?>" method="post">
                                <input type="hidden" name="_method" value="REPLY" />
                                <button type="submit" class="ui animated fade green button" tabindex="0">
                                    <div class="visible content">&nbsp;Reply&nbsp;</div>
                                    <div class="hidden content">
                                        <i class="reply large icon"></i>
                                    </div>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="<?= base_url(); ?>/AdminPanel/complaintDelete/<?= $comp['id']; ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="ui animated fade red button" tabindex="0">
                                    <div class="visible content">&nbsp;Delete&nbsp;</div>
                                    <div class="hidden content">
                                        <i class="trash large icon"></i>
                                    </div>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="<?= base_url(); ?>/AdminPanel/complaintPrint/<?= $comp['id']; ?>" method="post">
                                <input type="hidden" name="_method" value="PRINT" />
                                <button type="submit" class="ui animated fade blue button" tabindex="0">
                                    <div class="visible content">&nbsp;Print&nbsp;</div>
                                    <div class="hidden content">
                                        <i class="print large icon"></i>
                                    </div>
                                </button>
                            </form>

                        </td>

                    </tr>
                    <?php
                        $serial++;
                        endforeach;                        
                        ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th data-priority="1" class="all">Sr.</th>
                        <th data-priority="2" class="all">Date</th>
                        <th class="none">Tracking ID</th>
                        <th data-priority="3" class="all">Type</th>
                        <th data-priority="4" class="all">Name</th>
                        <th data-priority="5" class="all">Subject</th>
                        <th class="none">CNIC</th>
                        <th data-priority="7" class="none">Contact</th>
                        <th class="none">Email</th>
                        <th class="none">Address</th>
                        <th class="none">Organization</th>
                        <th class="none">Complaint To</th>
                        <th data-priority="9" class="all">Complain Text</th>
                        <th data-priority="6">Status</th>
                        <th>Reply</th>
                        <th>Delete</th>
                        <th>Print</th>
                    </tr>
                </tfoot>
            </table>
            <?php else: ?>
            <h1>No Complaints Found</h1>
            <?php endif; ?>

        </div>
        <!--/ AdministratorBox-->
    </div>
    <!--/Administrator contentBox-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
