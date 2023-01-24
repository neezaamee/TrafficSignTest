<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .CJCC {
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

</style>
<div class="ui stackable grid">
    <div class="CJCC contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                CCRIMINAL JUSTICE COORDINATION COMMITTEE
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="CJCCBox">
            <div class="ui one column stackable grid">
                <div class="column">

                    <p>Delivery of criminal justice involves effective coordination between the criminal courts, prosecutors, prisons staff and the police. For this purpose, the Police Order, 2002 provides for the establishment of a Criminal Justice Coordination Committee in each district. The Committee is headed by the District and Sessions Judge. The members include the Head of District Police, District Public Prosecutor, District Superintendent Jail, District Probation Officer, District Parole Officer and the Head of Investigation who is also the Secretary of the Committee. The law provides that the Committee shall meet at least once in each month. The functions of the Committee include:</p>

                    <ol>
                        <li>Keeping under review the operation of the criminal justice system and work towards the improvement of the system as a whole</li>
                        <li>Promoting understanding, cooperation and coordination in the administration of the criminal justice system</li>
                        <li>Exchanging information and give advance notice of local developments, which may affect other parts of the system
                            Formulation of coordinated priorities and plans to give effect to locally agreed policies</li>
                        <li>Raising relevant issues with the appropriate authorities;</li>
                        <li>Promoting the spread of good practices; and</li>
                        <li>Review the implementation of any decisions taken by the Committee.</li>
                    </ol>
                </div>
            </div>
            <!--/grid-->
        </div>
        <!--/CJCCBox-->
    </div>
    <!--/CJCC ContentBox-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
