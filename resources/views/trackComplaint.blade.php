@extends('Layout.Base')
@section('content')
<style>
    .trackComplaint {
        margin-top: 20px;
    }

</style>
<div class="ui stackable grid">
    <div class="trackComplaint contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>
        
        <div class="trackComplaintBox ui centered aligned grid">
            @isset($Complaint)
                <h2>
            {{$Complaint->status}}
                </h2>            
            @else
            <div class="trackComplaintForm sixteen wide mobile ten wide tablet six wide computer column centered">
            <form action="{{ url('/ComplaintStatus')}}" method='POST'>
                    <div class="ui form piled segment secondary blue">
                        @csrf
                        @method('post')
                        <div class="ui fields">
                            <div class="required sixteen wide field">
                                <label>Tracking #:</label>
                                <input name="trackingid" id="trackingnumber" type="text" placeholder="Tracking Number" required>
                            </div>
                        </div>
                        <!--/ ui fields-->
                        <br />
                        <center>
                            <button type="Track" name="trackComplaint" class="ui blue wide button">Submit</button>
                        </center>

                    </div>
                    <!--/ ui form segment-->
            </form>
            @endisset
            </div>
            <!--/ trackComplaint Form-->
        </div>
        <!--/ trackComplaint Box-->
        <div class="ui horizontal divider"></div>
        <div class="trackingResultBox">
            <?php if(isset($compStatus)): ?>
            <?= $compStatus; ?>
            <?php endif ?>

        </div>
    </div>
    <!--/contentBox-->
</div>
<!--/stackable grid-->
@endsection
