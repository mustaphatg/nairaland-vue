/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/nuxt/components/**/*.{js,vue,ts}",
    "./resources/nuxt/layouts/**/*.vue",
    "./resources/nuxt/pages/**/*.vue",
    "./resources/nuxt/plugins/**/*.{js,ts}",
    "./resources/nuxt/*.{js,ts,html}",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}
