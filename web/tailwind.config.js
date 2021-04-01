module.exports = {
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      inputColor: '#E6E6E6',
      blue: {
        light: '#03779E',
        DEFAULT: '#032A4E',
      },
      green: '#158800',
      red: '#D13A26',
      gray: '#8195A7'
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}