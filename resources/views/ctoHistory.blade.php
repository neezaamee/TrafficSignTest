@extends("Layout.Base")
@section("content")
<div class="ui stackable grid">
    <div class="ctoHistory contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                {{ $pageHeading }}
            </h1>
        </div>
        <!--/heading-->
        <div class="ui horizontal divider"></div>
        <div class="ctoBox">
            <div class="ui four column stackable relaxed grid">
                @foreach($CTOs as $history)
                <div class="column">
                    <h2 class="ui centered aligned header">
                        <img src="{{ asset('images/cto/'.$history->imgurl) }}" alt="" class="ui circular image" style="width: 5.5em">
                        <br>
                        {{ $history->name }}
                    </h2>
                    <div style="text-align: center;">
                        <?php
                            $appointmentDate = $history->dateappointment;
                            $appointmentDate = new DateTime($appointmentDate);
                            $appointmentDate = $appointmentDate->format('d-m-Y');
                            $transferDate = $history['datetransfer'];
                        ?>
                            @if ($transferDate != null)
                        <?php
                            $spanClr = "black";
                            $transferDate = new DateTime($transferDate);
                            $transferDate = $transferDate->format('d-m-Y'); 
                        ?> 
                          
                            @else
                        <?php
                            $spanClr = "green";
                            $transferDate = "to till date";
                        ?> 
                            @endif
                        <span style="color: {{ $spanClr }}">
                            {{ $appointmentDate }} to {{ $transferDate }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
            <!--/ui three column stackable relaxed grid-->
        </div>
    </div>
    <!--/ctoHistory-->
</div>
@endsection
