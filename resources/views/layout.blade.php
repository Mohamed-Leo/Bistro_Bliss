<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="icon" href="{{URL('storage/assets/logo.jpg')}}">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @yield('swiper_css')
        {{-- main css files --}}
        <link rel="stylesheet" href="{{asset('static/css/main/main.css')}}">
        @yield('css_files')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>

        @section('header')
            <!-- Start header -->
            <header>
                <!-- {/* Start top-nav */} -->
                <div class="top-nav">

                    <!-- {/* Start info */} -->
                    <div class="info">
                        <div>
                            <img src="{{URL('storage/assets/phone.png')}}" alt="phone-icon" />
                            (414) 857 - 0107
                        </div>

                        <div>
                            <img src="{{URL('storage/assets/mail.png')}}" alt="mail-icon" />
                            yummy@bistrobliss
                        </div>
                    </div>
                    <!-- {/* End info */} -->

                    <!-- {/* Start right-side */} -->
                    <div class="right-side">
                        <!-- {/* Start social */} -->
                        <div class="social">
                            <a href="https://www.facebook.com/profile.php?id=100025320708611" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://codepen.io/Shadowing-213123" target="_blank">
                                <i class="fa-brands fa-codepen"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/mohamed-mahmoud90/" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/Mohamed-Leo" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                        <!-- {/* End social */} -->

                        <!-- {/* Start login-register */} -->
                        <div class="login-register">
                            @if (Route::has('login'))
                                @auth
                                    {{-- <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">User</a> --}}
                                    <div class="ms-3 relative user-menu">
                                        <x-dropdown align="right" width="48">
                                            <x-slot name="trigger">
                                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                    </button>
                                                @else
                                                    <span class="inline-flex rounded-md">
                                                        <button type="button" class="username inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md transition ease-in-out duration-150">
                                                            {{ Auth::user()->name }}
                                                            {{-- removed classes btn => bg-white dark:bg-gray-800 dark:active:bg-gray-700 focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 focus:outline-none dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 text-gray-500 --}}

                                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                            </svg>
                                                        </button>
                                                    </span>
                                                @endif
                                            </x-slot>

                                            <x-slot name="content">
                                                <!-- Account Management -->
                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    {{ __('Manage Account') }}
                                                </div>

                                                <x-dropdown-link class="link" href="{{ route('profile.show') }}">
                                                    {{ __('Profile') }}
                                                </x-dropdown-link>

                                                <x-dropdown-link class="link" href="{{ route('my.bookings') }}">
                                                    {{ __('Bookings') }}
                                                </x-dropdown-link>

                                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                        {{ __('API Tokens') }}
                                                    </x-dropdown-link>
                                                @endif

                                                <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}" x-data>
                                                    @csrf

                                                    <x-dropdown-link class="link" href="{{ route('logout') }}"
                                                            @click.prevent="$root.submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                    @else
                                    <a href="{{ route('login') }}" class="font-semibold">Log in</a>
                                    {{-- removed classes => text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 --}}

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold">Register</a>
                                        {{-- removed classes => text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 --}}
                                    @endif
                                @endauth
                            @endif

                            {{-- check loged user to show notifications --}}
                            @if (auth()->user())
                                {{-- Start notifications --}}
                                    <div class="notifications">
                                        <a href="{{route('notifications')}}">
                                            <i class="fa-solid fa-bell"></i>
                                            {{-- check notifications to show numbers --}}
                                            @if(count(auth()->user()->notifications) != 0)
                                                <div class="notify-num">
                                                    {{count(auth()->user()->unreadNotifications )}}
                                                </div>
                                            @endif
                                        </a>
                                    </div>
                                {{-- End notifications --}}
                            @endif
                        </div>
                        <!-- {/* End login-register */} -->
                    </div>
                    <!-- {/* End right-side */} -->
                </div>
                <!-- {/* End top-nav */} -->

                <!-- {/* Start bottom-nav */} -->
                <div class="bottom-nav">
                    <!-- {/*  Start logo */} -->
                    <div class="logo">
                        <img src="{{URL('storage/assets/logo.jpg')}}" alt="logo" />
                        Bistro Bliss
                    </div>
                    <!-- {/* End logo */} -->

                    <!-- {/* Start nav */} -->
                    <nav>
                        <!-- {/* Start links */} -->
                        <ul>
                            <li><a class="{{'/' == request()->path() ? 'active' : ''}}" href="{{route('home.page')}}">home</a></li>
                            <li><a class="{{'about' == request()->path() ? 'active' : ''}}" href="{{route('about.page')}}">about</a></li>
                            <li>
                                {{-- Start menu links--- --}}
                                <a class="{{ request()->path() == 'menu'
                                        || request()->path() == 'menu-breakfast'
                                        || request()->path() == 'menu-maindishes'
                                        || request()->path() == 'menu-drinks'
                                        || request()->path() == 'menu-dessert'
                                        ? 'active' : ''}}"
                                    href="{{route('menu.page')}}">menu</a>
                                    {{-- End menu links--- --}}
                            </li>
                            <li><a class="{{'blogs' == request()->path() ? 'active' : ''}}" href="{{route('blogs.page')}}">pages</a></li>
                            <li><a class="{{'contactus' == request()->path() ? 'active' : ''}}" href="{{route('contact.form')}}">contact</a></li>
                        </ul>
                        <!-- {/* End links */} -->


                        <!-- {/* Start boket-btn */} -->
                        <div class="boket-btn">
                            <a class="{{'booktable' == request()->path() ? 'active' : ''}}" href="{{route('book.form')}}">book a table</a>
                        </div>
                        <!-- {/* End boket-btn */} -->

                        <!-- {/* Start list */} -->
                        <div class="list">
                            <input type="checkbox" id="checkbox" onclick="activeList()"/>
                            <label for="checkbox" class="toggle">
                                <div class="bars" id="bar1"></div>
                                <div class="bars" id="bar2"></div>
                                <div class="bars" id="bar3"></div>
                            </label>
                        </div>
                        <!-- {/* End list */} -->
                    </nav>
                    <!-- {/* End nav */} -->
                </div>
                <!-- {/* End bottom-nav */} -->
            </header>
            <!-- End header -->
        @show


        @section('custom_nav')
            <!-- Start custom-meida-nav -->
            <div class="custom-meida-nav">
                {{-- Start align --}}
                <div class="align">
                    <!-- {/* Start top-list */} -->
                    <div class="top-list">
                        <div>
                            <img src="{{URL('storage/assets/phone.png')}}" alt="phone-icon" />
                            (414) 857 - 0107
                        </div>

                        <div>
                            <img src="{{URL('storage/assets/mail.png')}}" alt="mail-icon" />
                            yummy@bistrobliss
                        </div>

                        <!-- {/* Start right-side */} -->
                        <div class="right-side">
                            <!-- {/* Start social */} -->
                            <div class="social">
                                <a href="https://www.facebook.com/profile.php?id=100025320708611" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://codepen.io/Shadowing-213123" target="_blank">
                                    <i class="fa-brands fa-codepen"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/mohamed-mahmoud90/" target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="https://github.com/Mohamed-Leo" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                            <!-- {/* End social */} -->

                            <!-- {/* Start login-register */} -->
                            <div class="login-register">
                                @if (Route::has('login'))
                                    @auth
                                        {{-- <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">User</a> --}}
                                        <div class="ms-3 relative user-menu">
                                            <x-dropdown align="right" width="48">
                                                <x-slot name="trigger">
                                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                        </button>
                                                    @else
                                                        <span class="inline-flex rounded-md">
                                                            <button type="button" class="username inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md transition ease-in-out duration-150">
                                                                {{ Auth::user()->name }}
                                                                {{-- removed classes btn => bg-white dark:bg-gray-800 dark:active:bg-gray-700 focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 focus:outline-none dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 text-gray-500 --}}

                                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    @endif
                                                </x-slot>

                                                <x-slot name="content" class="over-menu">
                                                    <!-- Account Management -->
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        {{ __('Manage Account') }}
                                                    </div>

                                                    <x-dropdown-link class="link" href="{{ route('profile.show') }}" onclick="close()">
                                                        {{ __('Profile') }}
                                                    </x-dropdown-link>

                                                    <x-dropdown-link class="link" href="{{ route('my.bookings') }}">
                                                        {{ __('Bookings') }}
                                                    </x-dropdown-link>

                                                    <x-dropdown-link class="link" href="{{ route('notifications') }}">
                                                        {{ __('Notifications') }}
                                                    </x-dropdown-link>

                                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                            {{ __('API Tokens') }}
                                                        </x-dropdown-link>
                                                    @endif

                                                    <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                                    <!-- Authentication -->
                                                    <form method="POST" class="w-full" action="{{ route('logout') }}" x-data>
                                                        @csrf

                                                        <x-dropdown-link class="link" href="{{ route('logout') }}" onclick="close()"
                                                                @click.prevent="$root.submit();">
                                                            {{ __('Log Out') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </x-slot>
                                            </x-dropdown>
                                        </div>
                                        @else
                                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                        @endif
                                    @endauth
                                @endif
                            </div>
                            <!-- {/* End login-register */} -->
                        </div>
                        <!-- {/* End right-side */} -->
                    </div>
                    <!-- {/* End top-list */} -->

                    <!-- {/* Start bottom-list */} -->
                    <div class="bottom-list">
                        <!-- {/* Start links */} -->
                        <ul>
                            <li><a class="{{'/' == request()->path() ? 'active' : ''}}" href="{{route('home.page')}}" onclick="close()">home</a></li>
                                <li><a class="{{'about' == request()->path() ? 'active' : ''}}" href="{{route('about.page')}}" onclick="close()">about</a></li>
                                <li><a class="{{'menu' == request()->path() ? 'active' : ''}}" href="{{route('menu.page')}}" onclick="close()">menu</a></li>
                                <li><a class="{{'blogs' == request()->path() ? 'active' : ''}}" href="{{route('blogs.page')}}" onclick="close()">pages</a></li>
                                <li><a class="{{'contactus' == request()->path() ? 'active' : ''}}" href="{{route('contact.form')}}" onclick="close()">contact</a></li>
                        </ul>
                        <!-- {/* End links */} -->
                    </div>
                    <!-- {/* End bottom-list */} -->

                    <!-- {/* <Start boket-btn */} -->
                    <div class="boket-btn">
                        <a class="{{'booktable' == request()->path() ? 'active' : ''}}" href="{{route('book.form')}}" onclick="close()">book a table</a>
                    </div>
                    <!-- {/* End boket-btn */} -->
                </div>
                {{-- End align --}}
            </div>
            <!-- End custom-meida-nav -->
        @show


        @yield('content_1')

        @yield('content_2')


        @section('footer')
            <!-- Start footer -->
            <footer>
                <!-- {/* start content */} -->
                <div class="content">
                    <!-- {/* start right-side */} -->
                    <div class="right-side">
                        <div class="logo">
                            <img src="{{URL('storage/assets/footer-logo.png')}}" alt="logo" />
                            Bistro Bliss
                        </div>
                        <p>
                            In the new era of technology we look a in the future with certainty and pride to for our company and.
                        </p>
                        <!-- {/* Start social */} -->
                        <div class="social">
                            <a href="https://www.facebook.com/profile.php?id=100025320708611" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://codepen.io/Shadowing-213123" target="_blank">
                                <i class="fa-brands fa-codepen"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/mohamed-mahmoud90/" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/Mohamed-Leo" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                        <!-- {/* End social */} -->
                    </div>
                    <!-- {/* End right-side */} -->

                    <!-- {/* start center-side */} -->
                    <div class="center-side">
                        <div class="links">
                            <h4>Pages</h4>
                            <ul>
                                <li><a href="{{route('home.page')}}">Home</a></li>
                                <li><a href="{{route("about.page")}}">About</a></li>
                                <li><a href="{{route("menu.page")}}">Menu</a></li>
                                <li><a href="{{route("menu.page")}}">Pricing</a></li>
                                <li><a href="{{route("blogs.page")}}">Blog</a></li>
                                <li><a href="{{route("contact.form")}}">Contact</a></li>
                                <li><a href="{{route("menu.page")}}">Delivery</a></li>
                            </ul>
                        </div>
                        <div class="links">
                            <h4>Utility Pages</h4>
                            <ul>
                                <li><a href="{{route('home.page')}}">Start Here</a></li>
                                <li><a href="{{route("about.page")}}">Styleguide</a></li>
                                <li><a href="{{ route('profile.show') }}">Password Protected</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('blogs.page') }}">Changelog</a></li>
                                <li><a href="{{route("about.page")}}">View More</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- {/* End center-side */} -->

                    <!-- {/* Start left-side */} -->
                    <div class="left-side">
                        <h4>Follow Us On Instagram</h4>
                        <div class="images">
                            <div>
                                <img src="{{URL('storage/assets/pasta.png')}}" alt="pasta" />
                            </div>
                            <div>
                                <img src="{{URL('storage/assets/fries.png')}}" alt="fries" />
                            </div>
                            <div>
                                <img src="{{URL('storage/assets/olsson.png')}}" alt="olsson" />
                            </div>
                            <div>
                                <img src="{{URL('storage/assets/ash.png')}}" alt="ash" />
                            </div>
                        </div>
                    </div>
                    <!-- {/* End left-side */} -->
                </div>
                <!-- {/* End content */} -->
            </footer>
            <!-- End footer -->
        @show


        <!-- Start Up Down Btn -->
        <div id="upbtn">
            <div>
                <i class="fa-solid fa-chevron-up"></i>
            </div>
        </div>
        <!-- End Up Down Btn -->

        {{-- Start loader --}}
        <div class="loader-con">
            <div class="loader"></div>
        </div>
        {{-- End loader --}}


        @yield('swiper_js')
        @yield('js_files')
        {{-- jquery cdn --}}
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        {{-- main js file --}}
        <script src="{{asset('static/js/main.js')}}"></script>
        @livewireScripts
    </body>
</html>
