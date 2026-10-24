/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        paper: 'oklch(0.975 0.012 55)',
        ink: 'oklch(0.24 0.03 35)',
        coral: 'oklch(0.64 0.17 28)',
        gold: 'oklch(0.84 0.15 92)',
        lilac: 'oklch(0.78 0.09 330)',
        line: 'oklch(0.9 0.015 50)',
      },
      fontFamily: {
        sans: ['"Bricolage Grotesque"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

