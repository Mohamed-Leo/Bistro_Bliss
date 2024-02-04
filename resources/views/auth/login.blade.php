<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        {{-- <x-validation-errors class="mb-4" /> --}}

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1>login</h1>

            <x-validation-errors class="mb-4" />

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mt-6 forget">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <div class="sign-up text-sm text-gray-600 dark:text-gray-400">
                    Don't have an account?
                    <a href="{{ route('register') }}">register</a>
                </div>

                <x-button class="login">
                    {{ __('Log in') }}
                </x-button>
            </div>
            {{-- flex items-center justify-end / ms-4 --}}

            {{-- start social --}}
            <div class="social">
                <div class="social-message">
                    <h3>login with social accounts</h3>
                </div>

                <div class="icons">
                    <a href="{{route('google.login')}}" class="google">
                        <i class="fa-brands fa-google"></i>
                        Google
                    </a>
                    {{-- <a href="{{route('facebook.login')}}" class="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                        Facebook
                    </a> --}}
                </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

