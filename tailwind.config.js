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
                white: '#fff',
                black: '#000',
                gray: {
                    DEFAULT: '#7C7C7C',
                    dark: '#2a2e33',
                },
                primary: '#04DDBC',
                secondary: '#FFDF34',
                tertiary: '#e98150',
            },
            fontSize: {
                xs: '0.75rem',
                sm: '0.87rem',
                base: '18px',
                lg: '23px',
                xl: '29px',
                '2xl': '39px',
                '3xl': '54px',
            },
            fontFamily: {
                'markpro': ['MarkPro', 'sans-serif'],
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
        // ...
    ],
}
