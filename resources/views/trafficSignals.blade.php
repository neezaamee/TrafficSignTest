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
    .trafficSigns {
        margin-top: 20px;
    }

    .trafficSignals p {
        color: black;
    }

    .trafficSignalsBox p b {
        color: darkmagenta;
    }

    .handSignals h3 {
        color: black;
        text-align: center;
    }

</style>
@endsection
@section('content')
<div class="ui stackable grid">
    <div class="trafficSigns contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                Traffic Signs
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="trafficSignalsBox">
            <div class="two ui huge buttons">
                <button class="ui red button" onclick="trafficLights();" id="">Traffic Lights</button>
                <button class="ui green button" onclick="handSignals();" id="">Manual Signals</button>
            </div>
            <!--/ two ui huge buttons-->

            <div class="ui horizontal divider"></div>

            <div class="trafficLights" id="trafficLights">
                <div class="ui two column stackable relaxed grid">
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>STOP</b> <br />Stop well before the stop line, and don’t crowd the intersection. This not only obstructs a clear view of the intersection for other road users, but also make the zebra crossing unsafe for the pedestrians. You are allowed to turn left at the red signal unless there is a sign specifically forbidding you to do so. When turning, yield the right of way to pedestrians and vehicles from other directions.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/Lights/red-light-signal.jpg') }}" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>BE ALERT</b> <br />The Amber light gives time to vehicles to clear the road when the signal is changing from green to red. If caught in the Amber signal in the middle of a large road crossing do not press your accelerator in panic but do continue with care.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/Lights/yellow-light-signal.jpg') }}" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>GO</b> <br />If first in line, do not go tearing off at the green signal but pause to see whether vehicles from other directions have cleared the road.
                                Sometimes you are allowed to turn left or right too, unless separate signs exist for each direction. if turning, yield the right of way to pedestrians and vehicles from other directions.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/Lights/traffic-light-green1.jpg') }}" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>STEADY GREEN ARROW SIGNAL</b> <br />Proceed with caution in the direction indicated by the arrows. Remember that you must yield to all pedestrians and vehicles already in the intersection.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/Lights/green-arrow-signal.jpg') }}" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>FLASHING RED SIGNAL</b> <br />You must come to a complete stop, yield to all other traffic and to pedestrians. Proceed only when the way is clear.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/Lights/red-blinker.jpg') }}" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve wide column">
                            <p>
                                <b>FLASHING AMBER SIGNAL</b> <br />You should slow down and proceed with caution.
                            </p>
                        </div>
                        <div class="four wide column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/Lights/yellow-traffic-light.jpg') }}" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                </div>
                <!--/ui two column stackable relaxed grid-->
            </div>
            <!--/trafficLights-->
            <div class="handSignals" id="handSignals" style="display: none;">
                <div class="ui two column stackable relaxed grid">
                    <div class="row">
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/handSignals/1.jpg') }}" alt="" class="ui image" style="width: 5.5em; height: 8.5em;">
                            </h1>
                            <h3>Vehicles approaching from behind must stop.</h3>
                        </div>
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/handSignals/2.jpg') }}" alt="" class="ui image" style="width: 5.5em; height: 8.5em;">
                            </h1>
                            <h3>Vehicles approaching from right must stop.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/handSignals/3.jpg') }}" alt="" class="ui image" style="width: 5.5em; height: 8.5em;">
                            </h1>
                            <h3>Vehicles approaching from left must stop.</h3>
                        </div>
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/handSignals/4.jpg') }}" alt="" class="ui image" style="width: 5.5em; height: 8.5em;">
                            </h1>
                            <h3>Vehicles approaching from front must stop.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/handSignals/5.jpg') }}" alt="" class="ui image" style="width: 5.5em; height: 8.5em;">
                            </h1>
                            <h3>Vehicles approaching from left & right must stop.</h3>
                        </div>
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="{{ asset('/images/trafficSignals/handSignals/6.jpg') }}" alt="" class="ui image" style="width: 5.5em; height: 8.5em;">
                            </h1>
                            <h3>Vehicles approaching from front & behind must stop.</h3>
                        </div>
                    </div>
                </div>
                <!--/ui two column stackable relaxed grid-->
            </div>
            <!--/handSignals-->
        </div>
        <!--/trafficSignalsBox-->

    </div>
    <!--/trafficSigns-->
</div>
@endsection
