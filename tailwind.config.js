/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      colors: {
        brand: {
          blue: {
            light: "",
            DEFAULT: "#57ced0",
            dark: "#2c3e50",
          },
          green: {
            light: "",
            DEFAULT: "#8dc92f",
            dark: "#3e8e41",
          },
        },
      },
    },
    plugins: [],
  },
};
