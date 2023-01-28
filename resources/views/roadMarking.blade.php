@extends('Layout.Base')
@section('head')
@parent
<script>
    function trafficLights() {
        var trafficLightsDiv = document.getElementById("trafficLights");
        var handSignalsDiv = document.getElementById("handSignals");
        if (trafficLightsDiv.style.display === "none") {
            trafficLightsDiv.style.display = "block";
            handSignalsDiv.style.display = "none";
        }
    }

    function handSignals() {
        var trafficLightsDiv = document.getElementById("trafficLights");
        var handSignalsDiv = document.getElementById("handSignals");
        if (handSignalsDiv.style.display === "none") {
            handSignalsDiv.style.display = "block";
            trafficLightsDiv.style.display = "none";
        }
    }

</script>
<style>
    .roadMarking {
        margin-top: 20px;
    }

    .roadMarking p {
        color: black;
    }

    .roadMarkingBox p b {
        color: darkmagenta;
    }

</style>
@endsection
@section('content')
<div class="ui stackable grid">
    <div class="roadMarking contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                Road Marking
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>
        <div class="roadMarkingBox">
            <div class="ui horizontal divider"></div>
            <div class="trafficLights" id="trafficLights">
                <div class="ui two column stackable relaxed grid">
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>DIVIDING LINES</b> <br />A dividing line is a road marking formed by a white/yellow line or two parallel white/yellow lines (broken or continous) designed to seperate the parts of a road to be used by vehicles travelling in opposite directions.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/dividingline.png') }}" alt="Picture is Missing" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>Broken Line (or Broken Line to the left of a Continous Line)</b> <br />You must keep to the left of these lines. You may cross them to overtake or make a turn, but you must only do so if it is safe.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/brokenline.jpg') }}" alt="Picture is Missing" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>Single Continuous Line (or Single Continous Line to the left of a Broken Line)</b> <br />You must keep to the left of these lines. You must not cross these lines to overtake or make a U-Turn but may cross them to enter or leave the road or to go past an obstruction.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/single_continous_line.gif') }}" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>Parallel Lines</b> <br />You must keep to the left and must not cross these lines, unless you have to avoid an obstruction.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/parallel_lines.gif') }}" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>Avoiding an obstruction</b> <br />You are permitted to cross single or double continous lines in order to avoid an obstruction - This does not include a slower moving vehicle or a vehicle stopped in a line of traffic, but may include a fallen tree, a crashed vehicle, or a car that has broken down or is illegally parked. Before crossing the line, you must have a clear view of the road ahead and it must be safe. You must also be very sure that you cross safely because the onus is on you to take the risk of danger into account
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/obstruction.gif') }}" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>DIVIDING LINE VS LANE LINE</b> <br />A "Lane" is the space between two lines (or a line and the kerb) painted to divide the road into two or more lines of traffic travelling in the same direction. A "Laned" road therefore has at least 2 Lanes. A road without marked lanes is an "Unlaned" road regardless of its width. A "Multi-lane" Road is a one-way road or a two-way road with 2 or more marked lanes that are on the side of the dividing strip or median strip (road divider) where the driver is driving and for the use of vehicles travelling in the same direction.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/dividevslane.png') }}" alt="Picture is Missing" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>Broken Lane Line</b> <br />When lanes are marked by broken lines the driver may change lanes when it is safe to do so by indicating the intention through proper signal.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/broken_lane_left.gif') }}" alt="Picture is Missing" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>Straddling</b> <br />When driving on a road marked with Lane Lines, you must keep your vehicle entirely within a lane. It is an offence to straddle a line. The red car in the illustration is straddling the lane line.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/straddling.gif') }}" alt="Picture is Missing" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>Solid Lane Line</b> <br />The lanes near intersections are often marked by Solid Lane Lines where no lane changing is permissible. <br>
                                The traffic driving along such lanes bound by solid lines has to move along the same direction or the direction indicated by road marking arrows thus a No-Lane changing zone is created near intersection to prevent last minute change of direction by the traffic, that may obstruct the smooth flow of traffic &amp; cause accidents. Motorists are expected to change lanes while driving in the Lane Change Zone (marked by lanes with broken lines) so that they are in the appropriate line when they enter the No Lane Changing Zone near the intersection. (marked by Solid Lane Lines) . The red car in the illustration is committing an offence.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/solid_lane_line.gif') }}" alt="Picture is Missing" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>EDGE LINES</b> <br />These are continous lines at the edge of the carriageway and mark the limits of the main carriageway upto which a driver can safely venture.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/roadMarking/edge_lines.gif') }}" alt="Picture is Missing" class="ui image" style="width: 5.5em"><img src="{{ asset('/images/roadMarking/parking_prohibited.gif') }}" alt="Picture is Missing" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                </div>
                <!--/ui two column stackable relaxed grid-->
            </div>
            <!--/trafficLights-->

        </div>
        <!--/trafficSignalsBox-->

    </div>
    <!--/roadMarking-->
</div>

@endsection
