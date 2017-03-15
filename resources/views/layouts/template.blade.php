<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>
        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" >
        <link href="{{asset('/css/styles.css')}}" rel="stylesheet" >
        <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet" >
    </head>
    <body>
        <div id="wrapper">
    @include('layouts.topnav')
    @include('layouts.sidenav')
        <div id="page-wrapper">
    @yield('content')
        </div>
    @include('layouts.footer')
    </body>
</html>