<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>SMAN 1 Malang</title>
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
        <nav id="topnav" class="bg-gray-800 fixed z-20 w-full transition-all">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center sm:hidden"
                    >
                        <!-- Mobile menu button-->
                        <button
                            type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu"
                            aria-expanded="false"
                            id="menu-button"
                        >
                            <span class="sr-only">Open main menu</span>
                            <!--
              Icon when menu is closed.
  
              Heroicon name: outline/menu
  
              Menu open: "hidden", Menu closed: "block"
            -->
                            <svg
                                class="block h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true"
                                id="icon-menu-close"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                            </svg>
                            <!--
              Icon when menu is open.
  
              Heroicon name: outline/x
  
              Menu open: "block", Menu closed: "hidden"
            -->
                            <svg
                                class="hidden h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true"
                                id="icon-menu-open"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>
                    </div>
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
                        <div
                            class="flex-grow justify-end hidden sm:flex sm:ml-6"
                        >
                            <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a
                                    href="#fasilitas"
                                    class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
                                    >Fasilitas</a
                                >

                                <a
                                    href="/login"
                                    class="text-white font-bold hover:bg-green-400 hover:text-white px-8 py-2 rounded-md text-sm bg-green-500 transition-all"
                                    >PPDB</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a
                        href="#fasilitas"
                        class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                        aria-current="page"
                        >Fasilitas</a
                    >

                    <a
                        href="/login"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                        >PPDB</a
                    >
                </div>
            </div>
        </nav>

        <div class="relative w-full h-screen flex">
            <img
                src="/img/sampleschool.jpg"
                alt=""
                class="absolute w-full h-full top-0 left-0 object-cover"
            />
            <div
                class="overlay absolute w-full h-full top-0 left-0 bg-black opacity-80"
            ></div>
            <div
                class="relative top-0 left-0 m-0 flex w-full h-full flex-col items-center justify-center text-white font-sans"
            >
                <img src="/img/smansa.png" alt="" class="w-16" />
                <h2 class="text-4xl mt-5 font-bold">SMAN 1 MALANG</h2>
                <h3 class="text-xl font-medium mt-3">
                    Menerima Peserta Didik Baru
                </h3>
                <a
                    href="/register"
                    class="mt-8 border-2 font-semibold border-white px-8 py-4 hover:bg-white hover:text-black transition-all cursor-pointer"
                    >DAFTAR SEKARANG</a
                >
            </div>
        </div>

        <section class="bg-gray-100 p-16" id="fasilitas">
            <h1 class="text-center font-bold text-2xl">FASILITAS</h1>
            <div class="flex flex-col md:flex-row items-center justify-around mt-10 md:mt-14">
                <div class="flex flex-row md:flex-col items-center my-3 md:my-0">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                        fill="currentColor"
                        class="bi bi-building"
                        viewBox="0 0 16 16"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"
                        />
                        <path
                            d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"
                        />
                    </svg>
                    <div class="ml-4 md:ml-0 md:mt-3 font-semibold w-48 md:w-auto">Ruang Kelas</div>
                </div>
                <div class="flex flex-row md:flex-col items-center my-3 md:my-0">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                        fill="currentColor"
                        class="bi bi-thermometer-sun"
                        viewBox="0 0 16 16"
                    >
                        <path
                            d="M5 12.5a1.5 1.5 0 1 1-2-1.415V2.5a.5.5 0 0 1 1 0v8.585A1.5 1.5 0 0 1 5 12.5z"
                        />
                        <path
                            d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1zm5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5zm4.243 1.757a.5.5 0 0 1 0 .707l-.707.708a.5.5 0 1 1-.708-.708l.708-.707a.5.5 0 0 1 .707 0zM8 5.5a.5.5 0 0 1 .5-.5 3 3 0 1 1 0 6 .5.5 0 0 1 0-1 2 2 0 0 0 0-4 .5.5 0 0 1-.5-.5zM12.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 1 1 0 1h-1a.5.5 0 0 1-.5-.5zm-1.172 2.828a.5.5 0 0 1 .708 0l.707.708a.5.5 0 0 1-.707.707l-.708-.707a.5.5 0 0 1 0-.708zM8.5 12a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5z"
                        />
                    </svg>
                    <div class="ml-4 md:ml-0 md:mt-3 font-semibold w-48 md:w-auto">Laboratorium</div>
                </div>
                <div class="flex flex-row md:flex-col items-center my-3 md:my-0">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                        fill="currentColor"
                        class="bi bi-cash"
                        viewBox="0 0 16 16"
                    >
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                        <path
                            d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"
                        />
                    </svg>
                    <div class="ml-4 md:ml-0 md:mt-3 font-semibold w-48 md:w-auto">Lapangan Olahraga</div>
                </div>
                <div class="flex flex-row md:flex-col items-center my-3 md:my-0">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                        fill="currentColor"
                        viewBox="0 0 640 512"
                    >
                        <path
                            fill="currentColor"
                            d="M592 0H48A48 48 0 0 0 0 48v320a48 48 0 0 0 48 48h240v32H112a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16H352v-32h240a48 48 0 0 0 48-48V48a48 48 0 0 0-48-48zm-16 352H64V64h512z"
                            class=""
                        ></path>
                    </svg>
                    <div class="ml-4 md:ml-0 md:mt-3 font-semibold w-48 md:w-auto">Lab Komputer</div>
                </div>
            </div>
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
                                    href="#fasilitas"
                                    class="text-md text-gray-200 hover:text-gray-400">
                                    Fasilitas
                                </a>
                            </span>
                            <span class="my-2">
                                <a
                                    href="/login"
                                    class="text-md text-gray-200 hover:text-gray-400">
                                    PPDB
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

        <script>
            window.addEventListener("DOMContentLoaded", () => {
                const navbar = document.getElementById("topnav");
                window.addEventListener("scroll", () => {
                    if (window.scrollY > 150)
                        navbar.classList.add("bg-gray-800");
                    else navbar.classList.remove("bg-gray-800");
                });

                let mobileMenuShown = false;
                const mobileMenu = document.getElementById("mobile-menu");
                const iconMenuOpen = document.getElementById("icon-menu-open");
                const iconMenuClose = document.getElementById("icon-menu-close");
                document.getElementById("menu-button").addEventListener("click", () => {
                    if(mobileMenuShown) {
                        mobileMenu.classList.add("hidden");
                        iconMenuOpen.classList.add("hidden");
                        iconMenuClose.classList.remove("hidden");
                    } else {
                        mobileMenu.classList.remove("hidden");
                        iconMenuOpen.classList.remove("hidden");
                        iconMenuClose.classList.add("hidden");
                    }
                    mobileMenuShown = !mobileMenuShown;
                })
            });
        </script>
    </body>
</html>
