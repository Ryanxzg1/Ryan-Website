document.getElementById('menu-button').addEventListener('click', function() {
	const menu = document.getElementById('mobile-menu');
	const nav = document.getElementById('m-nav');
	menu.classList.toggle('hidden');
	menu.classList.toggle('bg-gray-800');
	nav.classList.toggle('h-full');
});
	
	const close = document.getElementById('close-btn');
	const open = document.getElementById('open-btn');
	open.addEventListener('click', function() {
	close.classList.toggle('hidden');
	open.classList.toggle('hidden');
});
	close.addEventListener('click', function() {
	open.classList.toggle('hidden');
	close.classList.toggle('hidden');
});

const typingText = document.getElementById('typing-text');
const typingDescription = document.getElementById('typing-description');

        typingText.addEventListener('animationend', () => {
            typingText.classList.add('typing-end');
        });

        typingDescription.addEventListener('animationend', () => {
            typingDescription.classList.add('typing-end');
        });

        const home = document.getElementById('animasi-teks');
        home.addEventListener('mouseover', function() {
            home.classList.remove('animate-bounce');
        });



