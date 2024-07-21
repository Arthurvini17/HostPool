/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
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
  plugins: [],
}