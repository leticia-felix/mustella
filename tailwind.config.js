import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },

        colors:{

        'high-purplle':'#1B132D',
        'orange': '#FC9A03',
        'basic-gray': '#C1C1C1',
        'purplle':'#563274',
        'gray':'#D9D9D9'

        },
    },

    plugins: [forms],
};
