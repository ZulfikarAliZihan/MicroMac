<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MicroMac Job Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
    
    
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script defer src="{{asset('js/script.js')}}"></script>
    <script defer src="{{asset('js/script_model.js')}}"></script>
    <script defer src="{{asset('js/script_item.js')}}"></script>
</head>
<body>


<div class="wrapper">
    {{-- navigation-bar --}}
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')

</div>


@include('partials.scripts')
</body>
</html>