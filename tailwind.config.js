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
            },
            keyframes: {
                glow: {
                    '0%, 100%': {
                        boxShadow: '0 0 5px #3b82f6, 0 0 10px #3b82f6',
                    },
                    '50%': {
                        boxShadow: '0 0 20px #3b82f6, 0 0 40px #3b82f6',
                    },
                }
            },
            animation: {
                'glow': 'glow 2s ease-in-out infinite',
            }
        },
    },
    plugins: [],
};
