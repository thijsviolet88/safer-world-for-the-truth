const {css} = require("laravel-mix");
module.exports = {
    mode: 'jit',
    purge: [
        './themes/site/**/*.ss',
        './themes/site/**/*.js',
        './themes/site/**/*.vue',
    ],
    theme: {
        extend: {
            container: {
                center: true,
            },
            colors: {
                white: {
                    DEFAULT: '#fff',
                    dark: '#F1F0EB'
                },
                black: '#000',
                purple: {
                    light: '#4934AE',
                    DEFAULT: '#38278f',
                },
                grey: '#9F9F9F',
            },
            fontFamily: {
                'piazzolla': ['Piazzolla', 'sans-serif'],
                'anonymous': ['Anonymous Pro', 'sans-serif'],
            },
            boxShadow: {
                '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
            },
            typography: {
                DEFAULT: {
                    css: {
                        maxWidth: '100ch', // add required value here
                    },
                },
            },
            plugins: {
              tailwindcss: {},
              autoprefixer: {},
            }
        }},
    plugins: [
        require('@tailwindcss/typography'),
        require('tailwindcss-animated')
    ],
}
