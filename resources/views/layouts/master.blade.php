<!DOCTYPE html>
<html lang="en">
    <head>


        <meta name="_token" content="{{ csrf_token() }}">

        <title>Advertisements</title>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}" media="screen">	
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.bxslider.css')}}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css')}}" media="screen">	
        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css')}}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css')}}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ticker-style.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" media="screen">



        <!-- CSS Part End-->


    </head>
    <body class="boxed">

        <div id="container">
            @include('layouts.header')
            @yield('content')

            @include('layouts.footer')
        </div>
    </body>


</html>