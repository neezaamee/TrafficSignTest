@extends('Layout.Base')
@section('content')
    
<script>
    function mandatory() {
        var mandatoryDiv = document.getElementById("mandatorySigns");
        var cautionaryDiv = document.getElementById("cautionarySigns");
        var informativeDiv = document.getElementById("informativeSigns");
        var allSignsUrduDiv = document.getElementById("allSignsUrdu");
        if (mandatoryDiv.style.display === "none") {
            mandatoryDiv.style.display = "block";
            cautionaryDiv.style.display = "none";
            informativeDiv.style.display = "none";
            allSignsUrduDiv.style.display = "none";
        }
    }

    function cautionary() {
        var mandatoryDiv = document.getElementById("mandatorySigns");
        var cautionaryDiv = document.getElementById("cautionarySigns");
        var informativeDiv = document.getElementById("informativeSigns");
        var allSignsUrduDiv = document.getElementById("allSignsUrdu");
        if (cautionaryDiv.style.display === "none") {
            cautionaryDiv.style.display = "block";
            mandatoryDiv.style.display = "none";
            informativeDiv.style.display = "none";
            allSignsUrduDiv.style.display = "none";
        }
    }

    function informative() {
        var mandatoryDiv = document.getElementById("mandatorySigns");
        var cautionaryDiv = document.getElementById("cautionarySigns");
        var informativeDiv = document.getElementById("informativeSigns");
        var allSignsUrduDiv = document.getElementById("allSignsUrdu");
        if (informativeDiv.style.display === "none") {
            informativeDiv.style.display = "block";
            mandatoryDiv.style.display = "none";
            cautionaryDiv.style.display = "none";
            allSignsUrduDiv.style.display = "none";
        }
    }

    function urdu() {
        var mandatoryDiv = document.getElementById("mandatorySigns");
        var cautionaryDiv = document.getElementById("cautionarySigns");
        var informativeDiv = document.getElementById("informativeSigns");
        var allSignsUrduDiv = document.getElementById("allSignsUrdu");
        if (allSignsUrduDiv.style.display === "none") {
            allSignsUrduDiv.style.display = "block";
            mandatoryDiv.style.display = "none";
            cautionaryDiv.style.display = "none";
            informativeDiv.style.display = "none";
        }
    }

</script>
<style>
    .trafficSigns {
        margin-top: 20px;
    }
    
    .trafficSigns p {
        color: black;
        text-align: center;
    }
    
    .trafficSigns p b {
        color: darkmagenta;
    }

</style>
<div class="ui stackable grid">
    <div class="trafficSigns contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->
        
        <div class="ui horizontal divider"></div>
        
        <div class="trafficSignsBox">
            <div class="four ui huge small tablet buttons">
                <button class="ui red button" onclick="mandatory();" id="">Mandatory <br>(English)</button>
                <button class="ui yellow button" onclick="cautionary();" id="">Cautionary <br>(English)</button>
                <button class="ui green button" onclick="informative();" id="">Informative <br>(English)</button>
                <button class="ui blue button" onclick="urdu();" id="">All Signs <br>(Urdu)</button>
            </div>
            <div class="ui horizontal divider"></div>
            <div class="mandatorySigns" id="mandatorySigns">
                <h4><span style="color: red;"><b>NOTE:</b></span> Click on the road signs to view the situation where they are installed. </h4>
                <div class="ui two column stackable relaxed grid">
                    <div class="row">
                        <div class="column">
                            <a href="{{ asset('images/trafficSigns/mandatorySigns/stop_sign_situation.jpg') }}" onClick="javascript:void window.open('{{ asset("images/trafficSigns/mandatorySigns/stop_sign_situation.jpg") }}','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="{{ asset('images/trafficSigns/mandatorySigns/stop.gif') }}" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>STOP SIGN</b> <br /> This sign is used on roadways where traffic is required to stop before entering a major road. The vehicle shall proceed past the stop line only after ascertaining that ths will not cause any damage to traffic on the main road.
                            </p>

                        </div>
                        <div class="column">
                            <a href="{{ asset('images/trafficSigns/mandatorySigns/give_way.jpg') }}" onClick="javascript:void window.open('{{ asset("images/trafficSigns/mandatorySigns/give_way.jpg") }}','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="{{ asset('images/trafficSigns/mandatorySigns/give_way.gif') }}" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>GIVE WAY SIGN</b> <br />This sign is used to assign right-of-way to traffic on certain roadways and intersections, the intention being that the vehicles controlled by the sign must give way to the other traffic having the right-of-way.
                            </p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="{{ asset('images/trafficSigns/mandatorySigns/straight_prohibited_sign.jpg') }}" onClick="javascript:void window.open('{{ asset("images/trafficSigns/mandatorySigns/straight_prohibited_sign.jpg") }}','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="{{ asset('images/trafficSigns/mandatorySigns/straight_prohibited_sign.gif') }}" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>STRAIGHT PROHIBITED</b> <br /> OR NO ENTRY These signs are located at places where the vehicles are not allowed to enter. It is generally erected at the end of one-way-road to prohibit traffic entering the roadway in the wrong direction and also at each intersection along the one-way road.
                            </p>

                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/vehicles_prohibited.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/vehicles_prohibited.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/vehicles_prohibited.gif" alt="" class="ui circular image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>VEHICLES RROHIBITED IN BOTH DIRECTIONS</b> <br />This sign is used at the approact end of the roads where entry to all types of vehicular traffic is prohibited, especially in areas which have been designed as pedestrian malls.
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/cycle_prohibted.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/cycle_prohibted.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/cycles_prhibited.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                
                                <b>CYCLE PROHIBITED</b> <br /> This sign is erected on each enry to the road where cycles are to be prohibited.
                            </p>

                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/pedestrian_prohibited.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/pedestrian_prohibited.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/pedestrian_prohibited.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>PEDESTRIAN PROHIBITED</b> <br />This sign is erected on each enry to the road where pedestrians are to be prohibited.
                            </p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/lright_turn_prohibited_sign.situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/lright_turn_prohibited_sign.situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/right_turn_prohibited.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>RIGHT TURN PROHIBITED</b> <br /> These signs are used at places where vehicles are not allowed to make a turn to the right. The signs are also used at the inter-sections of one-way street to supplement the one-way sign.
                            </p>

                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/left_turn_prohibited_sign.situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/left_turn_prohibited_sign.situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/left_turn_prohibited.gif" alt="" class="ui circular image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>LEFT TURN PROHIBITED</b> <br />These signs are used at places where vehicles are not allowed to make a turn to left. The signs are also used at the inter-sections of one-way street to supplement the one-way sign.
                            </p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/U_turn_prohibited.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/U_turn_prohibited.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/u_turn_prohibited.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>U-TURN PROHIBITED</b> <br />This sign is used at places where vehicles are forbidden to make a turn to the reverse direction of travel between the sign and the next inter-section beyond it.
                            </p>
                            
                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/overtaking_prohibited.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/overtaking_prohibited.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/overtaking_prohibited.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>OVERTAKING PROHIBITED</b> <br />This sign is erected at the beginning of such sections of highways where sight distance is restricted and overtaking will be dangerous.
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/all_motor_vehicles_prohibit.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/all_motor_vehicles_prohibit.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/all_motor_vehicles_prohibit.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>ALL MOTOR VEHICLES PROHIBITED</b> <br />This sign is used at places where entry to all types of motor vehicles is prohibited.
                            </p>

                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/trucks_prohibited.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/trucks_prohibited.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/truck_prohibited.gif" alt="" class="ui circular image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>TRUCKS PROHIBITED</b> <br />This sign is used at the entrance to the road where movement of trucks is prohibited.
                            </p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/hand_cart_prohibited.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/hand_cart_prohibited.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/hand_carts_prohibited.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>HAND CART PROHIBITED</b> <br />This sign is erected on each entry to the road where hand carts are to be prohibited.
                            </p>

                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/tonga_prohibited.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/tonga_prohibited.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/tongas_prohibited.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>TONGA PROHIBITED</b> <br />This sign is erected on each entry to the road where tongas are to be prohibited.
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/no_parking.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/no_parking.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/no_parking.gif" alt="" class="ui circular image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>NO PARKING</b> <br /> This sign is erected where parking is not allowed but vehicles can stop for short duration to allow passengers to get into or get out of the vehicle. The sign should be accompanied by suitable kerb or carriageway markings
                            </p>

                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/no_parking_no_stopping.jpgg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/no_parking_no_stopping.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/no_stopping_or_standing.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>NO PARKING OR STANDING</b> <br />This sign is erected where vehicles are prohibited to stop even temporarily
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/speed_limit_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/speed_limit_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/speed_limit.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>SPEED LIMIT</b> <br />This sign is erected at the beginning of the section of the road or area covered by a speed restriction, with numerals indicating the speed limit in kilometers per hour.
                            </p>

                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/width_limit.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/width_limit.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/width_limit.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>WIDTH LIMIT</b> <br />This sign is used where entry of vehicles exceeding a particular width is prohibited.
                            </p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/height_limit.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/height_limit.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/height_limit.gif" alt="" class="ui circular image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>HEIGHT LIMIT</b> <br /> This sign is erected in advance of an overhead structure where entry is prohibited for vehicles whose height exceeds a certain limit.
                            </p>
                            
                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/length_limit.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/length_limit.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/length_limit.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                
                                <b>LENGTH LIMIT</b> <br />This sign is used where entry of vehicles exceeding a particular length is prohibited.
                            </p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/axle_load_limit.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/axle_load_limit.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/load_limit.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                
                                <b>LOAD LIMIT</b> <br />This sign is used where entry of vehicles is prohibited for vehicles whose laden weight exceeds a certain limits.
                            </p>

                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/axle_load_limit.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/mandatorySigns/axle_load_limit.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/mandatorySigns/axle_load_limit.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>AXLE LOAD LIMIT</b> <br />This sign is used where entry of vehicles is prohibited for vehicles whose axle load exceeds a certain limits.
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ui two column stackable relaxed grid-->
            </div>
            <!--/mandatorySigns-->
            <div class="cautionarySigns" id="cautionarySigns" style="display: none;">
                <h4><span style="color: red;"><b>NOTE:</b></span> Click on the road signs to view the situation where they are installed. </h4>
                <div class="ui two column stackable relaxed grid">
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/right_hair_pin_bend_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/right_hair_pin_bend_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/right_hair_pin_bend.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>RIGHT/LEFT HAIR PIN BEND</b> <br />  This sign is used where the change in direction is so considerable that it amounts to reversal of direction. The symbol bends to right or left depending upon the road alignment.
                            </p>
                            
                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/left_hair_pin_bend_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/left_hair_pin_bend_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/left_hair_pin_bend.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>RIGHT/LEFT HAIR PIN BEND</b> <br />  This sign is used where the change in direction is so considerable that it amounts to reversal of direction. The symbol bends to right or left depending upon the road alignment.
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/right_hand_curve_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/right_hand_curve_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/right_hand_curve.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>RIGHT/LEFT HAND CURVE</b> <br />  This sign is used where the direction of alignment changes. The sign forewarns the driver to reduce the speed and proceed cautiously along the road.
                            </p>

                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/left_hand_curve_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/left_hand_curve_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/left_hand_curve.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>RIGHT/LEFT HAND CURVE</b> <br />  This sign is used where the direction of alignment changes. The sign forewarns the driver to reduce the speed and proceed cautiously along the road.
                            </p>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/right_reverse_bend_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/right_reverse_bend_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/right_reverse_bend.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>RIGHT/LEFT REVERSE BEND</b> <br />  This sign is used where the nature of the reverse bend is not obvious to approaching traffic and constitutes a hazard. If the first curve is to the right, a right reverse bend shall be used. If the first curve is to the left, a left reverse bend is used.
                            </p>
                            
                        </div>
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/left_reverse_bend_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/left_reverse_bend_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/left_reverse_bend.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>RIGHT/LEFT REVERSE BEND</b> <br />  This sign is used where the nature of the reverse bend is not obvious to approaching traffic and constitutes a hazard. If the first curve is to the right, a right reverse bend shall be used. If the first curve is to the left, a left reverse bend is used.
                            </p>

                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/narrow_bridge_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/narrow_bridge_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/narrow_bridge.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>NARROW BRIDGE</b> <br />  This sign is erected on roads in advance of bridges where the clear width between the kerbs or wheel guards is less than normal width of carriageway.
                            </p>

                        </div>
                        <div class="column">
                            <a href="">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/gap_in_median.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>GAP IN MEDIAN</b> <br />  This gap is installed ahead of a gap in the median of a divided carriageway, other than an intersection.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/narrow_road_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/narrow_road_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/narrow_road.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                
                                <b>NARROW ROAD</b> <br />  This sign is normally found in rural areas where a sudden reduction in width of pavement causes a danger to traffic.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/road_widens_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/road_widens_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/road_widens.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>ROAD WIDENS</b> <br />  This sign is normally found in rural areas where a sudden widening of road causes a danger to traffic, such as, a two-lane road suddenly widening to a dual carriageway.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/cycle_crossing_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/cycle_crossing_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/cycle_crossing.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>CYCLE CROSSINGD</b> <br />This sign is erected in advance of all uncontrolled cycle crossings.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/pedestrian_crossing.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/pedestrian_crossing.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/pedestrian_crossing.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>PEDESTRIAN CROSSING</b> <br />A Pedestrian Crossing Sign is a helpful tool to help inforce traffic regulation and to increase pedestrian safety at crosswalks.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/school_ahead_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/school_ahead_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/school_ahead.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">

                                <b>SCHOOL</b> <br />This sign is erected where school buildings or grounds are adjacent to the road where the traffic creates a hazard to children.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/men_at_work_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/men_at_work_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/men_at_work.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>MEN AT WORK</b> <br />This sign is displayed only when men and machines are working on the road or adjacent to it or on overhead lines or poles. This sign is removed when the work is completed.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/side_road_left_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/side_road_left_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/side_road_left.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                
                                <b>SIDE ROAD LEFT/RIGHT</b> <br />This sign is displayed in advance of the side road intersections where a large volume of entering traffic together with restricted sight distance is likely to constitute a hazard. The driver is warned of the existence of a junction.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/side_road_right_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/side_road_right_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/side_road_right.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>SIDE ROAD LEFT/RIGHT</b> <br />This sign is displayed in advance of the side road intersections where a large volume of entering traffic together with restricted sight distance is likely to constitute a hazard. The driver is warned of the existence of a junction.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/y_intersection01_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/y_intersection01_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/y_intersection01.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>Y-INTERSECTION</b> <br />These signs are displayed on the approach to a bifurcation of any road. This sign warns of the existence of a junction and no other indication is given.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/y_intersection02_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/y_intersection02_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/y_intersection02.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>Y-INTERSECTION</b> <br />These signs are displayed on the approach to a bifurcation of any road. This sign warns of the existence of a junction and no other indication is given.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/major_road_ahead01_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/major_road_ahead01_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/major_road_ahead01.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>MAJOR ROAD</b> <br />These signs are displayed in advance of crossing with the major road, where a sufficiently large volume of traffic together with a sufficiently large volume of traffic together with restricted sight is likely to cause a hazard.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/major_road_ahead_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/major_road_ahead_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/major_road_ahead.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>MAJOR ROAD</b> <br />These signs are displayed in advance of crossing with the major road, where a sufficiently large volume of traffic together with a sufficiently large volume of traffic together with restricted sight is likely to cause a hazard.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/staggered_intersection_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/staggered_intersection_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/staggered_intersection.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>STAGGERED INTERSECTION</b> <br />This sign is used to indicate junctions where the distance between two junctions is not more than 60 meters.
                            </p>
                            
                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/staggered_intersection01_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/staggered_intersection01_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/staggered_intersection01.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>STAGGERED INTERSECTION</b> <br />This sign is used to indicate junctions where the distance between two junctions is not more than 60 meters.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/t-intersection_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/t-intersection_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/t-intersection.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>T INTERSECTION</b> <br />This sign is displayed in advance of T-junctions where the nature of inter-section is not obvious to approaching traffic. This sign is used to warn the driver of the existence of a junction.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/round_about_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/round_about_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/round_about.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>ROUNDABOUT</b> <br />This sign is used where it is necessary to indicate the approach to a roundabout.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/start_of_dual_carriageway_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/start_of_dual_carriageway_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/start_of_dual_carriageway.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>START OF DUAL CARRIAGEWAY</b> <br />This sign is displayed when a single carriageway ends into a dual carriageway.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/end_of_dual_carriageway_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/end_of_dual_carriageway_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/end_of_dual_carriageway.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>END OF DUAL CARRIAGEWAY</b> <br />This sign is displayed when a dual carriageway is ending and a single carriageway is starting.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/reduced_carriageway_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/reduced_carriageway_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/reduced_carriageway.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>REDUCED CARRIAGEWAY</b> <br />These signs caution the driver of the reduction in the width of the carriageway ahead. This is displayed on undivided carriageways when some portion of the carriageway is closed or reduced for repairs.
                            </p>
                            
                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/reduced_carriageway1_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/reduced_carriageway1_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/reduced_carriageway1.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>REDUCED CARRIAGEWAY</b> <br />These signs caution the driver of the reduction in the width of the carriageway ahead. This is displayed on undivided carriageways when some portion of the carriageway is closed or reduced for repairs.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/two_way_traffic_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/two_way_traffic_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/two_way_traffic.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>TWO WAY OPERATION</b> <br />This sign is used to caution the driver of a changed pattern of traffic operation of the carriageway expected to carry traffic in one direction only.
                            </p>
                            
                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/cross_road_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/cross_road_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/cross_road.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>CROSS ROAD</b> <br />This sign is displayed in advance of the cross road where a sufficiently large volume of crossing or entering traffic with restricted sight distance is likely to constitute a hazard.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/cattle_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/cattle_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/cattle.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>CATTLE</b> <br />This sign is used where there is danger due to farm animals or cattle crossing on the road.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/diversion-to-the-other-carr_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/diversion-to-the-other-carr_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/diversion-to-the-other-carr.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>TRAFFIC DIVERSION ON DUAL CARRIAGEWAY</b> <br />This sign warns the driver of the diversion of traffic from one carriageway to the other. It is used on dual carriageway when one carriageway is closed.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/falling_rocks_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/falling_rocks_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/falling_rocks.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>FALLING ROCKS</b> <br />This sign is used wherever rocks are liable to fall on the road seasonally or throughout the year. The symbol may be reversed to show the side from which rockfall is expected.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/ferry_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/ferry_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/ferry.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>FERRY</b> <br />This sign is used to warn the drivers about the existance of a ferry crossing across a river.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/lane-closed_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/lane-closed_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/lane-closed.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>FALLING ROCKS</b> <br />This sign is used wherever rocks are liable to fall on the road seasonally or throughout the year. The symbol may be reversed to show the side from which rockfall is expected.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/lane-closed-three-lane-road_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/lane-closed-three-lane-road_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/lane-closed-three-lane-road.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>LANE CLOSURE</b> <br />This sign cautions the driver of the closure of a portion of the carriageway on multi-lane highways.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/barrier_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/barrier_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/barrier.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>BARRIER</b> <br />This sign is erected in advance of a gate controlling entry into a road. A definition plate with words "SLOW BARRIER AHEAD" or "TOLL BARRIER AHEAD" is also displayed on the sign.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/Loose_gravel_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/Loose_gravel_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/Loose_gravel.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>LOOSE GRAVEL</b> <br />This sign is used on section of a road on which gravel may be thrown up by fast moving vehicles.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/overhead-cable_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/overhead-cable_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/overhead-cable.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>OVERHEAD CABLE</b> <br />This sign cautions driver of the presence of overhead power transmission lines.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/quayside-or-river-bank_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/quayside-or-river-bank_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/quayside-or-river-bank.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>QUARY SIDE OR RIVER BANK</b> <br />This sign is used to caution the driver of the presence of water by the side of the road and the impending danger.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/series-of-bends_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/series-of-bends_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/series-of-bends.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>SERIES OF BENDS</b> <br />This sign is used to installed to caution the driver of the presence of zig-zag for a long distance over the section of road ahead.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/slippery_road_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/slippery_road_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/slippery_road.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>SLIPPERY ROAD</b> <br />This sign is used to warn that the section of the road ahead may be particularly slippery.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/steep-ascent_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/steep-ascent_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/steep-ascent.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>STEEP ASCENT/STEEP DESCENT</b> <br />This sign is displayed before a steep upgrade/downgrade that may constitute a hazard to traffic. A gradient of 10 per cent and above is considered steep gradient.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/steep-descent_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/steep-descent_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/steep-descent.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>STEEP ASCENT/STEEP DESCENT</b> <br />This sign is displayed before a steep upgrade/downgrade that may constitute a hazard to traffic. A gradient of 10 per cent and above is considered steep gradient.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/dangerous_dip_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/dangerous_dip_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/dangerous_dip.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>DANGEROUS DIP</b> <br />This sign is used where a sharp dip in the profile of the road or a causeway is likely to cause considerable discomfort to traffic.
                            </p>

                        </div>
                        <div class="column">
                            <a href="images/images/trafficSigns/cautionarySigns/speed_braker_sign_situation.jpg" onClick="javascript:void window.open('<?= base_url();?>/public/images/trafficSigns/cautionarySigns/speed_braker_sign_situation.jpg','1415690218720','width=640,height=450,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">
                                <h2 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/cautionarySigns/speed_braker.gif" alt="" class="ui image" style="width: 5.5em">
                                </h2>
                            </a>
                            <p style="text-align: center;">
                                <b>SPEED BREAKER</b> <br />This sign warns the drivers of the presence of a speed breaker.
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ui two column stackable relaxed grid-->
            </div>
            <!--/cautionarySigns-->
            <div class="informativeSigns" id="informativeSigns" style="display: none;">
                <div class="ui two column stackable relaxed grid">
                    
                    <div class="row">
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/informatorySigns/8.gif" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/informatorySigns/9.gif" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/informatorySigns/11.jpg" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/informatorySigns/12.jpg" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/informatorySigns/13.jpg" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/informatorySigns/14.jpg" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/informatorySigns/15.jpg" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                        <div class="column">
                            <h1 class="ui centered aligned header"><img src="<?= base_url(); ?>/public/images/trafficSigns/informatorySigns/16.jpg" alt="" class="ui image" style="width: 5.5em">
                            </h1>
                        </div>
                    </div>
                </div>
                <!--/ui two column stackable relaxed grid-->
            </div>
            <!--/informativeSigns-->

            <div class="allSignsUrdu" id="allSignsUrdu" style="display: none;">
                <div class="ui two column stackable relaxed grid">
                    <div class="row">
                        <div class="column">
                            <img src="<?= base_url(); ?>/public/images/trafficSigns/AllSignsUrdu/mandatorySignsAll.jpg" class="ui image" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="<?= base_url(); ?>/public/images/trafficSigns/AllSignsUrdu/warningSignsAll.jpg" class="ui image" alt="">
                        </div>

                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="<?= base_url(); ?>/public/images/trafficSigns/AllSignsUrdu/informativeSignsAll.jpg" class="ui image" alt="">
                        </div>

                    </div>
                </div>
                <!--/ui two column stackable relaxed grid-->
            </div>
            <!--/allSignsUrdu-->
        </div>
    </div>
    <!--/trafficSigns-->
</div>
<script>
    $(document).ready(function() {
        if ($(window).width() < 768) {
            $(".four").addClass("four ui small buttons");
        }
    });
    
</script>

@endsection