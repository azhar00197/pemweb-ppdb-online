<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="flex flex-col items-center justify-center">
<form method="POST" action="{{ route('register') }}" class="w-96">
            @csrf

            <!-- Name -->
            <div>
                <label for="name">Nama Siswa</label>

                <input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">Email</label>

                <input id="email" class="block mt-1 w-full" type="email" name="email" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">Password</label>

                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation">Konfirmasi Password</label>

                <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        </div>
</body>
</html>