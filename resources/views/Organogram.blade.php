@extends("Layout.Base")
@section("content")
<style>
    @media only screen and (min-width: 768px) {
        #orgImg {
            /*width: max-content;*/
        }

    }

    @media only screen and (max-width: 767px) {
        #orgImg {

            width: 100%;
        }

    }

</style>
<div class="ui stackable grid">
    <div class="Profile contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                <?= $pageHeading ?>
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="OrganogramBox">
            <center>
                <img id="orgImg" src="{{ asset('/img/organogram.jpg') }}" alt="Picture not Found">
            </center>
        </div>
        <!--/ OrganogramBox-->
    </div>
    <!--/contenBox-->
</div>
@endsection
