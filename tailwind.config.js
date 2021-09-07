const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: ['./source/**/*.blade.php'],
  theme: {
    extend: {
      colors: {
        primary: '#0A47E2',
        secondary: '#FCD925',
      },
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
        heading: ['Work Sans', defaultTheme.fontFamily.sans]
      }
    }
  },
  variants: {},
  plugins: [],
};
