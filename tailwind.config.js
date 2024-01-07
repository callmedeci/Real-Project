/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
      'resources/**/*.{blade.php, js}',
        'public/**/**/*.js'
  ],
  theme: {
    extend: {
        fontFamily: {
            primary: 'Blackout',
            rollFont: 'rollFont',
        }
    },
  },
  plugins: [],
}

