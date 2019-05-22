<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>glasses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css" type="text/css">
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
                        <label for="language">Language:</label>
                        <select  name='language' id='language'>
                            <option name='english'>English</option>
                            <option name='russian'>Russian</option>
                        </select>
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
                    <a href='index.html'><img src="{{asset('./img/logo.png')}}"></a>
                </div>
            </div>
            <div class='col-lg-5 col-md-5'>
                <div class='menu'>
                    <ul class='menu__header'>
                        <li><a href='#'>home</a></li>
                        <li><a href='#'>women</a></li>
                        <li><a href='#'>men</a></li>
                        <li><a href='#'>other</a></li>
                        <li><a href='#'>purchase</a></li>
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
    </div>
</header>
<section class='banner'>
    <div class='container'>
        <div class='row'>
            <div class='slogan'>
                <div class="slogan__first">
                    <h1>aluminum club</h1>
                </div>
                <div class='slogan__second'>
                    <h2>experience ray-ban</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('content')
</body>
@section('scripts')
@show
</html>