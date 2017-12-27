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
      {{--CDN--}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    @yield('HomePageStyles')
    @yield('DepositPageStyles')
    @yield('WithDrawPageStyles')
    @yield('EditAccPageStyles')
    @yield('YourDepositsPageStyles')
    @yield('YourWithdrawsPageStyles')
    @yield('EarnHistoryPageStyles')
    @yield('YourRefferalsPageStyles')
</head>
<body style="background: url('/images/cab-bg.jpg') /* Цвет фона */">

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    @include('layouts.nav')



    </div>


                @if(Auth::check())
            @include('layouts.AccountSettings')
            @include('layouts.referalblock')

               @else
                    @endif






            @yield('content')





                @include('layouts.footer')

            </div>
        </nav>
    </div>
    <script src="{{ asset('js/layouts/accountsettings.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"                    ></script>
    @yield('DepositPageScripts')
</body>

</html>
