<!DOCTYPE html>
<html lang="en">
  <head>
    @section('head')
    <meta charset="UTF-8">
    {{-- <title>@yield('title')</title> --}}
    <title>
      @section('title')
        {{ $pageHeading ?? "Traffic Signs" }}
      @show
    </title>
    @include('partials.assets')
    @show
</head>

<body>
  <div class="main">
    @section('header')
      @include('partials.header')
    @show
    <div class="ui horizontal divider"></div>
    
    @yield('content')
    
    <div class="ui horizontal divider"></div>
    @section('footer')
    @include('partials.footer')  
    @show
  </div> 
</body>

</html>
