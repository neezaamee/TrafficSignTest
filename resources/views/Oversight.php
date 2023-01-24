<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .oversight {
        margin-top: 20px;
    }

    ol {
        list-style: none;
        counter-reset: my-awesome-counter;
    }

    ol>li {
        counter-increment: my-awesome-counter;
    }

    ol>li::before {
        content: counter(my-awesome-counter) ". ";
        color: red;
        font-weight: bold;
    }

    ol>li>a {
        color: black;
        text-decoration: none;
    }

</style>
<div class="ui stackable grid">
    <div class="oversight contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                Oversight
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="oversightBox">
            <article>
                <ol>
                    <li><a href="PSC">Public Safety Commissions</a></li>
                    <li><a href="CPF">Citizen Police Foundation</a></li>
                    <li><a href="CJCC">Criminal Justice Coordination Committee</a></li>
                    <li><a href="PSRP">Public Safety Reforms Project</a></li>
                </ol>
            </article>
        </div>
        <!--/safetyTipsBox-->
    </div>
    <!--/safetyTips contentBox-->
</div>
<!--/stackable grid-->

<?= $this->endSection(); ?>
