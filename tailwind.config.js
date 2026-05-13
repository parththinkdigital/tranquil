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
            colors: {
                primary: '#0F766E',
                secondary: '#14B8A6',
                cta: '#0369A1',
                background: '#F0FDFA',
                'text-main': '#134E4A',
            },
            fontFamily: {
                heading: ['Cinzel', ...defaultTheme.fontFamily.serif],
                body: ['Josefin Sans', ...defaultTheme.fontFamily.sans],
                sans: ['Josefin Sans', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                'md': '0 4px 6px rgba(0,0,0,0.1)',
                'lg': '0 10px 15px rgba(0,0,0,0.1)',
                'xl': '0 20px 25px rgba(0,0,0,0.15)',
            }
        },
    },

    plugins: [forms],
};
