<link rel="stylesheet" href="{{ asset('/style.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.css') }}">
<link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans') }}" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ asset('/css/responsiveslides.css') }}">
<script type="text/javascript" src="{{ asset('/js/jquery-1.9.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jssor.core.js') }}"></script>
<script type="text/javascript" src="{{asset('/js/jssor.utils.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jssor.slider.js') }}"></script>
<script src="{{ url('https://www.google.com/recaptcha/api.js') }}" async defer></script>
<script src="{{ asset('/js/responsiveslides.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/menu-script.js') }}"></script>
<!-- Main Slideshow Script-->
<script type="text/javascript" src="{{ asset('/js/jquery.sooperfish.js') }}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.2/dist/semantic.min.js"></script>
<!--favicon-->
<link rel="apple-touch-icon" type="image/png" sizes="57x57" href="{{ asset('/favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" type="image/png" sizes="60x60" href="{{ asset('/favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" type="image/png" sizes="72x72" href="{{ asset('/favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" type="image/png" sizes="76x76" href="{{ asset('/favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" type="image/png" sizes="114x114" href="{{ asset('/favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" type="image/png" sizes="120x120" href="{{ asset('/favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" type="image/png" sizes="144x144" href="{{ asset('/favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" type="image/png" sizes="152x152" href="{{ asset('/favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="{{ asset('/favicon/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/favicon/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('/favicon/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<style>
    .blinking {
        animation: blinkingText 1.2s infinite;
        color: white;
    }

    @keyframes blinkingText {
        0% {
            color: yellow;
        }

        49% {
            color: yellow;
        }

        60% {
            color: transparent;
        }

        99% {
            color: transparent;
        }

        100% {
            color: yellow;
        }
    }

</style>
<div id="google_translate_element"></div> 
      
    <script type="text/javascript"> 
        function googleTranslateElementInit() { 
            new google.translate.TranslateElement(
                {pageLanguage: 'en'}, 
                'google_translate_element'
            ); 
        } 
    </script>