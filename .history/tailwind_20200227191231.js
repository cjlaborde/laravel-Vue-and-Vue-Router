const plugin = require('tailwindcss/plugin')

module.exports = {
  theme: {
    fontFamily: {
      'open-sans': ['Open Sans', 'Arial', 'sans-serif'],
    }
  },
  plugins: [
    plugin(function({ addBase, config }) {
      addBase({
        'h1': { fontSize: config('theme.fontSize.2xl') },
        'h2': { fontSize: config('theme.fontSize.xl') },
        'h3': { fontSize: config('theme.fontSize.lg') },
      })
    })
  ]
}