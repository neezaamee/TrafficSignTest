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
                <?= $pageHeading ?> <br><a href="<?= base_url(); ?>/AdminPanel/">go back</a>
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="AdministratorBox">

            <?php
                $serial=1;
                if(!empty($Feedbacks)):
            ?>

            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Date</th>
                        <th class="none">Type</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th class="none">CNIC</th>
                        <th class="none">Contact</th>
                        <th class="none">Email</th>
                        <th class="none">Address</th>
                        <th class="none">Organization</th>
                        <th class="none">To</th>
                        <th>Massage</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Feedbacks as $fb): ?>
                    <tr>
                        <td>
                            <?= $serial; ?>
                        </td>
                        <td>
                            <?= $fb->date;  ?>
                        </td>
                        <td>
                            <?= $fb->fbtype; ?>
                        </td>
                        <td>
                            <?= $fb->name; ?>
                        </td>
                        <td>
                            <?= $fb->fbsubject; ?>
                        </td>
                        <td>
                            <?= $fb->cnic; ?>
                        </td>
                        <td>
                            <?= $fb->contact; ?>
                        </td>
                        <td>
                            <?= $fb->email; ?>
                        </td>
                        <td>
                            <?= $fb->address  ?>
                        </td>
                        <td>
                            <?= $fb->organization  ?>
                        </td>
                        <td>
                            <?= $fb->fbto  ?>
                        </td>
                        <td>
                            <?= $fb->fbtext  ?>
                        </td>
                        <td>
                            <a href="feedbackDel.php?fbID=<?= $fb->id; ?>">
                                <div class="ui animated fade red button" tabindex="0">
                                    <div class="visible content">&nbsp;Delete&nbsp;</div>
                                    <div class="hidden content">
                                        <i class="recycle large icon"></i>
                                    </div>
                                </div>
                            </a>
                        </td>

                    </tr>
                    <?php
                        $serial++;
                        endforeach;                        
                        ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Subject</th>
                        <th>Name</th>
                        <th>CNIC</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Organization</th>
                        <th>To</th>
                        <th>Massage</th>
                        <th>Action</th>
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
