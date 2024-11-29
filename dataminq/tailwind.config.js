/** @type {import('tailwindcss').Config} */
const { fontFamily } = require("tailwindcss/defaultTheme");

module.exports = {
  content: ["public/**/*.html"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Ubuntu", ...fontFamily.sans],
        primary: ["Jost", ...fontFamily.sans],
      },
      colors: {
        primary: {
          DEFAULT: "#02162D",
        },
      },
      spacing: {
        4.5: "18px",
        5.5: "22px",
        7.5: "30px",
        15: "60px",
        25: "100px",
      },
      backgroundImage: {
        g1: "linear-gradient(139.65deg, #144D90 22.97%, #0E3461 88.02%)",
        g2: "linear-gradient(139.65deg, #144D90 22.97%, #0E3461 88.02%)",
        hero: 'url("../images/hero-bg.webp")',
      },
      boxShadow: {
        box: "0px 10px 50px rgba(0, 0, 0, 0.05)",
        "box-2": "0px 0px 27px #DAF6F9",
        "box-3": "0px 10px 50px rgba(0, 0, 0, 0.05)",
        "box-4": "0px 0px 27px rgba(20, 77, 144, 0.1)",
        input: "1px 1px 57px rgba(20, 77, 144, 0.08)",
        circle: "0px 10px 40px 10px rgba(0, 0, 0, 0.07)",
      },
    },
  },
  plugins: [],
};
