import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                lora: ['Lora', 'serif'],
                playfair: ['Playfair Display', 'serif'],
            },

            colors: {
                "blue-navy": "#000925",
                
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
