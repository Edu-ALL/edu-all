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
            backgroundImage: {
                "program-image-1":
                    "url('../../public/assets/img/programs/medium-shot-woman-teaching-lesson.jpg')",
                "program-image-2":
                    "url('../../public/assets/img/programs/junior-ferreira-7esRPTt38nI-unsplash.jpg')",
                "program-image-3":
                    "url('../../public/assets/img/programs/aaron-burden-y02jEX_B0O0-unsplash.jpg')",

                // passion project
                "passion-project-bg-entre":
                    "url('../../public/assets/img/passion_project_mentoring/background-entre.webp')",
                "passion-project-bg-entre-2":
                    "url('../../public/assets/img/passion_project_mentoring/background-entre.webp')",
                "passion-project-bg-entre-2":
                    "url('../../public/assets/img/passion_project_mentoring/Rectangle-6.webp')",
                "passion-project-bg-entre-3":
                    "url('../../public/assets/img/passion_project_mentoring/preview-timetable-entrepreneurshiip.webp')",
                "passion-project-bg-scien-1":
                    "url('../../public/assets/img/passion_project_mentoring/background-science.webp')",
                "passion-project-bg-scien-2":
                    "url('../../public/assets/img/passion_project_mentoring/Rectangle-32.webp')",
                "passion-project-bg-scien-3":
                    "url('../../public/assets/img/passion_project_mentoring/timetable-research-crop-300x177.webp')",
            },
            fontFamily: {
                primary: "Asap, sans-serif",
                title: "Maven Pro, sans-serif",
                secondary: "Source Sans Pro, sans-serif",
                body: "Roboto, sans-serif",
            },
            colors: {
                navbar: "#7895C7",
                secondary: "#7895C7",
                primary: "#081034",
                primary: "#233469",
                "top-navbar": "#666666",
                body: "#7A7A7A",
                // yellow: "#F99B24",
                yellow: "#f78614",
                dark: "#1d1d1d",
                light: "#ffffff",
                background: "#f6f6f6",
                text: "#546999",
                "subnavbar-dark": "#333333",
                "subnavbar-text": "#aaaaaa",
                "subnavbar-white": "#ffffff",
                "blue-light": "#1eb5f6",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
