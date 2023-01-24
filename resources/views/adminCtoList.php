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
                if(!empty($ctoHistory)):
            ?>

            <table id="myTable" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th data-priority="1" class="all">Sr.</th>
                        <th data-priority="2" class="all">Name</th>
                        <th class="desktop">Appointment Date</th>
                        <th data-priority="3" class="all">Transfer Date</th>
                        <th data-priority="4" class="desktop">Image Name</th>
                        <th data-priority="5" class="desktop">Action</th>
                        <th data-priority="6" class="desktop">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ctoHistory as $comp): ?>
                    <tr>
                        <td>
                            <?= $serial ?>
                        </td>
                        <td>
                            <?= $comp['name']; ?>
                        </td>
                        <td>
                            <?= $comp['dateappointment']; ?>
                        </td>
                        <td>
                            <?= $comp['datetransfer']; ?>
                        </td>
                        <td>
                            <?= $comp['imgurl']; ?>
                        </td>
                        <td>
                            <form action="<?= base_url(); ?>/AdminPanel/ctoEdit/<?= $comp['id']; ?>" method="post">
                                <input type="hidden" name="_method" value="REPLY" />
                                <button type="submit" class="ui animated fade green button" tabindex="0">
                                    <div class="visible content">&nbsp;Edit&nbsp;</div>
                                    <div class="hidden content">
                                        <i class="reply large icon"></i>
                                    </div>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="<?= base_url(); ?>/AdminPanel/ctoDelete/<?= $comp['id']; ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="ui animated fade red button" tabindex="0">
                                    <div class="visible content">&nbsp;Delete&nbsp;</div>
                                    <div class="hidden content">
                                        <i class="trash large icon"></i>
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
                    <!--<tr>
    <th>Sr.</th>
    <th>Name</th>
    <th>Appointment Date</th>
    <th>Transfer Date</th>
    <th>Image Name</th>
    <th>Action</th>
    <th>Action</th>
</tr>-->
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
