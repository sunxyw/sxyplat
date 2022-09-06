const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'brand': {
                '50': '#f8f7ff',
                '100': '#f0efff',
                '200': '#dad8ff',
                '300': '#c4c1ff',
                '400': '#9892ff',
                '500': '#6c63ff',
                '600': '#6159e6',
                '700': '#514abf',
                '800': '#413b99',
                '900': '#35317d'
            },
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('daisyui')],
};
