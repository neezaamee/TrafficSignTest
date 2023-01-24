<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .PSRP {
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
    <div class="PSRP contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                PUBLIC SAFETY REFORMS PROJECT
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="PSRPBox">
            <div class="ui one column stackable grid">
                <div class="column">

                    <p>The Project aims at providing technical support to the Home Department and the Punjab Police in following three main areas:</p>

                    <ol>
                        <li>Community based policing ( Out puts: High quality investigations, implementation of CP programs in selected police stations)</li>
                        <li>Public Oversight bodies ( Out puts: Effective functioning of Public Oversight bodies, PO 2002 and LGO 2001 institutions functionally integrated in pilot districts)</li>
                        <li>Policy dialogue ( Out put: Contribution to national and provincial police reforms)
                        </li>
                    </ol>
                    <p>The Project is supported by $ 950,000 grant from the ADB and $ 240,000 equivalent counterpart funding of the Government of Punjab. Possible extra funding sources include AJ Program loan proceeds and AJP TA loan. The Project will be piloted in four districts of the Punjab: Faisalabad, Gujrat, Gujranwala and Multan. The Planning and Development Department is the executing agency of the Project. The provincial implementing agencies are the Home Department and Punjab Police. The Implementing Agencies/stakeholders at district level are the respective District Governments, District Police, District Public Safety Commissions and the District Criminal Justice and Coordination Committees.</p>
                </div>
            </div>
            <!--/grid-->
        </div>
        <!--/PSRPBox-->
    </div>
    <!--/PSRP ContentBox-->
</div>
<!--/stackable grid-->

<?= $this->endSection(); ?>
