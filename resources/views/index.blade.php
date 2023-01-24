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
<x-newspane />
<!--/News Pane-->
@stop
