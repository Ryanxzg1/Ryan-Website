<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	@vite('resources/css/app.css')
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lemon&family=Poppins:ital,wght@0,200;0,300;0,500;0,700;0,900;1,500;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-white font-poppins">
    <section>
        <div class="flex h-screen">
            <div class="bg-gray-800 text-white w-64 lg:block hidden">
                
                <div class="nav-logo">
                    <div class="photo hover:bg-slate-700 rounded-md ">
                        <a href="/">
                            <div class="profil flex ml-11 mt-8 w-12 h-12">
                                <img class=" rounded-full" src="{{ asset('images/bg-ryan.jpg') }}" alt="">
                                <div class="kata flex flex-col">
                                    <h1 class="font-bold  text-sm py-2 px-4 leading-none ">Ryan_Rafif</h1>
                                    <h1 class="text-gray-500 text-xs px-4 whitespace-nowrap">Frontend-Dev</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

				<div class="links flex justify-center pt-20">
                    <ul class="py-4 text-sm font-medium mt-4">
                        {{-- <p class="text-center text-xs underline-offset-2 font-light ">MENU</p> --}}
                        <li class="rounded hover:shadow-lg px-4 my-2 py-2 bg-gray-700 cursor-pointer flex items-center space-x-2">
                            <ion-icon class="text-base text-bold px-2" name="home-outline"></ion-icon>
                            <a href="/">Home</a>
                        </li>
                        <li class="rounded hover:shadow-lg px-4 my-2 py-2 hover:bg-gray-700 cursor-pointer flex items-center space-x-2">
                            <ion-icon class="text-base text-bold px-2" name="globe-outline"></ion-icon>
                            <a href="/about">About</a>
                        </li>
                        <li class="rounded hover:shadow-lg px-4 my-2 py-2 hover:bg-gray-700 cursor-pointer flex items-center space-x-2">
                            <ion-icon class="text-base text-bold px-2" name="code-outline"></ion-icon>
                            <a href="/skills">Skills & Project</a>
                        </li>
                        <li class="rounded hover:shadow-lg px-4 my-2 py-2 hover:bg-gray-700 cursor-pointer flex items-center space-x-2">
                            <ion-icon class="text-base text-bold px-2" name="people-outline"></ion-icon>
                            <a href="/partner">Partner</a>
                        </li>
                    </ul>
                </div>
                <div class="social flex justify-center flex-col pt-24">
                    <p class="text-sm text-center  font-normal">Socials</p>
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
            <div id="m-nav" class="bg-gray-800 text-white w-full lg:hidden flex flex-col h-20">
                <div class="flex p-4 justify-between">
                    <div class="photo flex flex-row">
                        <img class="h-11 w-11 rounded-full" src="{{ asset('images/bg-ryan.jpg') }}" alt="">
                        <div class="kata flex flex-col px-2">
                            <h1 class="font-bold text-sm flex justify-center ">Ryan_Rafif</h1>
                            <p class="text-xs text-gray-500 flex justify-center ">Frontend-Dev</p>
                        </div>
                    </div>
                    <button id="menu-button" class="text-white focus:outline-none px-2 bg-gray-700 shadow-lg rounded">
                        <ion-icon id="open-btn" class="text-3xl" name="menu-outline"></ion-icon>
                        <ion-icon id="close-btn" class="text-3xl hidden" name="close-outline"></ion-icon>                    
                    </button>
                </div>
                <div id="mobile-menu" class="hidden">
                    <ul class="text-base font-meduim flex flex-col justify-center px-2 py-4 ml-4 mt-8">
                        <li class="py-4 hover:bg-gray-700 cursor-pointer"><ion-icon class="text-base px-2" name="home-outline"></ion-icon><a href="/">Home</a></li>
                        <li class="py-4 rounded hover:bg-gray-700 cursor-pointer"><ion-icon class="text-base px-2" name="globe-outline"></ion-icon><a href="/about">About</a></li>
                        <li class="py-4 rounded hover:bg-gray-700 cursor-pointer"><ion-icon class="text-base px-2" name="code-outline"></ion-icon><a href="/skills">Skills & Project</a></li>
                        <li class="py-4 rounded hover:bg-gray-700 cursor-pointer"><ion-icon class="text-base px-2" name="people-outline"></ion-icon><a href="/partner">Partner</a></li>
                    </ul>
                </div>

                <div class="social flex justify-center flex-col pt-24">
                    <p class="text-sm text-center  font-normal">Socials</p>
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
        </div>
    </section>
    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const nav = document.getElementById('m-nav');
            menu.classList.toggle('hidden');
            menu.classList.toggle('bg-gray-800');
            nav.classList.toggle('h-20');
        });

        const close = document.getElementById('close-btn');
        const open = document.getElementById('open-btn');
        open.addEventListener('click',function(){
            close.classList.toggle('hidden');
            open.classList.toggle('hidden');
            
        });
        close.addEventListener('click', function(){
            open.classList.toggle('hidden');
            close.classList.toggle('hidden');
        });
    </script>
</body>
</html>
