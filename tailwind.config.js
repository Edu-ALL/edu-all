const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                primary: "Asap, sans-serif",
                body: "Roboto, sans-serif",
                secondary: "Source Sans Pro, sans-serif",
            },
            colors: {
                navbar: "#7895C7",
                primary: "#233469",
                "top-navbar": "#666666",
                body: "#7A7A7A",
                yellow: "#F99B24",
                dark: "#1d1d1d",
                light: "#ffffff",
                background: "#f6f6f6",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
