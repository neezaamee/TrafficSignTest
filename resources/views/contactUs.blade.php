@extends("Layout.Base")
@section("content")
<style>
    .contactUsBox h3 {
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
    <div class="contactUs contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                <?= $pageHeading ?>
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="contactUsBox">
            <h3>Address: </h3>
            <p>Office of the Chief Traffic Officer <br>near PS Civil Lines in front of Kachehri Faisalabad.</p>
            <h3>Phone No.</h3>
            <p>041-9200514</p>
            <h3>Help Line No.</h3>
            <p>1915</p>
            <h3>E-mail:</h3>
            <p>fsd.ctp@gmail.com</p>
        </div>
        <!--/contactUsBox-->
    </div>
    <!--/contactUs ContentBox-->
</div>
<!--/stackable grid-->
@endsection

