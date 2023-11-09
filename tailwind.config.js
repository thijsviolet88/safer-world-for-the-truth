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
            fontFamily: {
                'piazzolla': ['Piazzolla', 'sans-serif'],
                'anonymous-pro': ['Anonymous Pro', 'sans-serif'],
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
    ],
}
