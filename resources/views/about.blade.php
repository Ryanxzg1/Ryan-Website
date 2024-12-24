<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lemon&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,200;0,300;0,500;0,700;0,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
                transform: translateY(0);
            }
        }
        @keyframes fadeInBot {
            from {
                opacity: 0;
                transform: translateY(120px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
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
        @keyframes line-in-left {
            0% {
                width: 40%;
                opacity: 1;
            }
            50% {
                width: 80%;
                opacity: 1;
            }
            100% {
                width: 40%;
                opacity: 1;
            }
        }
        @keyframes expand {
            0% {
                width: 0;
                opacity: 1;
                
            }
            20% {
                width: 25%;
                opacity: 0.6;
            }
            40% {
                width: 50%;
                opacity: 0.6;
            }
            60% {
                width: 80%;
                opacity: 0.6;
            }
            80% {
                width: 50%;
                opacity: 1;
            }
            100% {
                width: 0%;
                opacity: 1;
            }
        }
        .expand {
            animation: expand 5s ease-in-out infinite;
        }
        .line-in-left {
            animation: line-in-left 4s ease-in-out infinite;
        }
        @keyframes fadeInSequential {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in-sequential {
            animation: fadeInSequential 3s ease-in-out forwards;
        }
    </style>
</head>
<body class="bg-white font-poppins">

    <x-navbar></x-navbar>

    <section id="about" class="shadow-2xl h-screen bg-gradient-to-tr from-custom-1 to-custom-13 lg:ml-64 text-white ">
        <div class="tag font-montserrat justify-center lg:ml-20  flex flex-col pt-16">
            <div  class="fade-in-top ">
                <h1 class="font-extrabold italic lg:text-8xl lg:block hidden text-shadow-custom-light drop-shadow-2xl">"Education is the foundation 
                    <span class="text-slate-500 fade-in-right text-shadow-custom-dark-1">for building civilization"</span>
                </h1>
                
                <button class="hidden fade-in-bot animate-bounce px-4 py-2 rounded-lg bg-black hover:bg-slate-600 hover:text-slate-100 text-sm font-bold ">
                    <a href="#about-2">
                        See more    
                    </a>
                </button>
            </div>

            {{--  Mobile headline --}}
            <div class="mobile-headline pt-16 lg:hidden px-6 pl-16  fade-in-top text-shadow-xl">
                <h1 class="font-extrabold italic text-5xl leading-normal lg:hidden ">"Education is the foundation 
                    <span class="text-slate-500 fade-in-right">for building civilization"</span>
                </h1>
                
                <button class="hidden fade-in-bot animate-bounce px-4 py-2 mt-4 rounded-lg bg-black text-sm font-bold lg:hidden">
                    <a href="#about-2">
                        See more    
                    </a>
                </button>
            </div>
        </div>
        <hr id="animated-hr" class="border-t-2 ml-20 mt-8 w-1/3 border-white shadow-2xl opacity-0 ">
    </section>
    
    {{-- About 2 --}}
    <section id="about-2" class="about-2 bg-gradient-to-br from-custom-1 to-custom-11 lg:ml-64 pt-10 text-white">
        <div class="content px-4 ">
          <div id="tagline" class="headline lg:pt-10 pt-24">
            <h1 class="lg:text-6xl text-5xl text-center font-extrabold">
              It's all <span class="text-slate-500">about</span> Me
            </h1>
            <div class="deskripsi pt-4 text-justify lg:w-4/6 mx-auto opacity-65">
              <p>
                As a Frontend Developer and student, I'm dedicated to building websites that not only look great but also perform flawlessly. I believe in user-centric design and prioritize accessibility to ensure a positive experience for everyone. Take a look at my experience and let me know if you'd like to discuss how I can help elevate your web presence.
              </p>
            </div>
          </div>

          <div class="photo-card flex justify-center mt-10 pb-10 pt-10 gap-8 flex-wrap ">
            {{-- Photo 1 --}}
            <div class="max-w-64 rounded overflow-hidden shadow-2xl bg-white text-gray-800 relative group">
              <img class="w-64" src="{{ asset('img/about-1.jpg') }}" alt="PAT">
              <div class="absolute inset-0 bg-white bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-6 py-4">
                <div class="font-bold text-xl mb-2">Evaluated PAT</div>
                <p class="text-gray-700 text-sm">
                  Picture when I'm meeting with a scout organization
                </p>
              </div>
            </div>

            {{-- Photo 2 --}}
            <div class="max-w-64 rounded overflow-hidden shadow-2xl bg-white text-gray-800 relative group">
              <img class="w-64" src="{{ asset('img/about-2.jpg') }}" alt="P5">
              <div class="absolute inset-0 bg-white bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-6 py-4">
                <div class="font-bold text-xl mb-2">Observation P5</div>
                <p class="text-gray-700 text-sm">
                  Picture when my friend and I observed graphiku
                </p>
              </div>
            </div>

            {{-- Photo 3 --}}
            <div class="max-w-64 rounded overflow-hidden shadow-2xl bg-white text-gray-800 relative group">
              <img class="w-64" src="{{ asset('img/about-7.jpg') }}" alt="Lomba">
              <div class="absolute inset-0 bg-white bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-6 py-4">
                <div class="font-bold text-xl mb-2">LKS Klaten</div>
                <p class="text-gray-700 text-sm">
                  Picture when my friend and I joined the competition
                </p>
              </div>
            </div>

            {{-- Photo 4 --}}
            <div class="max-w-56 rounded overflow-hidden shadow-2xl bg-custom-1 text-gray-800 relative group">
              <img class="w-56" src="{{ asset('img/about-4.jpg') }}" alt="P5">
              <div class="absolute inset-0 bg-white bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-6 py-4">
                <div class="font-bold text-xl mb-2">Watch Movie</div>
                <p class="text-gray-700 text-sm">
                  Picture when I watched the Haikyuu Movie in Yogyakarta City
                </p>
              </div>
            </div>

            {{-- Photo 5 --}}
            <div class="hidden max-w-56 rounded overflow-hidden shadow-2xl bg-white text-gray-800 relative group">
              <img class="w-56" src="{{ asset('img/about-5.jpg') }}" alt="P5">
              <div class="absolute inset-0 bg-white bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-6 py-4">
                <div class="font-bold text-xl mb-2">With My Mom</div>
                <p class="text-gray-700 text-sm">
                  Picture when me and my mom take picture together 
                </p>
              </div>
            </div>

            {{-- Photo 6 --}}
            <div class="max-w-56 rounded overflow-hidden shadow-2xl bg-custom-1 text-gray-800 relative group">
              <img class="w-56" src="{{ asset('img/about-8.jpg') }}" alt="P5">
              <div class="absolute inset-0 bg-white bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-6 py-4">
                <div class="font-bold text-xl mb-2">Look Sunrise in Beach</div>
                <p class="text-gray-700 text-sm">
                  Picture when my friend and I watched the sunrise at Baron's Beach
                </p>
              </div>
            </div>

            {{-- Photo 7 --}}
            <div class="max-w-56 rounded overflow-hidden shadow-2xl bg-white text-gray-800 relative group">
              <img class="w-56" src="{{ asset('img/about-6.jpg') }}" alt="P5">
              <div class="absolute inset-0 bg-white bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-6 py-4">
                <div class="font-bold text-xl mb-2">Holiday in Beach</div>
                <p class="text-gray-700 text-sm">
                  Picture when my friend and I were on holiday at the beach
                </p>
              </div>
            </div>

            {{-- Photo 8 --}}
            <div class="max-w-56 rounded overflow-hidden shadow-2xl bg-white text-gray-800 relative group">
              <img class="w-56" src="{{ asset('img/about-9.jpg') }}" alt="P5">
              <div class="absolute inset-0 bg-white bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-6 py-4">
                <div class="font-bold text-xl mb-2">Playing Futsal</div>
                <p class="text-gray-700 text-sm">
                  Picture when my friend and I played futsal at Moon Soccer
                </p>
              </div>
            </div>

            {{-- Photo 9 --}}
            <div class="max-w-56 rounded overflow-hidden shadow-2xl bg-white text-gray-800 relative group">
              <img class="w-56" src="{{ asset('img/about-10.jpg') }}" alt="P5">
              <div class="absolute inset-0 bg-white bg-opacity-90 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-6 py-4">
                <div class="font-bold text-xl mb-2">Watch Sunrise</div>
                <p class="text-gray-700 text-sm">
                  Picture when I watched the sunrise in the village
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script>
         document.addEventListener('DOMContentLoaded', function () {
            const tagline = document.getElementById('tagline');
            
            // Intersection Observer for fade-in animation
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in-bot');
                    } else {
                        entry.target.classList.remove('fade-in-bot');
                    }
                });
            };

            const observer = new IntersectionObserver(observerCallback, observerOptions);
            observer.observe(tagline);
        });

        document.addEventListener('DOMContentLoaded', function () {
            const hrElement = document.getElementById('animated-hr');
            hrElement.classList.add('line-in-left');
        });

        document.addEventListener('DOMContentLoaded', function () {
            const photoCardsSection = document.querySelector('.photo-card');
            const photoCards = document.querySelectorAll('.photo-card > div');

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        photoCards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add('fade-in-sequential');
                            }, index * 1000); // 500ms delay between each card
                        });
                    } else {
                        photoCards.forEach(card => {
                            card.classList.remove('fade-in-sequential');
                        });
                    }
                });
            };

            const observer = new IntersectionObserver(observerCallback, observerOptions);
            observer.observe(photoCardsSection);
        });
    </script>
</body>
</html>
