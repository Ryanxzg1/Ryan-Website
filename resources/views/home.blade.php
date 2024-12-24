<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lemon&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,200;0,300;0,500;0,700;0,900;1,500;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        .typing {
            border-right: 2px solid black;
            white-space: wrap;
            overflow: hidden;
            animation: typing 4s steps(40, end), blink 0.75s step-end infinite;
        }
        .typing-end {
            border-right: none;
            animation: none;
        }
        @keyframes blink {
            from { border-right-color: transparent }
            to { border-right-color: black }
        }
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-120px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInTop {
            from {
                opacity: 0;
                transform: translateY(-120px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInBot {
            from {
                opacity: 0;
                transform: translateY(120px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        .fade-in-left {
            animation: fadeInLeft 2s ease-in-out forwards;
        }
        .fade-in-right {
            animation: fadeInRight 1.5s ease-in-out forwards;
        }
        .fade-in-top {
            animation: fadeInTop 2s ease-in-out forwards;
        }
        .fade-in-bot {
            animation: fadeInBot 1.5s ease-in-out forwards;
        }
    </style>
</head>
<body class="lg:bg-white font-poppins lg:flex">

    <x-navbar>

    </x-navbar>

    <section id="home" class="bg-gradient-to-br from-custom-1 to-custom-2 h-screen lg:w-screen lg:ml-64 flex ">
        <div id="animasi-teks" class="flex flex-col mt-20">
            <div class="home flex lg:pl-20 lg:pt-14 pt-4 lg:mx-0 mx-auto flex-row fade-in-left ">
                <h1 class="text-gray-200 font-medium text-xs pl-5 px-2 ">Frontend-Dev</h1>
                <h1 class="text-white font-medium text-xs px-2 ">|</h1>
                <h1 class="text-slate-400 font-medium text-xs px-2 ">Students</h1>
            </div>

            <div class="isi-home lg:pl-20 flex flex-row">
                <div class="flex flex-col text-shadow-custom-dark-1 ">
                    <h1 class="  text-white text-center lg:text-left font-bold lg:text-5xl text-3xl px-5 pt-10  fade-in-left" id="typing-text">
                        Welcome to my digital playground!
                    </h1>
                    <div class="foto  pt-12 fade-in-left block lg:hidden mx-auto">
                        <div class="border-2 w-fit border-black shadow rounded">
                            <div class="u-foto w-40 border-4 border-slate-700 rounded">
                                <img class="border-2 border-black rounded" src="{{ asset('img/bg-ryan.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <h1 class="text-gray-400 drop-shadow-2xl font-normal lg:text-base text-xs px-5 text-justify w-6/6 py-5 fade-in-left" id="typing-description">
                        Hi, I'm Ryan, a passionate Frontend Developer and student who loves crafting beautiful and functional websites. Take a look around, explore my projects, and feel free to reach out if you'd like to collaborate or learn more about my work.
                    </h1>
                    <h1 class="text-gray-400 font-normal lg:text-sm text-xs px-5 text-justify w-6/6 fade-in-left lg:hidden" id="typing-description">
                </div>
                <div class="foto pr-20 ml-10 pt-14 fade-in-left hidden lg:block">
                    <div class="border-2 border-black shadow rounded">
                        <div class="u-foto h-52 w-52 border-4 border-slate-700 rounded">
                            <img class="border-2 border-black rounded" src="{{ asset('img/bg-ryan.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
