import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import flowbite from 'flowbite/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: '#f0f3f5',
                    100: '#dce3e8',
                    200: '#b9c7d1',
                    300: '#96abba',
                    400: '#738fa3',
                    500: '#5f7a8f',
                    600: '#4B6584',
                    700: '#3d5268',
                    800: '#2f3f4d',
                    900: '#212c33',
                    950: '#141a1f',
                },
            },
        },
    },
    plugins: [
        forms,
        flowbite,
    ],
};
