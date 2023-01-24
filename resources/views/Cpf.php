<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .CPF {
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
    <div class="CPF contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                Citizen Police Foundation
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="CPFBox">
            <div class="ui one column stackable grid">
                <div class="column">

                    <strong>Article 168 of the Police Order, 2002 empowers the government to establish Citizen Police Foundation as voluntary, self-financing and autonomous bodies. The role of the CPF is however restricted to provision of support to the police and public oversight bodies established under the Order. Specific functions of the CPF are:</strong>

                    <ol>
                        <li>Training and capacity building of members and staff of the Provincial and District Public Safety and Police Complaints Commissions.</li>
                        <li>Developing mechanisms for liaison between aggrieved citizens and police for providing relief.</li>
                        <li>Assistance to Provincial and District Public Safety and Police Complaints Commissions and the police for expeditious and judicious discharge of their duties.</li>
                    </ol>
                    <p>A Citizen Police Foundation is working in Faisalabad; however this Committee has been established under the executive authority of the government and not under the Order.
                    </p>
                </div>
            </div>
        </div>
        <!--/CPFBox-->
    </div>
    <!--/CPF ContentBox-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
