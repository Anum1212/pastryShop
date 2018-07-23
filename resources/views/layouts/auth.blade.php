<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PastryShop</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signInUp/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signInUp/largeDisplay.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signInUp/smallDisplay.css') }}" rel="stylesheet">
</head>
@section('head')    
@show

@section('style')
@show

<body>
    @section('body')
    @show
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @section('script')
    @show

</body>
</html>