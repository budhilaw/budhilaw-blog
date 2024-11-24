const { addDynamicIconSelectors } = require('@iconify/tailwind');

/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "selector",
  important: false,
  content: [
    './**/**.php',
    "./node_modules/flyonui/dist/js/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    // Iconify plugin
    addDynamicIconSelectors(),

    require("flyonui"),
    require("flyonui/plugin")
  ],
}
