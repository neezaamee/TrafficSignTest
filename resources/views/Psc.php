<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .PSC {
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
    <div class="PSC contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                Public Safety Commission
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="PSCBox">
            <div class="ui one column stackable grid">
                <div class="column">
                    <p>District Public Safety and Police Complaints Commissions are established by provincial government under Article 37 of the Police Order, 2002. The Commissions consist of nine members one third of whom are members of the provincial assembly, members of the Zila Council concerned and independent members selected by a panel headed by the District and Sessions Judge. The members of the Commission elect a Chairperson from amongst themselves in their first meeting.</p>
                    <strong>The powers and functions of the Commissions are given at Article 44 of the Order. These can however broadly be listed as under:</strong>

                    <ol>
                        <li>Approval of annual policing plan and evaluation of the delivery of performance targets listed in the plan on quarterly basis;</li>
                        <li>Submission of reports on law and order, performance of the District Police, the Commission and implementation of policing plan;</li>
                        <li>Receiving complaints in cases of police neglect, failure or excess and:</li>
                        <ul>
                            <li> Direct the Head of District Police for appropriate action and submit report;</li>
                            <li> Conduct an inquiry on its own or through an officer serving in the District and require the Head of District Police to take legal action against delinquent police officers in appropriate cases.</li>
                        </ul>
                        <li>Receive complaints of excesses committed by any member of federal law enforcement agency or civil armed forces acting in aid of District Police and direct the appropriate authority for remedial action;</li>
                        <li>Take steps for prevention of police from illegal activities, collusive relationship between Nazim and the Head of District Police, and encourage police-public cooperation;</li>
                        <li> Issue directions to the Head of District Police for disposal of unclaimed property under Article 135 of the Order</li>
                    </ol>
                    <p>The tenure of members of the Faisalabad Commission expired in 2005. The Commission has therefore remained disfunctional since then. The selection of fresh members is however at an advance stage and the Commission is likely to be reconstituted shortly. </p>
                    <p>The details of the composition and mandate of the District Public Safety and Police Complaints Commissions are contained in Chapter V of the Police Order 2002.
                    </p>
                    <p>Office Location: <br>Behind Commissioner Office opposite District Anti-Corruption DMO Building, Faisalabad <br>
                        Telephone No: 041-9201063 <br>
                        Commission Secretary:Shahzad Fazal Abbasi Telephone No. 041-9200782</p>
                    <p>Former Chairpersons of the Faisalabad Commission: <br>
                        Mian Muhammad Latif 3 Jan 2003 to 10 Feb 2005 <br>
                        Mian Muhammad Hanif 10 Feb 2005 to 15 Nov 2005 <br>
                        Mohsin Choudhary 20 Aug 2007 to 20 Aug 2010</p>

                </div>
            </div>
        </div>
        <!--/PSCBox-->
    </div>
    <!--/PSC ContentBox-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
