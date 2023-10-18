/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./public/js/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                light: "#E6E2DE",
                core: "#D0C9C2",
                grey: "#505050",
                primary: "#995A45",
                accent: "#B44E34",
            },
        },
    },
    plugins: [],
};