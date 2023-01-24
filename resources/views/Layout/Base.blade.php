<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <title>@yield('title')</title> --}}
    <title>
      @section('title')
        {{ $pageHeading ?? "CTPF" }}
      @show
    </title>
    @include('partials.assets')
</head>

<body>
    <script type="text/javascript" src=
"https://translate.google.com/translate_a/element.js?
        cb=googleTranslateElementInit">
    </script> 
    @section('header')
        @include('partials.header')
    @show
    @yield('content')
    
    @section('footer')
      @include('partials.footer')  
    @show
</body>

</html>
