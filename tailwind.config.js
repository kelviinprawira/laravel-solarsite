/** @type {import('tailwindcss').Config} */
export default {
    daisyui: {
        themes: ["light", "dark", "cupcake", "bumblebee"],
    },
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('daisyui'),
        require('tailwind-scrollbar-hide'),
    ],
};
