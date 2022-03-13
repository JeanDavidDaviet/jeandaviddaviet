module.exports = {
  content: ["*.php", "./**/*.php"],
  theme: {
    extend: {
      colors: {
        'light-blue': '#439bd0',
        'transparent-blue': '#c7ddf0',
        'transparent-blue-dark': 'rgba(74, 124, 154, 0.3)',
        'light-gray': '#e6e6e6',
      }
    },
    screens: {
      'xs': '460px',
    }
  },
  plugins: [],
  darkMode: 'class',
}
