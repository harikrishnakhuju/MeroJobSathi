/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: [
          'Instrument Sans',
          'ui-sans-serif',
          'system-ui',
          'sans-serif',
          'Apple Color Emoji',
          'Segoe UI Emoji',
          'Segoe UI Symbol',
          'Noto Color Emoji',
        ],
        'hanken-grotesk':["Hanken Grotesk", "sans-serif"],
      },
      colors:{
        'black': "#060606"
      },
      fontSize:{
            '2xs': '10px'
      }
    },
  },
  plugins: [],
};
