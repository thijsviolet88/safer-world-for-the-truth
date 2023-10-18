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
                purple: '#38278f',
            },
            typography: {
                DEFAULT: {
                    css: {
                        maxWidth: '100ch', // add required value here
                    },
                },
            },
            fontFamily: {
                'piazzolla': ['Piazzolla', 'sans-serif'],
            },
            plugins: {
              tailwindcss: {},
              autoprefixer: {},
            }
        }},
    plugins: [
        require('@tailwindcss/typography'),
    ],
}
