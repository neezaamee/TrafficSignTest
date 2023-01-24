@extends('Layout.Base')
@section('content')
<script>
    function mandatory() {
        var mandatoryDiv = document.getElementById("mandatorySigns");
        var cautionaryDiv = document.getElementById("cautionarySigns");
        var informativeDiv = document.getElementById("informativeSigns");
        if (mandatoryDiv.style.display === "none") {
            mandatoryDiv.style.display = "block";
            cautionaryDiv.style.display = "none";
            informativeDiv.style.display = "none";
        }
    }

    function cautionary() {
        var mandatoryDiv = document.getElementById("mandatorySigns");
        var cautionaryDiv = document.getElementById("cautionarySigns");
        var informativeDiv = document.getElementById("informativeSigns");
        if (cautionaryDiv.style.display === "none") {
            cautionaryDiv.style.display = "block";
            mandatoryDiv.style.display = "none";
            informativeDiv.style.display = "none";
        }
    }

    function informative() {
        var mandatoryDiv = document.getElementById("mandatorySigns");
        var cautionaryDiv = document.getElementById("cautionarySigns");
        var informativeDiv = document.getElementById("informativeSigns");
        if (informativeDiv.style.display === "none") {
            informativeDiv.style.display = "block";
            mandatoryDiv.style.display = "none";
            cautionaryDiv.style.display = "none";
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

    .testPreprationImg {
        width: 730px;

    }


    @media only screen and (max-width: 780px) {
        .testPreprationImg {
            width: 98%;
        }
    }

    .cautionarySigns table td {
        padding: 15px;
        border: 1px solid
    }

    .mandatorySigns table td {
        padding: 15px;
        border: 1px solid
    }

    .informativeSigns table td {
        padding: 15px;
        border: 1px solid
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
            <div class="three ui buttons" id="uiButton">
                <button class="ui red button" onclick="mandatory();" id="">Mandatory</button>
                <button class="ui yellow button" onclick="cautionary();" id="">Cautionary</button>
                <button class="ui green button" onclick="informative();" id="">Informative</button>
            </div>
            <div class="ui horizontal divider"></div>
            <div class="mandatorySigns" id="mandatorySigns">
                <div class="ui stackable relaxed grid">
                    <div class="column">
                        <center>
                        <h4><span style="color: red;"><b>NOTE:</b></span> Ans Key is at bottom of the page. Click <a href="#anskeymandatory">Here</a> for answer key. </h4>
                        @for($i = 1; $i < 16; $i++)                        
                            <h1>Question: {{ $i }}</h1>
                            <img data-u="image" class="testPreprationImg" src="{{ asset('testPrepration/mandatory/'.$i.'.jpg') }}" />
                        
                        @endfor
                            <h1 style="margin-top:100px">ANSWERS KEY:</h1>
                            <table style="border:1px solid" class="testPreprationTable" id="anskeymandatory">
                                <tbody>
                                    <tr style="background: #00b5ad;">
                                        <td>Qestion #</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                    </tr>
                                    <tr style="background: #00bcd4;">
                                        <td>Ans</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </center>
                    </div>
                </div>
                <!--/ui stackable relaxed grid-->
            </div>
            <!--/mandatorySigns-->
            <div class="cautionarySigns" id="cautionarySigns" style="display: none;">
                <div class="ui stackable relaxed grid">
                    <div class="column">
                        <center>
                            
                            <h4><span style="color: red;"><b>NOTE:</b></span> Ans Key is at bottom of the page. Click <a href="#anskeycautionary">Here</a> for answer key. </h4>
                            @for($i = 1; $i < 16; $i++)                        
                            <h1>Question: {{ $i }}</h1>
                            <img data-u="image" class="testPreprationImg" src="{{ asset('testPrepration/cautionary/'.$i.'.jpg') }}" />
                            @endfor 
                            <h1 style="margin-top:100px">ANSWERS KEY:</h1>
                            <table style="border:1px solid" class="testPreprationTable" id="anskeycautionary">
                                <tr style="background: #00b5ad;">
                                    <td>Qestion #</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                </tr>
                                <tr style="background: #00bcd4;">
                                    <td>Ans</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
                <!--/ui stackable relaxed grid-->
            </div>
            <!--/cautionarySigns-->
            <div class="informativeSigns" id="informativeSigns" style="display: none;">

                <div class="ui stackable relaxed grid">
                    <div class="column">
                        <center>
                            <h4><span style="color: red;"><b>NOTE:</b></span> Ans Key is at bottom of the page. Click <a href="#anskeyinformative">Here</a> for answer key. </h4>
                            @for($i = 1; $i < 16; $i++)                        
                            <h1>Question: {{ $i }}</h1>
                            <img data-u="image" class="testPreprationImg" src="{{ asset('testPrepration/informative/'.$i.'.jpg') }}" />
                        
                            @endfor
                            <h1 style="margin-top:100px">ANSWERS KEY:</h1>
                            <table style="border:1px solid" class="testPreprationTable" id="anskeyinformative">
                                <tr style="background: #00b5ad;">
                                    <td>Qestion #</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                </tr>
                                <tr style="background: #00bcd4;">
                                    <td>Ans</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>4</td>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
                <!--/ui stackable relaxed grid-->
            </div>
            <!--/informativeSigns-->
        </div>
    </div>
    <!--/trafficSigns-->
</div>

@endsection