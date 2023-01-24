<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
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
                <?=pageHeading; ?>
                <!--Learning Period Condonation(LPC)-->
            </h1>
        </div>
        <!--/heading-->
        <div class="ui horizontal divider"></div>
        <div class="LearnerBox">
            <div class="ui two column stackable grid">
                <!--<div class="column">
                        <p>When a driver violates traffic rules, then Traffic Officer takes his relevant documents and issues him a challan ticket.
                            <br>This ticket contains information about the bank where the fine has to be paid, and particulars of the traffic sector office for the collection of documents.</p>
                        <h3>How can one pay the fine for a driving offence?</h3> <strong>The different possible ways of making the fine payment are listed below:</strong>
                        <ol>
                            <li>The violator can take his documents back from the Traffic Officer on the same day, after paying fine in the designated bank.</li>
                            <li>If the violator does not collect his documents on the same day, his documents are sent to concerned traffic sector office from where they can be collected after payment of fine.</li>
                            <li>In the case contrary to the above, after 10 days, the documents will be sent to concerned Judicial Magistrate.
                                <br>If the violator has paid fine within 10 days, then he would be in a position to receive his documents. Otherwise he will pay an amount which will be twice the original fine to receive his documents.</li>
                        </ol>
                    </div>-->





                <div class="column">
                    LPC refers to the waiver by the competent authority in certain circumstances of the 42-day learning period prescribed for obtaining a driving license.
                    Candidates who have a thorough command of driving want to go abroad before completing the learning period. Such candidates will bring their visa and ticket.
                    Candidates who are employees of an Armed Services or other government department and are stationed in a remote area (other province) of the country. And there are holiday issues.
                    Candidates who have a driving license from this district or any other district but are not online. They can obtain LPC by submitting their previous license.
                    Candidates who have a foreign driving license. They can get LPC by submitting their license.
                    LPC permission can only be obtained by obtaining a non-commercial license. Which will not exceed 2% per month.
                    Note: Candidates who are eligible for any one of the above conditions will submit their application to the competent authority. Which will be acceptable considering the 2% quota.

                </div>
                <div class="column" style="direction: rtl; font-size:1.2em">
                    ایل پی سی سے مراد ڈرائیونگ لائسنس کے حصول کے لیے مقرر کردہ 42دن کے لرننگ پیریڈ کی مخصوص حالات میں مجاز اتھارٹی کی طرف سے معافی ہے۔
                    ایسےامیدوار جن کو ڈرائیونگ پر مکمل عبور حاصل ہووہ لرننگ پیریڈ پورا کرنے سے پہلے بیرون ملک جانا چاہتے ہیں۔ ایسے امیدوار اپنا ویزہ اور ٹکٹ ہمراہ لائیں گے۔
                    ایسے امیدوار جو کسی آرمڈسروسز یا دیگر سرکاری محکمہ کے ملازم ہوں اور ملک میں کسی دوردراز علاقہ(دیگر صوبہ) میں تعینات ہوں۔ اور چھٹی کے مسائل درپیش ہوں۔
                    ایسے امیدوار جن کے پاس ضلع ہذا یا دیگر کسی ضلع کا ڈرائیونگ لائسنس موجود ہو لیکن وہ آن لائن نہ ہوئے ہوں۔ وہ اپنا سابقہ لائسنس پیش کر کے ایل پی سی حاصل کر سکتے ہیں۔
                    ایسے امیدوار جو کہ کسی بیرون ملک کے ڈرائیونگ لائسنس یافتہ ہوں۔ وہ اپنا لائسنس پیش کر کے ایل پی سی حاصل کر سکتے ہیں۔
                    ایل پی سی کی اجازت صرف نان کمرشل لائسنس کے حصول پر حاصل کی جا سکتی ہے۔ جو ماہانہ 2 فی صد سے زائد نہ ہوگی۔
                    نوٹ: امیدوار جو متذکرہ بالا شرائط میں کسی ایک کے اہل ہوں وہ اپنی درخواست مجاز اتھارٹی کو دیں گے۔ جو کہ 2 فی صد کوٹہ کو مد نظر رکھتے ہوئے قابل قبول ہوگی۔

                    <br />
                </div>
            </div>
        </div>
        <!--/LearnerBox-->
    </div>
    <!--/Learner ContentBox-->
</div>
<!--/stackable grid-->
<?= $this->endSection(); ?>
