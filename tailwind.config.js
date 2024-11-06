import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],
    theme: {
        extend: {
            fontFamily: {
                in : "'Inter var', sans-serif",
            },
            colors : {        
                prim : '#35C6A8',
                sec : '#FFA17A',       
            },
        },
        screens: {
            sm: '640px', // -> @media (min-width: 640px) { ... }
            md: '768px', // -> @media (min-width: 768px) { ... }
            lg: '1024px', // -> @media (min-width: 1024px) { ... }
            xl: '1280px', // -> @media (min-width: 1280px) { ... }
            '2xl': '1536px', // -> @media (min-width: 1536px) { ... }
        },
    },
    plugins: [
        require('flowbite/plugin'),

        function({ addUtilities }) {
            addUtilities({
              '.font-feature-settings-cv11': {
                'font-feature-settings': '"cv11"',
              },
            }, ['responsive', 'hover']);
          },
    ],
};
