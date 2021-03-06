<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     
     <!--Address Bar Color for chrome-->
    <meta name="theme-color" content="#6c012d">

    <title>{{ 'Love Calculator | Admin' }}</title>

    <!--icon-->
    <link rel="icon" href="{{asset('assets/images/kopa.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('etra_script')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,body{
            max-width: 900px;
            margin:auto;
        }
        #bg-img{
            height: 94.7vh;
            background-image: url("{{ asset('assets/images/bg4.jpg') }}");
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-danger shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/home') }}">
                    {{ 'Love Calculator Admin'}}
                </a>
                @auth
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @endauth

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @auth
                           @can('isSuperAdmin')
                              <li class="nav-item">
                                <a class="nav-link text-white" href="/register">{{ __('Register New Admin') }}</a>
                            </li>
                           @endcan

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name.' '.Auth::user()->last_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" id="bg-img">
            @yield('content')
        </main>
    </div>
</body>
</html>
