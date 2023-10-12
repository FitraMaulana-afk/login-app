/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            xs: "360px",
            sm: "576px",
            md: "786px",
            lg: "992px",
            xl: "1200px",
        },
        container: {
            center: true,
        },
    },
    variants: {
        extend: {
            display: ["group-hover"],
            visibility: ["group-hover"],
        },
    },
};
