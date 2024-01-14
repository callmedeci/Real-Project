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
        },
        colors:{
            black:"rgba(17,24,39)",
            white:"rgba(255,255,255)",
            indigo:"rgba(79,70,229)",
            sorme:"rgba(40,41,62)",
            gray:"rgba(65,65,85)",
            indi500:"rgba(99,102,241)",
            gray200:"rgba(229,229,229)",
            gray100:"rgba(55,55,78)"

        },
    },
  },
  plugins: [],
}

