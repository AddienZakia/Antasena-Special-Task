/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                whiteCustom: "#fafafa",
                blackCustom: "#121212",
                blackLight: "#1e1e1e",
                blueCustom: "#34A3F4",
                purpleCustom: "#A855DD",
                orangeCustom: "#FE7940",
            },
        },
    },
    plugins: [],
};
