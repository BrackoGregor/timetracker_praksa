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
      white: '#fff',
      green: '#158800',
      red: '#D13A26',
      black: '#000',
      gray: {
        light: '#E3E3E3',
        loginInputText: '#A2A2A2',
        loginInputBg: '#E6E6E6',
        DEFAULT: '8195A7',
      },
    },
    fontFamily: {
      customFont: ['Barlow Condensed', 'sans-serif'],
    },
    extend: {
      boxShadow: {
        login: '15px 15px 40px rgba(0, 0, 0, 0.25)',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}