<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryan_Rafif</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="path/to/tailwind.css">
    <style>
        /* Ensure the menu has the correct styles */
    </style>
</head>

<body>
    <section class="lg:fixed shadow-2xl z-50 scroll-smooth">
        <div class="nav lg:flex">

            <div id="navbar" class="flex">
                <!-- Desktop Navbar -->
                <div class="bg-gray-800 text-white w-64 h-screen lg:block hidden">
                    <div class="nav-logo">
                        <div class="photo hover:bg-slate-700 rounded-md">
                            <a href="/">
                                <div class="profil flex ml-11 mt-8 w-12 h-12">
                                    <img class="rounded-full" src="{{ asset('img/bg-ryan.jpg') }}" alt="">
                                    <div class="kata flex flex-col">
                                        <h1 class="font-bold text-sm py-2 px-4 leading-none">Ryan_Rafif</h1>
                                        <h1 class="text-gray-500 text-xs px-4 whitespace-nowrap">Frontend-Dev</h1>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="links flex justify-center pt-20">
                        <ul class="py-4 text-sm font-medium mt-4">
                            <li class="{{ request()->is('/') ? 'bg-gray-700 text-gray-300' : 'bg-gray-800' }} hover:bg-gray-700 rounded hover:shadow-lg px-4 my-2 py-2 cursor-pointer flex items-center space-x-2">
                                <ion-icon class="text-base text-bold px-2" name="home-outline"></ion-icon>
                                <a href="/">Home</a>
                            </li>
                            <li class="{{ request()->is('about') ? 'bg-gray-700 text-gray-300' : 'bg-gray-800' }} rounded hover:shadow-lg px-4 my-2 py-2 cursor-pointer flex items-center space-x-2">
                                <ion-icon class="text-base text-bold px-2" name="globe-outline"></ion-icon>
                                <a href="/about">About</a>
                            </li>
                            <li class="{{ request()->is('skills') ? 'bg-gray-700 text-gray-300' : 'bg-gray-800' }} rounded hover:shadow-lg px-4 my-2 py-2 cursor-pointer flex items-center space-x-2">
                                <ion-icon class="text-base text-bold px-2" name="code-outline"></ion-icon>
                                <a href="/skills">Skills & Project</a>
                            </li>
                            <li class="{{ request()->is('contact') ? 'bg-gray-700 text-gray-300' : 'bg-gray-800' }} rounded hover:shadow-lg px-4 my-2 py-2 cursor-pointer flex items-center space-x-2">
                                <ion-icon class="text-base text-bold px-2" name="call-outline"></ion-icon>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="social flex justify-center flex-col pt-24">
                        <p class="text-sm text-center font-normal">Socials</p>
                        <ul class="flex flex-row mx-auto">
                            <li class="py-2 px-2 rounded hover:bg-gray-700">
                                <a href="https://www.instagram.com/ryan_bmk08/">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                            <li class="py-2 px-2 rounded hover:bg-gray-700">
                                <a href="https://web.facebook.com/profile.php?id=100086946116010&sk=about">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>
                            <li class="py-2 px-2 rounded hover:bg-gray-700">
                                <a href="https://github.com/Ryanxzg1">
                                    <ion-icon name="logo-github"></ion-icon>
                                </a>
                            </li>
                            <li class="py-2 px-2 rounded hover:bg-gray-700">
                                <a href="https://www.linkedin.com/in/ryan-rafif-nur-rahman-2721b0305/">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile Navbar -->
                <div id="m-nav" class="bg-gray-800 text-white w-full lg:hidden flex flex-col fixed z-30">
                    <div class="flex p-4 justify-between">
                        <div class="photo flex flex-row">
                            <img class="h-11 w-11 rounded-full" src="{{ asset('img/bg-ryan.jpg') }}" alt="">
                            <div class="kata flex flex-col px-2">
                                <h1 class="font-bold text-sm flex justify-center">Ryan_Rafif</h1>
                                <p class="text-xs text-gray-500 flex justify-center">Frontend-Dev</p>
                            </div>
                        </div>
                        <button id="menu-button" class="text-white focus:outline-none px-2 bg-gray-700 shadow-lg rounded">
                            <ion-icon id="open-btn" class="text-3xl" name="menu-outline"></ion-icon>
                            <ion-icon id="close-btn" class="text-3xl hidden" name="close-outline"></ion-icon>
                        </button>
                    </div>
                    <div id="mobile-menu" class="hidden">
                        <ul class="text-base font-medium flex flex-col justify-center px-2 py-4 ml-4 mt-8">
                            <li class="py-4 rounded hover:bg-gray-700 hover:text-gray-300 cursor-pointer">
                                <ion-icon class="text-base px-2" name="home-outline"></ion-icon><a href="/">Home</a>
                            </li>
                            <li class="py-4 rounded hover:bg-gray-700 hover:text-gray-300 cursor-pointer">
                                <ion-icon class="text-base px-2" name="globe-outline"></ion-icon><a href="/about">About</a>
                            </li>
                            <li class="py-4 rounded hover:bg-gray-700 hover:text-gray-300 cursor-pointer">
                                <ion-icon class="text-base px-2" name="code-outline"></ion-icon><a href="/skills">Skills & Project</a>
                            </li>
                            <li class="py-4 rounded hover:bg-gray-700 hover:text-gray-300 cursor-pointer">
                                <ion-icon class="text-base px-2" name="call-outline"></ion-icon><a href="/contact">Contact</a>
                            </li>
                        </ul>
                        <div class="social flex justify-center flex-col pt-24">
                            <p class="text-sm text-center font-normal">Socials</p>
                            <ul class="flex flex-row mx-auto">
                                <li class="py-2 px-2 rounded hover:bg-gray-700 hover:text-gray-300">
                                    <a href="https://www.instagram.com/ryan_bmk08/">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                    </a>
                                </li>
                                <li class="py-2 px-2 rounded hover:bg-gray-700 hover:text-gray-300">
                                    <a href="https://web.facebook.com/profile.php?id=100086946116010&sk=about">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>
                                <li class="py-2 px-2 rounded hover:bg-gray-700 hover:text-gray-300">
                                    <a href="https://github.com/Ryanxzg1">
                                        <ion-icon name="logo-github"></ion-icon>
                                    </a>
                                </li>
                                <li class="py-2 px-2 rounded hover:bg-gray-700 hover:text-gray-300">
                                    <a href="https://www.linkedin.com/in/ryan-rafif-nur-rahman-2721b0305/">
                                        <ion-icon name="logo-linkedin"></ion-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.getElementById('menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const openBtn = document.getElementById('open-btn');
            const closeBtn = document.getElementById('close-btn');
            const mNav = document.getElementById('m-nav');

            menuButton.addEventListener('click', () => {
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('hidden');
                    openBtn.classList.add('hidden');
                    closeBtn.classList.remove('hidden');
                    mNav.classList.add('h-full');
					
                } else {
                    mobileMenu.classList.add('hidden');
                    openBtn.classList.remove('hidden');
                    closeBtn.classList.add('hidden');
                    mNav.classList.remove('h-full');
                }
            });
        });
    </script>
</body>

</html>
