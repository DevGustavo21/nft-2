import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },

        screens: {
            'sm': '476px',
            // => @media (min-width: 576px) { ... }

            'md': '760px',
            // => @media (min-width: 960px) { ... }

            'lg': '1240px',
            // => @media (min-width: 1440px) { ... }
        },
    },

    plugins: [forms],
};
