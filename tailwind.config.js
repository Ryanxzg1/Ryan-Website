/** @type {import('tailwindcss').Config} */

const gradients = require('tailwindcss-gradients');
const textshadow = require('tailwindcss-textshadow');
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      width: {
        '400px': '400px', // Nama kelas di sini adalah 'w-72px'
        '450px': '450px', // Nama kelas di sini adalah 'w-72px'
         // Nama kelas di sini adalah 'w-120px'
        // Tambahkan nilai lainnya sesuai kebutuhan
      },
      height: {
        '250px': '250px',
        '380px': '380px'
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
        'bebas': ['Bebas Nue'],
        'montserrat': ['Montserrat'],
        'raleway': ['Raleway'],
      },
      colors: {
        'custom-0': '#14213D',
        'custom-1': '#15202B',
        'custom-2': '#1A2421',
        'custom-3': '#2C2541',
        'custom-4': '#000000',
        'custom-5': '#FCA311',
        'custom-6': '#E5E5E5',
        'custom-7': '#FFFFFF',
        'custom-8': '#A9A9A9',
        'custom-9': '#3B4F64',
        'custom-10': '#667D8C',
        'custom-11': '#2D4156',
        'custom-12': '#4C5D6E',
        'custom-13': '#203748',
        'custom-14': '#E0E0E0',
        'custom-15': '#FF6347',
        'custom-16': '#1E90FF',
      },
      fontSize: {
        '8xl' : '5rem'
      },
      backgroundImage: {
        'home': "url('/img/bg-home.jpg')",
      },
      textShadow: {
        'custom-light': '1px 1px 2px rgba(255, 255, 255, 0.75)',
        'custom-dark-1': '1px 1px 2px rgba(0, 0, 0, 0.5)',
        'custom-dark-2': '2px 2px 4px rgba(0, 0, 0, 0.5)',
        // Tambahkan varian lainnya sesuai kebutuhan
      }
    },
  },
  plugins: [
    gradients,
    textshadow,
  ],
}