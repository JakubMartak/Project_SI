<head>
    <link href="css/style.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="flex items-center justify-center">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <h2 class="fw-bold mb-2 text-uppercase flex items-center justify-center">Login</h2>
                <p class="text-white-50 mb-5 flex items-center justify-center">Please enter your login and password!</p>

                <label for="email" class="cmb-4">Email address</label>

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <div class="form-text flex items-center justify-center">We'll never share your email with anyone else.</div>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="cmb-4">Password</label>

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 form-text">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                    <a class="underline form-text hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="btn btn-outline-light btn-lg px-5 ml-4">
                    {{ __('Log in') }}
                </button>
            </div>
            <p></p>
            <div class="mt-3">
                <p class="mb-0 flex items-center justify-center">Don't have an account? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a>
                </p>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>

