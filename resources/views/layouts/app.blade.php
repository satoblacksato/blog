<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/notifications/pnotify.custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/notifications/sweetalert.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @yield('masterCSS')
</head>
<body>
<div id="pageLoader">
    <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
</div>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    @guest
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    @else
                        <img src="{{ Auth::user()->avatar }}" style="width: 75px;
    height: 95px;"/>
                    @endguest
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{ route('catalogos.categories.index') }}">Categorias</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-lg-8 col-lg-offset-2">
            {!! Messages::render() !!}
        </div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('plugins/notifications/pnotify.min.js') }}"></script>
    <script src="{{ asset('plugins/notifications/sweet_alert.min.js') }}"></script>
    <script src="{{ asset('plugins/riot/riot.min.js') }}"></script>
    <script src="{{ asset('plugins/riot/riot-compiler.min.js') }}"></script>
    <script>
        $('.alert').not('.important').delay(7000).slideUp(350);
        console.log("%c¡Detente!", "font-family: ';Arial';, serif; font-weight: bold; color: red; font-size: 45px");
        console.log("%cEsta función del navegador está pensada para desarrolladores. Si alguien te indicó que copiaras y pegaras algo aquí para habilitar una función del sitio o para PIRATEAR la cuenta de alguien, se trata de un fraude.", "font-family: ';Arial';, serif; color: black; font-size: 20px");
        console.log("%cSi lo haces, esta persona podrá acceder a tu cuenta y datos personales.", "font-family: ';Arial';, serif; color: black; font-size: 20px");
    </script>
    @yield('masterJS')

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59cd91f14854b82732ff29eb/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
