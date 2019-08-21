<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BigDeal') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'BigDeal') }}
                </a>
               
               <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="search" name="search" class="search-input" placeholder="Type to search.."/>
                        <button class="search-icon" onclick="searchToggle(this, event);">
                            <span></span></button>
                    </div>
                                  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <a id="nav-toggle" href="#"><span></span></a>
                </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
            
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <form method="POST" role="search" action="{{ route('listing.search') }}" class="search-nav">
                            @csrf                         
                            <input id="commonSearchTerm" type="text" name="search" placeholder="Search offers...">
                            <button id="searchButton" type="submit">Search</button>     
                        </form>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" id="menu-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('listing.create') }}">Post Ad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="myAcc" href="{{ route('profile.index') }}">My Account</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                                <a class="nav-link dropdown-item-mobile" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <div class="card-footer">
            <a href="{{ route('index') }}">Home Page |</a>
            <a href="{{ route('information') }}">Information |</a>
            <a href="{{ route('contact') }}">Help & Contact |</a>
            <a href="{{ route('terms') }}">Terms & Conditions |</a>
            <a href="{{ route('about') }}">About Us |</a>
            <a href="{{ route('policy') }}">Privacy Policy</a>
            <br>
            <span>BigDeal &copy; 2019</span>
        </div>
        </footer>
    </div>
</body>
</html>
