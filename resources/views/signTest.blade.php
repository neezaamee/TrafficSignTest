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
                                <h1 class="ui black attached segment centered aligned header"> {{ $data['qNum'] }} سوال نمبر
                                </h1>
                                @isset($data['qImg'])
                                    <div class="qImg">
                                        <h2 class="ui attached header">
                                            <img src="{{ asset('img/' . $data['qImg'] . '') }}" alt="Question Image"
                                                class="ui image" style="width: 5.5em">
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
                        
                            @isset($ansz)
                                @php($i=1)
                                    @foreach ($ansz as $a )
                                <div class="four wide column"> 
                                        <div class="ui black raised stacked center aligned segment">
                                            <div class="ansDiv">
                                                <h2 class="ui header">
                                                    <input type="radio" name="ans" value="opt1" id="radio1">
                                                    <img src="{{ asset('images/footerSlider/'.$a.'.JPG') }}" alt="ansImg" class="ui image"
                                                        style="width: 5.5em">
                                                </h2>
                                            </div>
                                            <h3 class="ui header">Opt {{ $i }}</h3>
                                        </div>
                                    
                                </div>
                                        @php($i++)
                                    @endforeach
                                @else
                                {{ 'hello world' }}
                            @endisset                        
                        
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
