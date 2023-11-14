/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'default': '#473628'
      },
      backgroundColor: {
        'default': '#473628'
      },
      borderColor: {
        'default': '#473628'
      },
      fontFamily: {
        'chapaza' : 'Chapaza',
        'augusta' : 'Augusta'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

