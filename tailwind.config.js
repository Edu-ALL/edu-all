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

                // Admission mentoring
                // Undergraduate
                "undergraduate-header":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/Adm mentoring undergraduate resize.webp')",
                "undergraduate-do":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/undergraduate photos.webp')",
                "undergraduate-list-1":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/Undergraduate1.webp')",
                "undergraduate-list-2":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/Undergraduate2.webp')",
                "undergraduate-list-3":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/Undergraduate3.webp')",
                "undergraduate-list-4":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/Undergraduate4.webp')",
                "undergraduate-list-5":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/Undergraduate5.webp')",

                // Transfer
                "transfer-header":
                    "url('../../public/assets/img/admission mentoring/Master transfer/Adm mentoring master resize.webp')",
                "transfer-do":
                    "url('../../public/assets/img/admission mentoring/Master transfer/master transfer photos.webp')",
                "transfer-list-1":
                    "url('../../public/assets/img/admission mentoring/Master transfer/Transfer 1.webp')",
                "transfer-list-2":
                    "url('../../public/assets/img/admission mentoring/Master transfer/Transfer 2.webp')",
                "transfer-list-3":
                    "url('../../public/assets/img/admission mentoring/Master transfer/Transfer 3.webp')",
                "transfer-list-4":
                    "url('../../public/assets/img/admission mentoring/Master transfer/Transfer 4.webp')",
                "transfer-list-5":
                    "url('../../public/assets/img/admission mentoring/Master transfer/Transfer 5.webp')",
                "transfer-list-6":
                    "url('../../public/assets/img/admission mentoring/Master transfer/Transfer 6.webp')",

                // Graduate
                "graduate-header":
                    "url('../../public/assets/img/admission mentoring/Graduate/Adm mentoring graduate resize.webp')",
                "graduate-do":
                    "url('../../public/assets/img/admission mentoring/Graduate/Graduate photos.webp')",
                "graduate-list-1":
                    "url('../../public/assets/img/admission mentoring/Graduate/Graduate1.webp')",
                "graduate-list-2":
                    "url('../../public/assets/img/admission mentoring/Graduate/Graduate2.webp')",
                "graduate-list-3":
                    "url('../../public/assets/img/admission mentoring/Graduate/Graduate3.webp')",
                "graduate-list-4":
                    "url('../../public/assets/img/admission mentoring/Graduate/Graduate4.webp')",
                "graduate-list-5":
                    "url('../../public/assets/img/admission mentoring/Graduate/Graduate5.webp')",
                "graduate-list-6":
                    "url('../../public/assets/img/admission mentoring/Graduate/Graduate6.webp')",

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

                // header upcomming event
                "upcomming-header":
                    "url('../../public/assets/img/upcoming_events/header-upcoming.webp')",

                // header mentor
                "mentor-header":
                    "url('../../public/assets/img/mentor/header.png')",
            },
            fontFamily: {
                primary: "Asap, sans-serif",
                title: "Maven Pro, sans-serif",
                secondary: "Source Sans Pro, sans-serif",
                body: "Roboto, sans-serif",
                inter: "Roboto, sans-serif",
            },
            colors: {
                navbar: "#7895C7",
                secondary: "#7895C7",
                primary: "#081034",
                primary: "#233469",
                "top-navbar": "#666666",
                body: "#7A7A7A",
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
