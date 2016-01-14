<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{!! isset($title) ? $title : "We Can" !!} | We Can If We Together</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="{!! asset('additional/home/css/bootstrap.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('additional/home/css/font-awesome.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('additional/home/css/animate.min.css') !!}" rel="stylesheet"> 
        <link href="{!! asset('additional/home/css/lightbox.css') !!}" rel="stylesheet"> 
        <link href="{!! asset('additional/home/css/main.css') !!}" rel="stylesheet">
        <link href="{!! asset('additional/home/css/responsive.css') !!}" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">

        @yield('style')

    </head>
    <body >

        <!-- Header -->
        @include('partial.header')
        <!--/#header-->

        <div class="ikiUtama">        
            @yield('content')
        </div>

        <!-- Footer -->
        @include('partial.footer')
        <!--/#footer-->

        <!-- Javascript -->
        <script type="text/javascript" src="{!! asset('additional/home/js/jquery.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('additional/home/js/bootstrap.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('additional/home/js/lightbox.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('additional/home/js/wow.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('additional/home/js/main.js') !!}"></script>   

        @yield('script')

    </body>
</html>