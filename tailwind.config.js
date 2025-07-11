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
            },
            fontSize: {
                'xs': '10px'
            },
            screens: {
                'xs': '500px'
            },
            gridTemplateColumns: {
                '1/3': '300px 3fr',
                'auto': '1fr auto'
            },
            gridTemplateRows: {
                'auto': '1fr auto'
            }
        },
    },
    plugins: [],
};
