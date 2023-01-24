<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<?= $this->include('Partials/adminAssets'); ?>
<style>
    .Administrator {
        margin-top: 20px;
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

                <?= strtoupper($userInfo['username']); ?> <br>(<a href="<?= base_url(); ?>/AdminPanel/Logout">Logout</a>)

            </h1>
        </div>
        <!--/heading-->
        <div class="ui horizontal divider"></div>
        <div class="AdministratorBox">
            <div class="ui four column stackable relaxed grid">
                <div class="column">
                    <a href="<?= base_url(); ?>/AdminPanel/CTOs">
                        <h2 class="ui center aligned icon header">
                            <i class="circular tv red icon"></i> <span>CTO's</span>
                        </h2>
                    </a>
                </div>
                <div class="column">
                    <a href="<?= base_url(); ?>/AdminPanel/Complaints">
                        <h2 class="ui center aligned icon header">
                            <i class="circular tv red icon"></i> <span>Complaints</span>
                        </h2>
                    </a>
                </div>
                <div class="column">
                    <a href="<?= base_url(); ?>/AdminPanel/Feedbacks">
                        <h2 class="ui center aligned icon header">
                            <i class="circular tv green icon"></i> <span>Feedback</span>
                        </h2>
                    </a>
                </div>
                <div class="column">
                    <a href="<?= base_url(); ?>/AdminPanel/Appointments">
                        <h2 class="ui center aligned icon header">
                            <i class="circular tv blue icon"></i> <span>Test Appointments</span>
                        </h2>
                    </a>
                </div>

                <div class="column">
                    <a href="<?= base_url(); ?>/AdminPanel/trafficNews">
                        <h2 class="ui center aligned icon header">
                            <i class="circular tv brown icon"></i> <span>Traffic News</span>
                        </h2>
                    </a>
                </div>
                <div class="column">
                    <a href="<?= base_url(); ?>/AdminPanel/addCTOhistory">
                        <h2 class="ui center aligned icon header">
                            <i class="circular tv brown icon"></i> <span>Add CTO History</span>
                        </h2>
                    </a>
                </div>

            </div>
            <!--/two column grid-->
        </div>
        <!--/ AdministratorBox-->
    </div>
    <!--/Administrator contentBox-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
