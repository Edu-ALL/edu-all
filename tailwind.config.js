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
                // Home
                "sg-header":
                    "url('../../public/assets/img/home/sg/header.png')",
                "sign-me":
                    "url('../../public/assets/img/sign-me/header-consultation-page-1.webp')",

                // Program
                "program-image-1":
                    "url('../../public/assets/img/programs/Admission Mentoring.webp')",
                "program-image-2":
                    "url('../../public/assets/img/programs/Passion Project-Mentoring Program.webp')",
                "program-image-3":
                    "url('../../public/assets/img/programs/Academic &-Test Preparation.webp')",

                // Admission mentoring
                // Undergraduate
                "undergraduate-header":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/Adm mentoring undergraduate resize.webp')",
                "undergraduate-do":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/undergraduate photos.webp')",

                // Transfer
                "transfer-header":
                    "url('../../public/assets/img/admission mentoring/Master transfer/Adm mentoring master resize.webp')",
                "transfer-do":
                    "url('../../public/assets/img/admission mentoring/Master transfer/master transfer photos.webp')",

                // Graduate
                "graduate-header":
                    "url('../../public/assets/img/admission mentoring/Graduate/Adm mentoring graduate resize.webp')",
                "graduate-do":
                    "url('../../public/assets/img/admission mentoring/Graduate/Graduate photos.webp')",

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
                    "url('../../public/assets/img/passion_project_mentoring/scientific research.png')",

                // header upcomming event
                "upcomming-header":
                    "url('../../public/assets/img/banner/Upcoming event banner.webp')",

                // header mentor
                "mentor-header":
                    "url('../../public/assets/img/mentor/header.png')",
            },
            fontFamily: {
                primary: "Asap, sans-serif",
                // title: "Maven Pro, sans-serif",
                // secondary: "Source Sans Pro, sans-serif",
                // body: "Roboto, sans-serif",
                // inter: "Roboto, sans-serif",
            },
            colors: {
                primary: "#233469",
                yellow: "#f78614",
                // navbar: "#7895C7",
                // secondary: "#7895C7",
                // primary: "#081034",
                // "top-navbar": "#666666",
                // body: "#7A7A7A",
                // dark: "#1d1d1d",
                // light: "#ffffff",
                // background: "#f6f6f6",
                // text: "#546999",
                // "subnavbar-dark": "#333333",
                // "subnavbar-text": "#aaaaaa",
                // "subnavbar-white": "#ffffff",
                // "blue-light": "#1eb5f6",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
