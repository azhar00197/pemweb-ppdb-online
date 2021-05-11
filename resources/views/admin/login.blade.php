<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Login Admin | SMAN 1 Malang</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="/css/main.css" />
    </head>
    <body>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <nav id="topnav" class="bg-gray-800 sticky top-0 z-20 w-full transition-all">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div
                        class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start"
                    >
                        <a class="flex-shrink-0 flex items-center" href="/">
                            <img
                                class="block h-8 w-auto mr-2"
                                src="/img/smansa.png"
                                alt="Workflow"
                            />
                            <div
                                class="flex flex-col text-white font-nunito font-bold text-lg leading-none ml-2"
                            >
                                <div>SMAN 1</div>
                                <div>Malang</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="px-5 sm:px-20 py-10 flex flex-col">
            <div class="flex flex-col items-center">
                <img src="/img/smansa.png" class="w-12" alt="">
                <h3 class="font-sans font-semibold text-xl mt-6">LOGIN ADMIN</h3>
            </div>
            @if($errors->any())
            <h4>{{$errors->first()}}</h4>
            @endif
            <form action="" method="POST" class="border border-gray-500 rounded-md w-full sm:w-96 self-center mt-8 p-6">
                @csrf
                <div class="flex flex-col">
                    <label for="username" class="text-sm">Username</label>
                    <input type="text" name="username" id="username" class="py-1 px-3 rounded-sm border border-gray-700 border-opacity-60" required>
                </div>
                <div class="flex flex-col mt-3">
                    <label for="password" class="text-sm">Password</label>
                    <input type="password" name="password" id="password" class="py-1 px-3 rounded-sm border border-gray-700 border-opacity-60" minlength="8" required>
                </div>
                <button type="submit" class="mt-6 py-1.5 px-3 w-full bg-indigo-700 hover:bg-indigo-500 text-white transition-all">Login</button>
            </form>
        </section>

        <footer
        class="footer bg-gray-900 text-white relative pt-5"
    >
        <div class="container mx-auto px-6">
            <div class="sm:flex sm:mt-8">
                <div
                    class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between"
                >
                    <div class="flex md:w-1/2 flex-col">
                        <span class="font-bold uppercase mb-2"
                            >Navigasi</span
                        >
                        <span class="my-2">
                            <a
                                href="/"
                                class="text-md text-gray-200 hover:text-gray-400">
                                Halaman Depan
                            </a>
                        </span>
                    </div>
                    <div class="flex md:w-1/2 flex-col md:my-0 my-8">
                        <span class="font-bold uppercase mt-4 md:mt-0 mb-2">
                            KONTAK
                        </span>
                        
                        <span class="flex my-2 text-md text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                            </svg>
                            <div class="ml-2 -mt-1">Jl. Tugu Utara No.1, Klojen<br>
                                Kota Malang, Jawa Timur 65111</div>
                        </span>
                        <span class="flex my-2 items-center text-md text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox2" viewBox="0 0 16 16">
                                <path d="M9 8.5h2.793l.853.854A.5.5 0 0 0 13 9.5h1a.5.5 0 0 0 .5-.5V8a.5.5 0 0 0-.5-.5H9v1z"/>
                                <path d="M12 3H4a4 4 0 0 0-4 4v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7a4 4 0 0 0-4-4zM8 7a3.99 3.99 0 0 0-1.354-3H12a3 3 0 0 1 3 3v6H8V7zm-3.415.157C4.42 7.087 4.218 7 4 7c-.218 0-.42.086-.585.157C3.164 7.264 3 7.334 3 7a1 1 0 0 1 2 0c0 .334-.164.264-.415.157z"/>
                            </svg>
                            <div class="ml-2">tu_sman1malang@yahoo.com</div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-6">
            <div
                class="mt-16 border-t-2 border-gray-300 flex flex-col items-center"
            >
                <div class="sm:w-2/3 text-center py-6">
                    <p class="text-sm font-bold mb-2">
                        © 2021 - SMAN 1 MALANG
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
