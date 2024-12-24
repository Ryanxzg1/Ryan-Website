<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lemon&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,200;0,300;0,500;0,700;0,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        .form {
            opacity: 0; 
            transform: translateY(20px); 
            transition: opacity 1s ease, transform 0.5s ease; 
        }
        .form.show { 
            opacity: 1;
            transform: translateY(0);
        }
        .maps {
            transform: translateX(-20px); 
            transition: transform 1s ease-in-out;
        }
        .maps.show {
            transform: translateX(0);
        }
        .fade-in {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 1s ease-in-out, transform 0.3s ease;
        }
        .fade-in.visible {
            opacity: 1;
            transform: scale(1);
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
            animation: fadeInTop 1s ease-in-out forwards;
        }
        .fade-in-bot {
            animation: fadeInBot 1.5s ease-in-out forwards;
        }

        /* Custom loader styles */
        .loader {
            border-top-color: transparent;
            border-right-color: white;
            border-bottom-color: white;
            border-left-color: white;
        }
    </style>
</head>
<body class="font-poppins">
    <x-navbar></x-navbar>

    <section class="contact shadow-2xl bg-gradient-to-br from-custom-1 to-custom-9 text-white lg:ml-64 flex justify-center">
        <div class="w-full pt-16 rounded-lg shadow-lg flex flex-col ">

            <div class="judul pt-6 fade-in-top">
                <h1 class="text-4xl font-bold text-center mb-2 text-shadow-custom-dark-1">Contact <span class="text-slate-500">Me</span></h1>
                <p class="text-gray-300 mb-2 text-center text-shadow-custom-dark-1">If you're interested, you can contact me using the form below.</p>
            </div>

            <div class="form shadow-2xl drop-shadow-2xl w-5/6 flex lg:flex-row flex-col border-2 border-slate-500 lg:py-4 lg:px-4 mb-10 mt-2 mx-auto lg:items-center">
                <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d247.12736859694536!2d110.59109972329611!3d-7.679074825512035!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1722953356605!5m2!1sid!2sid" 
                    class="lg:w-450px lg:h-380px w-full h-250px" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <form id="contactForm" name="form-ryan" class="space-y-6 px-6 lg:py-0 py-10  w-full text-black">
                    <div class="fade-in drop-shadow-xl shadow-xl">
                        <label for="name" class="block text-sm font-medium text-white">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    
                    <div class="fade-in drop-shadow-xl shadow-xl">
                        <label for="email" class="block text-sm font-medium text-white">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    
                    <div class="fade-in drop-shadow-xl shadow-xl">
                        <label for="message" class="block text-sm font-medium text-white">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 p-3 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-indigo-500 sm:text-sm" required></textarea>
                    </div>

                    <div class="fade-in drop-shadow-xl shadow-xl">
                        <button type="submit" id="submitBtn" class="w-full bg-black hover:bg-slate-500 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:scale-105 flex justify-center items-center">
                            <span class="submit-text">Send Message</span>
                            <span class="loader hidden animate-spin ml-2 h-5 w-5 border-2 border-t-2 rounded-full"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('.form');
            const maps = document.querySelector('.maps');
            const formElements = document.querySelectorAll('.fade-in');
            
            setTimeout(() => {
                form.classList.add('show');
                maps.classList.add('show');
                formElements.forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.add('visible');
                    }, index * 150); // Adjust the delay between elements (in milliseconds)
                });
            }, 300); // Initial delay for map and form container
        });

        const scriptURL = 'https://script.google.com/macros/s/AKfycbzHtTuDy4ukEMtH1icfLO_QcTONlc4X__FF6NooegLqr145OCFdZi73oTTnNlLhdK8i/exec';
        const form = document.forms['form-ryan'];
        const submitBtn = document.getElementById('submitBtn');
        const submitText = submitBtn.querySelector('.submit-text');
        const loader = submitBtn.querySelector('.loader');

        form.addEventListener('submit', e => {
            e.preventDefault();

            // Show loading animation
            submitText.classList.add('hidden');
            loader.classList.remove('hidden');

            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => {
                    console.log('Success!', response);
                    form.reset(); // Reset the form after successful submission

                    // Hide loading animation
                    loader.classList.add('hidden');
                    submitText.classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    // Hide loading animation even in case of error
                    loader.classList.add('hidden');
                    submitText.classList.remove('hidden');
                });
        });
    </script>
</body>
</html>
