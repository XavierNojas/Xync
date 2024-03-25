/** @type {import('tailwindcss').Config} */
export default {
  darkMode:"class",
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing:{
        "big":"48rem"
      }
    },
    fontFamily:{
      nunito:['Nunito', 'sans-serif']
    }
  },
  plugins: [],
}
