/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'pridi': ["Pridi", "sans-serif"],
      'squada': ['Squada One', "sans serif"],
      'galano': ['Galano, Helvetica, Arial, sans-serif'],
    },
    extend: {
      colors: {
        deadpool: {
          red: '#FF0000',
          black: '#000000',
          white: '#FFFFFF',
          gray: '#B0B0B0',
          yellow: '#FFD700',
        },
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
}
