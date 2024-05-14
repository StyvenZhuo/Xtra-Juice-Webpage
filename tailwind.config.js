/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors :{
        "green" : '#598669',
        "yellow" : '#FFFCE5',
        "hijau" : '#4A7A5B',
      }
    },
  },
  plugins: [],
}

