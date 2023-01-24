@extends("Layout.Base")
@section("content")
    <style>
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
        <div class="safetyTips contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    {{ $pageHeading }}
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>

            <div class="safetyTipsBox">
                <h3>Essential Driving Safety Tips:</h3>
                <article>
                    <ol>
                        <li>It is mandatory for the two wheeler riders to wear a helmet.<br>
                        </li>
                        <li>Helmet should be light in weight and bright coloured also stick a radium tape at the back of the helmet.
                        </li>
                        <li>Always wear seat-belts because in the event of unfortunate accidents and crash/dash, the head does not hit the steering-wheel. It helps in avoiding fractures of legs.
                        </li>
                        <li><span class="style1">Before going on a Long Journey…</span>
                            <ul>
                                <li>Check engine-oil, coolant, brake-oil. Ensure that the wind-shield wiper is working & filled with water. If not so, get it filled</li>
                                <li>Check all the lights, brakes & tyres</li>
                                <li>Avoid driving from 11.00 pm to 5.00 am as far as possible</li>
                                <li>Always carry with you a spare wheel, wheel spanner, toolkit,torch, spare fuse, fan belt, water can and the manual of the vehicle</li>
                                <li>Always carry first-aid box & eatables. (Fruits, biscuits etc.)</li>
                            </ul>



                        </li>
                        <li>Dont overload because overloaded vehicles are difficult to control while driving and also cause depreciation of the whole vehicle, especially the tyre<br>
                        </li>
                        <li><span class="style1">While leaving your vehicle unattended...</span>
                            <ul>
                                <li>Switch-off the engine</li>
                                <li>Apply hand-brakes</li>
                                <li>Keep the vehicle in gear. Park your vehicle in first gear on a flat road and on the ascent. And on the descent, put the vehicle in reverse gear</li>
                                <li>Park your vehicle at parking place only</li>
                                <li>After parking your vehicle, confirm it is locked properly</li>
                            </ul>
                        </li>
                        <li>Dont drink & Drive<br>
                        </li>
                        <li><span class="style2">ADVICE FOR DRIVERS</span>
                            <ul>
                                <li>It is an offence not to follow the traffic-rules or directives given by the appropriate</li>
                                <li>It is essential to obtain the necessary documents such as
                                    <ul>
                                        <li>Valid Driving-license</li>
                                        <li>Insurance</li>
                                        <li>Registration Certificate</li>
                                        <li>Fitness Certificate etc.</li>
                                        and to carry them while driving the vehicle.
                                    </ul>
                                </li>
                                <li>It is mandatory to produce the driver's-license as and when demanded by a police-officer in uniform.</li>
                                <li>Make sure that the necessary documents you are carrying while driving, such as vehicle - permit ,insurance, tax etc. are legal and valid.</li>
                                <li>While stopping at the signal-crossing intersections,the vehicles should be stopped before the zebra-crossing-stripes</li>
                                <li>In occurrence of an accident, the driver must give the name and address of the owner of the vehicle to the concerned authorities, notwithstanding whether he/she is or not responsible for the accident. Like-wise the affected person/s also must give his/their names and addresses</li>
                                <li>It is dangerous to respond to a driver who is driving rash or behaving arrogantly.</li>
                                <li>Aid the small children,Women, senior citizens, the visually mi-paired and physically challenged pedestrians.</li>
                                <li>Always give priority to ambulance, fire brigade vehicles, or police vehicles having their sirens on.</li>
                                <li>Do not drive or ride a vehicle if you are in dejected, frustrated or disturbed state of mind. It may affect driving and cause accident.</li>
                                <li>Do not use the very bright head-lights while driving at night. It may result in the drivers coming from the opposite direction to lose control over their vehicles.</li>
                                <li>Do not throw a burning cigarettes, empty bottles of cold-drinks or other objects or things from a vehicle in motion. Also do not put any of your organs (Head / hands) out of a vehicle in motion.</li>
                                <li>Use the horn only if it is necessary. No honking is a good manner.</li>
                                <li>Help the accident-victims.</li>
                                <li>You do not have to face any legal procedures if you help the accident-victims</li>
                                <li>In travel, always carry a firstaid box, torch, essential instruments and a telephone book. These may help you a lot in the emergency situation.</li>
                                <li>Always plan your traveling.And do have occasional intervals in the long-drives.</li>
                            </ul>
                        </li>
                    </ol>
                </article>
            </div>
            <!--/safetyTipsBox-->
        </div>
        <!--/safetyTips contentBox-->
    </div>
    <!--/stackable grid-->
@endsection
