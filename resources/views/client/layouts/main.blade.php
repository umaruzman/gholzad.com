<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes"/>

        <title>{{$title ?? env('APP_NAME')}}</title>
        <link rel="shortcut icon" href="{{asset('favicon.png')}}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,700;0,800;1,600;1,700&display=swap" rel="stylesheet"> 
        {{-- <link href="https://db.onlinewebfonts.com/a/t43xu0VBatSTb0VRGnEgP06z1HUdB2quShL4N2ayCvfOf2BFgs8y61eY" rel="stylesheet" type="text/css"/> --}}
        <link href="https://db.onlinewebfonts.com/c/bf8e6666252f4d6e781c1afacd6fb995?family=Posterama+1927" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        {{-- Extra Styles --}}
        @yield('page-extra-css')

    </head>
    <body>
        @include('client.layouts.header', ['type'=>isset($type)?$type:'black'])
        @yield('page-content')

        @include('client.layouts.footer')

        {{-- Javascript --}}
        <script src="{{asset('js/jquery-3.6.3.js')}}"></script>
        <script src="https://kit.fontawesome.com/d9686ff3ec.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/common.js')}}"></script>

        {{-- Extra Javascript --}}
        @yield('page-extra-js') 
    </body>
</html>
