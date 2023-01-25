const { fontFamily } = require("tailwindcss/defaultTheme");
const plugin = require("tailwindcss/plugin");

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
        sans: ["Poppins", ...fontFamily.sans],
        serif: ["Playfair DisplayVariable", ...fontFamily.serif],
      },
      colors: {
        primary: {
          50: "#CBDFE3",
          100: "#BED7DC",
          200: "#A4C6CE",
          300: "#89B6C0",
          400: "#6FA5B1",
          500: "#5693A1",
          600: "#43727C",
          700: "#2F5058",
          800: "#1C2F33",
          900: "#080D0F",
        },
        secondary: {
          50: "#FDFAF4",
          100: "#FBF3E5",
          200: "#F5E5C6",
          300: "#F0D7A8",
          400: "#EBC989",
          500: "#E3B359",
          600: "#DB9D29",
          700: "#AE7C1E",
          800: "#7E5A15",
          900: "#4E380D",
        },
      },
    },
  },
  plugins: [
    plugin(function ({ addUtilities }) {
      addUtilities({
        ".text-shadow-white": {
          "text-shadow": "0 0 10px rgba(255, 255, 255, 1)",
        },
      });
    }),
  ],
};
