<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                 
                     <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/advertisment"> {{__('my_lang.advertisment')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/business"> {{__('my_lang.business')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/category"> {{__('my_lang.category')}}</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="/comment "> {{__('my_lang.comment')}}</a>
                        </li> -->
                        <li class="nav-item">
                        <a class="nav-link" href="/customer">{{__('my_lang.customer')}}</a>
                        </li>                 
                        <li class="nav-item">
                        <a class="nav-link" href="/feedback"> {{__('my_lang.feedback')}}</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="/migrations "> Migrations</a>
                        </li> -->
                        <li class="nav-item">
                        <a class="nav-link" href="/order "> {{__('my_lang.order')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/partner">{{__('my_lang.partner')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/product"> {{__('my_lang.product')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/style"> {{__('my_lang.style')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/lang/vn"><img src="/vn.png" style="width:30px;aspect-ratio:5/3"></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/lang/en"><img src="/en.png" style="width:30px;aspect-ratio:5/3"></a>
                        </li>
                    </ul> 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{__('my_lang.Login')}}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{__('my_lang.Register')}}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
     
        
     
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
