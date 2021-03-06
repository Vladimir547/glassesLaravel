<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>glasses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/main.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/my.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    @section('styles')
    @show
</head>

<body>
<header class='header'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-6 col-sm-12'>
                <div class='select__countries'>
                    <div class='language__wrap'>
                        <ul>
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img id="imgNavSel" src="https://tattooscalculator.com/img/flag/Rus_40.jpg" alt="..." class="img-thumbnail icon-small">&nbsp;&nbsp;
                                <span id="lanNavSel">Rus</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu mumu" role="menu">
                                <li><a id="navFra" href="{{asset('/?lang=fr')}}" class="language">
                                        <img id="imgNavFra" src="https://tattooscalculator.com/img/flag/Fra_40.jpg" alt="France" class="img-thumbnail icon-small">&nbsp;
                                        <span id="lanNavFra">Française</span>&nbsp;
                                    </a></li>
                                <li><a id="navEng" href="{{asset('/?lang=en')}}" class="language">
                                        <img id="imgNavEng" src="https://tattooscalculator.com/img/flag/Eng_40.jpg" alt="English" class="img-thumbnail icon-small">&nbsp;
                                        <span id="lanNavEng">English</span>&nbsp;
                                    </a></li>
                                <li><a id="navRus" href="{{asset('/?lang=ru')}}" class="language">
                                        <img id="imgNavRus" src="https://tattooscalculator.com/img/flag/Rus_40.jpg" alt="Russia" class="img-thumbnail icon-small">&nbsp;
                                        <span id="lanNavRus">Русский</span>&nbsp;
                                    </a></li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                    <div class='country__wrap'>
                        <label for="country">Currency:</label>
                        <select name='country' id='country'>
                            <option name='USA'>USA</option>
                            <option name='Russia'>Russia</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class='col-md-6 col-sm-12'>
                <div class='login'>
                    <ul class='nav__login'>
                        <li><a href='#'>log in</a></li>
                        <li><a href='#'>sign up</a></li>
                    </ul>
                </div>
            </div>
            <div class='col-lg-2 col-md-2'>
                <div class='logo'>
                    <a href='/'><img src="{{asset('./img/logo.png')}}"></a>
                </div>
            </div>
            <div class='col-lg-5 col-md-5'>
                <div class='menu'>
                    <ul class='menu__header'>
                        <li><a href="/">{{__('menu.menu.home')}}</a></li>
                        <li><a href="{{asset('/women')}}">{{__('menu.menu.woman')}}</a></li>
                        <li><a href="{{asset('/man')}}">{{__('menu.menu.man')}}</a></li>
                        <li><a href="{{asset('/others')}}">{{__('menu.menu.other')}}</a></li>
                        <li><a href='#'>{{$name}}</a></li>
                        <li><a href="{{asset('all')}}">{{__('menu.menu.map')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class='col-lg-5 col-md-5'>
                <div class='header__filter'>
                    <div class='form__src'>
                        <form action='' method="GET">
                            <input type="text" name='search' class='search' value='' placeholder="Search..">
                            <input type='submit' name='sub' class='search__btn' value='search'>
                        </form>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <div class='circle'><i class="fas fa-shopping-cart"></i></div>
                    <div class='circle'><i class="fas fa-shopping-cart"></i></div>
                    <div class='cart'>
                        <p><span>cart(0)</span></p>
                    </div>
                </div>
            </div>
        </div>
        {!! menu('main', 'mymenu') !!}
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
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
                </li>
                @endguest
        </ul>
    </div>
</header>
@yield('content')
<footer class="footer">
    <div class="container">
        <div class="row">
            <ul>
                @foreach($s_objs as $one)
                    <li>
                        <a href='{{asset($one->url)}}'>
                            {{$one->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
</body>
    <script src="{{asset('js/app.js')}}"></script>
    @section('scripts')

    @show
</html>