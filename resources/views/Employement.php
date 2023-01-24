<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .Employment {
        margin-top: 20px;
    }

    .EmploymentBox h4 {
        color: green;
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
    <div class="Employment contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                Employement
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="EmploymentBox">
            <h3>Selection &amp; Recruitment</h3>
            <p align="justify">Recruitment in Police Department Punjab takes place on three levels:</p>
            <h4>a.<u>Assistant Superintendent of Police (ASP) BS-17</u></h4>
            <p align="justify">An ASP is recruited by the <a target="_blank" href="http://www.fpsc.gov.pk/">Federal Public Service Commission</a>, a high level board that makes the recruitment for all the Occupational Groups constituting the Central Superior Services at the Federal level.</p>

            <h4>b.<u>Sub Inspector (SI) BS-14</u></h4>
            <p align="justify">An ASI is recruited by the<a target="_blank" href="http://www.ppsc.gop.pk/"> Provincial Public Service Commission</a>.</p>
            <h4>c.<u>Assistant Sub Inspector (ASI) BS-11</u></h4>
            <p align="justify">An ASI is recruited by the<a target="_blank" href="http://www.ppsc.gop.pk/"> Provincial Public Service Commission</a>.</p>
            <h4>d.<u>Constable BS-07</u></h4>
            <p align="justify">A constable is recruited by the Special Board headed by a Deputy Inspector General of Police as Chairman, along with two Superintendents of Police who act as Members and Secretary of the Board, respectively.</p>
            <p align="justify">Recruitment for Constables at the district level is done through a competitive examination held by the Selection Board indicated. Besides the performance in the written examination; the respective Boards determine the suitability of the candidates for a job in the Police Department. Following the footsteps of the Federal and Provincial Public Service Commissions, the practice of employing the services of psychologists to determine the suitability of candidates is likely to be replicated at Constable level in near future.</p>
            <p align="justify">In order to overcome the scarcity of manpower the Government of the Punjab earmarked a quota of 6000 Constables to be recruited Province wide every year, for the next five years. This number is divided /  allocated to the districts according to their size, crime, need of the districts, other Police Units. A portion is also earmarked for other units including Punjab Constabulary, Motor Transport Wing (Drivers) and Telecommunication Wings (Wireless Operators) etc.</p>
            <p align="justify">Physical fitness, physical measurement and educational qualification (matriculation) are the prerequisites according to the prescribed standard. Though Punjab Police is an equal opportunity of employer, but a 5% quota stand earmarked for women candidates and minorities to encourage their recruitment in the Police Department. This is done with an explicit intent to make the Police as representative of the community as possible. Care is also taken to formulate questions that test breadth of knowledge of the candidates rather than their ability to cram. Written test comprises of section of English and Urdu (language) and General Knowledge.</p>
            <p align="justify">All efforts are made to ensure the transparency of the recruitment process that is merit oriented and focused towards selection of most appropriate candidates from among the applicant.</p>

        </div>
        <!--/EmploymentBox-->
    </div>
    <!--/Employment ContentBox-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
