import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            colors: {
                'dark-blue': '#001427',
                'muted-green': '#708d81',
                'light-yellow': '#f4d58d',
                'bright-red': '#bf0603',
                'dark-red': '#8d0801',
            },
            // fontFamily: {
            //     sans: ['Figtree', ...defaultTheme.fontFamily.sans, require('flowbite/plugin')],
            //     serif: ['Playfair Display', 'serif'],
            // },
            
        },
    },

    plugins: [forms],
};
