@extends('Layout.Base')
@section('content')
    
<style>
    .verifyLicense {
        margin-top: 20px;
    }

</style>
<div class="ui stackable grid">
    <div class="verifyLicense contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="verifyLicenseBox">
            <iframe src="https://dlims.punjab.gov.pk/track/" width="100%" height="500" style="overflow:hidden;">
                <p>Your browser does not support iframes.</p>
            </iframe>

        </div>
        <!--/Downloads-->
    </div>
    <!--/Downloads ContentBox-->
</div>
@endsection
