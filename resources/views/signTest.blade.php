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

                    @php($qNum = 1)
                    @foreach ($Questions as $Q)
                        <div class="row">
                            <div class="sixteen wide column">
                                <div class="ui raised tall stacked center aligned segment">
                                    <h1 class="ui black attached segment centered aligned header">
                                        {{ $data['qHeading'] }}
                                        {{ $qNum }}
                                    </h1>
                                    @isset($Q->qimg)
                                        <div class="qImg">
                                            <h2 class="ui attached header">
                                                <img src="{{ asset('img/' . $Q->qimg) }}" alt="Question Image" class="ui image"
                                                    style="width: 5.5em">
                                            </h2>
                                        </div>
                                    @endisset
                                    <div class="qText">
                                        <h1 class="ui attached header">{{ $Q->qtxt }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @isset($Answers)
                                @php($i = 1)
                                @foreach ($Answers as $A)
                                    <div class="four wide column">
                                        <div class="ui black raised stacked center aligned segment">
                                            <div class="ansDiv">
                                                <h2 class="ui header">
                                                    <img src="{{ asset('images/footerSlider/' . $A->aimg) }}" alt="ansImg"
                                                        class="ui image" style="width: 5.5em">
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
                        @php($qNum++)
                    @endforeach
                </div>

            </div>
            <!--/ aboutFsdBox-->
        </div>
        <!--/contenBox-->
    </div>
@endsection
