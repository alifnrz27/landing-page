const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    darkMode: 'class',
    theme: {
        extend: {
            backgroundColor: ['disabled'],
            colors:{
                'primary': '#3688EF',
                'dark-primary': '#212121',
                'dark-secondary': '#3E3E3E',
                'gold' : '#FBEDD3'

            },
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                'source-sans': ['Source Sans Pro', 'sans-serif'],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    purge: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
