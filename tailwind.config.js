/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      colors: {
        brand: {
          blue: {
            50: "#E4FBFB",
            100: "#C4F6F7",
            200: "#8EEFF0",
            300: "#54E6E9",
            400: "#1EDEE1",
            500: "#16A5A8",
            600: "#128587",
            700: "#0D6263",
            800: "#094344",
            900: "#041F20",
            950: "#021212",
          },
          green: {
            50: "#F4FAEA",
            100: "#E9F5D6",
            200: "#D1EBA8",
            300: "#BBE17F",
            400: "#A6D756",
            500: "#8DC92F",
            600: "#72A126",
            700: "#55781C",
            800: "#374F12",
            900: "#1D290A",
            950: "#0F1505",
          },
        },
      },
    },
    plugins: [],
  },
};
