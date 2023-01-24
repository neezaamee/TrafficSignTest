@extends("Layout.Base")
@section("content")
<style>
    .Learner {
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
    <div class="Learner contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->
        <div class="ui horizontal divider"></div>
        <div class="LearnerBox">
            <div class="ui two column stackable grid">
                <!--<div class="column">
                        <p>When a driver violates traffic rules, then Traffic Officer takes his relevant documents and issues him a challan ticket.
                            <br>This ticket contains information about the bank where the fine has to be paid, and particulars of the traffic sector office for the collection of documents.</p>
                        <h3>How can one pay the fine for a driving offence?</h3> <strong>The different possible ways of making the fine payment are listed below:</strong>
                        <ol>
                            <li>The violator can take his documents back from the Traffic Officer on the same day, after paying fine in the designated bank.</li>
                            <li>If the violator does not collect his documents on the same day, his documents are sent to concerned traffic sector office from where they can be collected after payment of fine.</li>
                            <li>In the case contrary to the above, after 10 days, the documents will be sent to concerned Judicial Magistrate.
                                <br>If the violator has paid fine within 10 days, then he would be in a position to receive his documents. Otherwise he will pay an amount which will be twice the original fine to receive his documents.</li>
                        </ol>
                    </div>-->
                <div class="column"> <strong>
                        Bank Branch:
                    </strong>
                    <p> Go to any online bank branch and pay the challan by stating the PSID(written on challan ticket). </p> <strong>
                        ATM Machine
                    </strong>
                    <p> Challan can be paid at any ATM Machine through PSID(written on challan ticket). </p> <strong>
                        Easypaisa Mobile Application
                    </strong>
                    <p> Follow these steps to pay through Easypaisa Mobile Application
                        <li>Select View All</li>
                        <li>Select Government Fee</li>
                        <li>Select City Traffic Police Faisalabad</li>
                        <li>Enter 18 Digit PSID Code(written on challan ticket)</li>
                        <li>You will get confirmation message upon successfully paid.</li>
                    </p> <strong>
                        TCS Courier Service
                    </strong>
                    <p> Go to any online bank branch and pay the challan by stating the PSID(on challan ticket). </p> <strong>
                        Follow these steps to pay through Jazzcash
                    </strong>
                    <p>
                        <li>Dial this code from your jazzcash account <b>*786*5*21*1*4#</b></li>
                        <li>Enter 18 Digit PSID Code(written on challan ticket)</li>
                        <li>You will get confirmation message upon successfully paid</li>
                    </p> <strong>Mobile Banking Application</strong>
                    <p> Challan can be paid through any Online banking Application </p>
                </div>
                <div class="column" style="direction: rtl; font-size:1.2em"> <strong>
                        بینک برانچ
                    </strong>
                    <br />
                    <p> کسی بھی آن لائن بینک برانچ میں جائیں اور چالان پر موجود PSID بتا کر چالان ادا کریں ۔ </p>
                    <br /> <strong>
                        مشین ATM
                    </strong>
                    <br />
                    <p> کسی بھی ون لنک ATM مشین سے اپنا ٹریفک چالان ادا کریں۔ </p>
                    <br /> <strong>
                        ایزی پیسہ موبائل ایپلی کیشن
                    </strong>
                    <br />
                    <p> ایزی پیسہ ایپلی کیشن میں سب سے پہلےView All کے مینیو میں جائیں۔
                        <br /> وہاں سے گورنمنٹ فیس کے مینیو میں جائیں۔
                        <br /> وہاں پہ CTPF کے لوگو پر کلک کریں۔
                        <br /> چالان پر موجود 18 ہندسوں کا PSID کوڈ درج کریں۔
                        <br /> جمع ہونے کی صورت میں آپ کو تصدیقی میسج موصول ہو جائے گا۔
                    </p>
                    <br /> <strong>
                        TCS کورئیر سروس
                    </strong>
                    <br />
                    <p> کسی بھی TCS کورئیر سروس پر جائیں اور چالان پر موجود PSID بتا کر چالان ادا کریں ۔ </p>
                    <br /> <strong>
                        جاز کیش ایپلی کیشن
                    </strong>
                    <br />
                    <p> اپنے جاز کیش اکاؤنٹ سے #4*1*21*5*786* درج کریں۔
                        <br /> چالان پر موجود 18 ہندسوں کا PSID کوڈ درج کریں۔
                        <br /> جمع ہونے کی صورت میں آپ کو تصدیقی میسج موصول ہو جائے گا۔
                    </p>
                    <br /> <strong>
                        موبائل بینکنگ ایپلی کیشن
                    </strong>
                    <br />
                    <p> کسی بھی بینک کی آن لائن بینکنگ کے لیے بنائی گئی ایپلی کیشن استعمال کرتے ہوئے چالان ادا کیا جا سکتا ہے۔
                        <br />
                </div>
            </div>
        </div>
        <!--/LearnerBox-->
    </div>
    <!--/Learner ContentBox-->
</div>
<!--/stackable grid-->
@endsection
