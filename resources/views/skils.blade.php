<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skils & Project</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lemon&family=Poppins:ital,wght@0,200;0,300;0,500;0,700;0,900;1,500;1,900&display=swap" rel="stylesheet">

    <style>
        .card-1,
        .group img {
            transition: transform 1s ease, box-shadow 1s ease, opacity 1s ease;
        }

        .card-1:hover,
        .group:hover img {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .card-1,
        .group {
            opacity: 0;
            transform: translateY(20px);
        }

        .fade-in {
            animation: fadeIn 1.5s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

<body class="bg-white font-poppins">
    <x-navbar></x-navbar>

    {{-- Skills Section --}}
    <section id="skills" class="bg-gradient-to-br from-custom-1 to-custom-13 lg:ml-64 text-white flex flex-col justify-center items-center pb-20">
        <div class="w-full max-w-7xl pt-24">
            <div class="w-full px-4 md:px-8 lg:px-16">
                <div class="text-center fade-in-top">
                    <h1 class="text-4xl md:text-5xl font-extrabold">How <span class="text-slate-500">can</span> I do <span class="text-slate-500">for</span> you</h1>
                </div>

                <div class="box-card w-full flex flex-wrap justify-center pt-10 gap-8">
                    <div class="card-1 w-full sm:w-60 md:w-72 lg:w-80 bg-slate-700 rounded-lg p-6 text-center shadow-lg">
                        <div class="flex flex-row justify-center items-center text-orange-500">
                            <ion-icon name="logo-html5" class="text-4xl"></ion-icon>
                            <h1 class="font-bold text-xl md:text-2xl ml-2">HTML</h1>
                        </div>
                        <p class="text-justify text-sm md:text-base text-gray-200 mt-4">
                            Provides the fundamental structure and content of web pages, defining elements like headings, paragraphs, images, and links.
                        </p>
                    </div>

                    <div class="card-1 w-full sm:w-60 md:w-72 lg:w-80 bg-slate-700 rounded-lg p-6 text-center shadow-lg">
                        <div class="flex flex-row justify-center items-center text-blue-400">
                            <ion-icon name="logo-css3" class="text-4xl"></ion-icon>
                            <h1 class="font-bold text-xl md:text-2xl ml-2">CSS</h1>
                        </div>
                        <p class="text-justify text-sm md:text-base text-gray-200 mt-4">
                            Styles the visual presentation of HTML elements, controlling aspects such as layout, colors, fonts, and animations.
                        </p>
                    </div>

                    <div class="card-1 w-full sm:w-60 md:w-72 lg:w-80 bg-slate-700 rounded-lg p-6 text-center shadow-lg">
                        <div class="flex flex-row justify-center items-center text-yellow-400">
                            <ion-icon name="logo-javascript" class="text-4xl"></ion-icon>
                            <h1 class="font-bold text-xl md:text-2xl ml-2">JavaScript</h1>
                        </div>
                        <p class="text-justify text-sm md:text-base text-gray-200 mt-4">
                            Adds interactivity and dynamic behavior to websites, enabling features like form validation, image sliders, and real-time updates.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- My Projects Section --}}
    <section id="my-projects" class="min-h-screen bg-gradient-to-br from-custom-1 to-custom-13 lg:ml-64 text-white flex flex-col justify-center items-center">
        <div class="w-full max-w-7xl">
            <div class="container mx-auto px-4 md:px-8 lg:px-16 pt-24 pb-10">
                <h2 class="fade-in-right text-3xl md:text-4xl font-extrabold text-center mb-8 md:mb-12">My <span class="text-slate-500">Projects</span></h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8">
                    <div class="relative group">
                        <a href="https://ryanxzg1.github.io/MyProfile.github.io/">
                            <img src="{{ asset('img/projek-1.jpg') }}" alt="Project 1" class="w-full h-full object-cover rounded-lg shadow-lg">
                        </a>
                    </div>

                    <div class="relative group">
                        <a href="https://ryanxzg1.github.io/Stemsend/Web%20ITSC/#home">
                            <img src="{{ asset('img/projek-2.jpg') }}" alt="Project 2" class="w-full h-full object-cover rounded-lg shadow-lg">
                        </a>
                    </div>

                    <div class="relative group">
                        <a href="https://ryanxzg1.github.io/JapanStreet.github.io/">
                            <img src="{{ asset('img/projek-3.jpg') }}" alt="Project 3" class="w-full h-full object-cover rounded-lg shadow-lg">
                        </a>
                    </div>

                    <div class="relative group">
                        <a href="https://amanah-trans.vercel.app/">
                            <img src="{{ asset('img/projek-4.jpg') }}" alt="Project 4" class="w-full h-full object-cover rounded-lg shadow-lg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Animation for the "Skills" section
            const skillsSection = document.querySelector('#skills');
            const skillsCards = skillsSection.querySelectorAll('.card-1');

            const observerSkills = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        skillsCards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add('fade-in');
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, index * 200);
                        });
                    } else {
                        skillsCards.forEach(card => {
                            card.classList.remove('fade-in');
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                        });
                    }
                });
            }, { threshold: 0.5 });

            observerSkills.observe(skillsSection);

            // Animation for the "My Projects" section
            const myProjectsSection = document.querySelector('#my-projects');
            const animatedElements = myProjectsSection.querySelectorAll('.group');

            const observerProjects = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animatedElements.forEach((element, index) => {
                            setTimeout(() => {
                                element.classList.add('fade-in');
                                element.style.opacity = '1';
                                element.style.transform = 'translateY(0)';
                            }, index * 200);
                        });
                    } else {
                        animatedElements.forEach(element => {
                            element.classList.remove('fade-in');
                            element.style.opacity = '0';
                            element.style.transform = 'translateY(20px)';
                        });
                    }
                });
            }, { threshold: 0.5 });

            observerProjects.observe(myProjectsSection);
        });
    </script>
</body>

</html>
