@extends('Layout.Base')
@section("content")
<style>
    @media only screen and (min-width: 768px) {
        .bottom-grid1 {
            width: max-content;
        }

        .bottom-grid2 {
            /*width: max-content;*/
        }
    }

    @media only screen and (max-width: 767px) {
        .bottom-grid1 {
            background: #ffffff;
            background-image: linear-gradient(#249bb9b8, #502d9429);
            width: 100%;
            font-size: 0.88em;
        }

        .bottom-grid2 {
            background: #ffffff;
            background-image: linear-gradient(#249bb9b8, #502d9429);
            width: 100%;
            /*height: 315px;*/
        }
    }

</style>
@parent

<!--News Pane-->
<x-newspane>
    <x-slot name="trafficNews">
        {{ $trafficNews }}
    </x-slot>
</x-newspane>
<!--/News Pane-->

<div class="ui horizontal divider"></div>
<div class="ui horizontal divider"></div>
{{-- Box Section --}}
<x-boxSection />

<div class="ui form piled segment secondary red trafficsigns">
    <div class="ui center aligned basic segment">
        <a href="signTestUr">
            <div class="ui big blue button urdu">
                اردو میں ٹریفک اشاروں کی تیاری
            </div>
        </a>
        <div class="ui horizontal divider">
            Or
        </div>
        <a href="signTestEn">
            <div class="ui big blue button">
                Traffic Signs Preparation in English            
            </div>
        </a>
    </div>
</div> 
@stop
