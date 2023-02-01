@extends('Layout.Base')
@section('content')
    <div class="ui fluid container">
        <div class="aboutFaisalabad contentBox">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    <?= $data['pageHeading'] ?>
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>
            <div class="testBox">
                <div class="ui padded stackable relaxed grid" style="margin: 0%">
                    
                    <div class="row">
                        <div class="sixteen wide column">
                            <div class="ui raised tall stacked center aligned segment">                            
                                <h1 class="ui black attached segment centered aligned header"> {{ $data['qNum'] }} سوال نمبر</h1>
                            @isset($data['qImg'])
                                <div class="qImg">
                                <h2 class="ui attached header">
                                    <img src="{{ asset('img/'.$data['qImg'].'') }}" alt="Question Image" class="ui image"
                                        style="width: 5.5em">
                                </h2>
                            </div>
                            @endisset
                            <div class="qText">
                                <h1 class="ui attached header">{{ $data['qTxt'] }}</h1>
                            </div>
                            </div>
                        </div>
                        {{-- <div class="twelve wide column">
                        <div class="qText">
                            <h1 class="ui brown raised segment left aligned header" style="height: 5.5em">What does the traffic sign in the picture mean?</h1>
                        </div>
                    </div> --}}
                    </div>
                    <div class="row">
                            <div class="four wide column">
                                <div class="optDiv">
                                    <h2 class="ui purple raised segment centered aligned huge header">
                                        <img src="{{ asset('img/trafficsigns.png') }}" alt="" class="ui image"
                                            style="width: 5.5em">
                                    </h2>
                                    <h3 class="ui attached segment center aligned header">Opt 1</h3>
                                </div>
                            </div>
                            <div class="four wide column">
                                <div class="optDiv">
                                    <h2 class="ui violet raised segment centered aligned huge header">
                                        <img src="{{ asset('img/trafficsigns.png') }}" alt="" class="ui image"
                                            style="width: 5.5em">
                                        <h3 class="ui attached raised segment center aligned header">Opt 2</h3>
                                    </h2>
                                </div>
                            </div>
                            <div class="four wide column">
                                <div class="optDiv">
                                    <h2 class="ui orange raised segment centered aligned huge header">
                                        <img src="{{ asset('img/trafficsigns.png') }}" alt="" class="ui image"
                                        style="width: 5.5em">
                                        <h3 class="ui attached raised segment center aligned header">Opt 3</h3>
                                    </h2>
                                </div>
                            </div>
                            <div class="four wide column">
                                <div class="optDiv">
                                    <h2 class="ui pink raised segment centered aligned huge header">
                                        <img src="{{ asset('img/trafficsigns.png') }}" alt="" class="ui image"
                                        style="width: 5.5em">
                                        <h3 class="ui attached raised segment center aligned header">Opt 4</h3>
                                    </h2>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="column center aligned">
                            <span>
                                <button class="ui huge button center aligned black">Next</button>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            <!--/ aboutFsdBox-->
        </div>
        <!--/contenBox-->
    </div>
@endsection
