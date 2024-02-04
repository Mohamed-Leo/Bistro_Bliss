<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="icon" href="{{URL('storage/logo.jpg')}}">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('static/css/adminpanel/layout.css')}}">
    </head>
    <body>
        {{-- Start Header --}}
        <header>
            <nav>
                <ul>
                    <li><a href="{{route('admin.page')}}">admin page</a></li>
                    <li><a class="{{'addmenu' == request()->path() ? 'active' : ''}}" href="{{route('addmenu.form')}}">add menu</a></li>
                    <li><a class="{{'showmenu' == request()->path() ? 'active' : ''}}" href="{{route('menu.table')}}">menu table</a></li>
                    <li><a class="{{'show-bookings' == request()->path() ? 'active' : ''}}" href="{{route('show.bookings')}}">show bookings</a></li>
                    <li><a class="{{'show-contacts' == request()->path() ? 'active' : ''}}" href="{{route('show.contacts')}}">show contacts</a></li>
                    <li><a class="{{'show-users' == request()->path() ? 'active' : ''}}" href="{{route('show.users')}}">show users</a></li>
                </ul>
            </nav>
        </header>
        {{-- End Header --}}

        @yield('form')
        @yield('table')
    </body>
</html>




