<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Ծղոտներ հյուրանոցային համալիրը հանգստյան կենտրոն է հենց Երևանի սրտում, որն իր մեջ ներառում է թուրքական, ռուսական, ֆիննական բաղնիքներ, ընդարձակ լողավազաններ, ջակուզիներ, բիլիարդի համար նախատեսված սրահներ և պարահրապարակներ, ինչպես նաև ընտիր ռեստորան և հարմարավետ շքեղ հարկաբաժիններ։">
        <meta name="keywords" content="ծղոտներ, սաունա, tsghotner, tsxotner, cxotner,  sauna">
        <meta name="author" content="Centon Solutions">
        <meta name="robots" content="index, follow, archive"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Ծղոտներ հյուրանոցային համալիր</title>
        <link rel="icon" href="/img/logo.png" sizes="32x16">

        <link href="{{ url('css/bannerscollection_zoominout.css') }}" rel="stylesheet">
        <link href="{{ url('css/styleUi.css') }}" rel="stylesheet">
        <link href="{{ url('css/reset.css') }}" rel="stylesheet">
        <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/jquery-ui.css') }}" rel="stylesheet">
        <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('css/bootstrap-clockpicker.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        @stack('stylesheets')
    </head>
    <body>
        @include('includes/header')
        @yield('container')
        @include('includes/footer')
        
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
        <script src="{{ url('/js/jquery.ui.touch-punch.min.js') }}"></script>
        <script src="{{ url('/js/bannerscollection_zoominout.js') }}"></script>
        <script src="{{ url('/js/jquery-ui.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap-clockpicker.min.js') }}"></script>
        <script src="{{ url('/js/script.js') }}"></script>
        <script>
            jQuery(function() {
                    // preloader
                    $(window).load(function() {
                    $(".wrap").fadeOut();
                    $(".expand").delay(1000).fadeOut("slow"); 
                    });
                    jQuery('#bannerscollection_zoominout_generous').bannerscollection_zoominout({
                        skin: 'generous',
                        responsive:true,
                        width: 1920,
                        height: 1200,
                        width100Proc:true,
                        height100Proc:true,
                        showNavArrows:true,
                        showBottomNav:true,
                        thumbsOnMarginTop:11,
                        thumbsWrapperMarginTop: -110,
                        autoHideBottomNav:false,
                        pauseOnMouseOver:false
                    });		
                    
                });	
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                
                ga('create', 'UA-59510450-1', 'auto');
                ga('send', 'pageview');
        </script>
        @stack('scripts')
    </body>
</html>