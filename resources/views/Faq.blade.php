@extends('Layout.Base')
@section('content')    
<style>
    .Faq {
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

</style>
<div class="ui stackable grid">
    <div class="Faq contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="faqBox">
            <article>

                <h4>What are the Requirments to get Driving Learner Permit?</h4>
                <ol>
                    <li>A copy of CNIC.</li>
                    <li>A Ticket of Rs.60 for each category from any Post Office.</li>
                    <li>Medical Certificate (for the candidates whose age is 50 years or above).</li>
                    <span class="note"><b>Learner permits are issued on Daily Basis with Validity of 6 months from the date of issuance.</b></span>
                </ol>
                <h4>Is there any age limit to get Driving Leaner Permit?</h4>
                <ol>
                    <li>Motor Cycle/ Motor Car 18 Years.</li>
                    <li>LTV (Rikshaw, Taxi, Tractor Commercial) 21 Years.</li>
                    <li>HTV 22 Year and HTV Leaner can be get after 3 years of MCAR or LTV License.</li>
                </ol>


                <h4>What are the Requirements of Driving License?</h4>
                <ol>
                    <li>Application Form (A) for Regular Fresh License.</li>
                    <li>Original Learner Permit of atleast 6 weeks.</li>
                    <li>Medical Certificate + <u>(Medical Fitness Certificate for age 50 years and above).</u></li>
                    <li>3 Passport size fresh Photo Graphs(Attested).</li>
                    <li>Copy of CNIC.</li>
                    <li>Paste Revenue Tickets of Mentioned Fee on License Document.</li>
                </ol>
                <h4>What are The Requirements of an International Driving Permit?</h4>
                <ol>
                    <li>International Driving Permit Application Form.</li>
                    <li>Attested copy of CNIC.</li>
                    <li>An attested copy of Valid National Driving License issued from Faisalabad.</li>
                    <li>An attested copy of Pakistani Passport valid for Atleast 6 Months.</li>
                    <li>An attested copy of Valid Visa.</li>
                    <li>2 attested photo graph (Passport Size).</li>
                    <li>Rs. 22 Court Fee Ticket & Revenue Ticket of Rs.60</li>
                    <span class="note"><b>Validity of International Driving permit is Three years or Expiry of National Driving License, which comes first.</b></span>
                </ol>
                <h4>What are Requirements of Duplicate License?</h4>
                <ol>
                    <li>The applicant will provide naqal report if he lost his original driving license.</li>
                    <li>Copy of CNIC.</li>
                    <li>Picture will be taken on computer.</li>
                    <li>A form will be issued to the applicant which will be return to the same office after medical report.</li>
                    <li>A Medical Fitness Certificate will also be provided by the applicant with application form who will be more than 50 years of age.</li>
                    <li>Ticket(s) according to schedule related to license category.</li>
                </ol>
                <h4>How Can I Renew My Driving License?</h4>
                <ol>
                    <li>The applicant will provide original driving license to relevant officer in the driving license branch.</li>
                    <li>He will provide naqal report if he will lost his original driving license.</li>
                    <li>Copy of CNIC.</li>
                    <li>Picture will be taken on computer.</li>
                    <li>A form will be issued to the applicant which will be return to the same office after medical report.</li>
                    <li>A Medical Fitness Certificate will also be provided by the applicant with application form who will be more than 50 years of age.</li>
                    <li>Ticket(s) according to schedule related to license category.</li>
                    <li>License is renewed for five years.</li>
                    <span class="note"><b>For more details Please Visit: <a href="renewLicense.php">Renewal Of Driving License</a></b></span>
                </ol>
                <h4>How can I verify my Driving License?</h4>
                <ol>
                    <li>You Can verify Your Driving License Through our Official Website<b><a href="verifyLicense.php">"License Inquiry."</a></b></li>
                    <li>Either you want a Verfication Letter? You have to Visit our CTO Office with copy of License and Copy of CNIC.</li>
                </ol>
                <h4>Where can I learn Driving?</h4>
                <ul>
                    <li>City Traffic Police, Faisalabad has Established A Driving School for General Public.</li>
                    <li>You Can Learn Driving after your Registeration and for Registration & Information.</li>
                    <li>You can Call Admin City Traffic Police Car Driving School <b>"041-9220270"</b> or <b>"03238474789"</b>.</li>
                </ul>
                <h4>Where can I go for Driving Test?</h4>
                <ul>
                    <li>Driving Test is conducted within the premises of Police Station Poeples Colony located at Jaranwala Road</li>
                    <li>Driving Test is conducted 6 days a week for non-Commercial Driving Licenses.</li>
                    <li>Driving Test is conducted 2 days a week Tuesday and Thursday for Commercial Driving Licenses(LTV)</li>
                    <li>Driving Test is conducted 2 days a month(Saturday) for Commercial Driving Licenses(i.e. HTV,PSV)</li>
                </ul>
            </article>
        </div>
        <!--/faqBox-->
    </div>
    <!--/Faq ContentBox-->
</div>
@endsection