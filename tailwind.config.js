module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            mono: ['Fira Mono', 'monospace'],
            serif: ['Poppins', 'serif'],

        },
        boxShadow: {

            inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.3)',
            innertop: 'inset 0 -2px 4px 0 rgba(0, 0, 0, 0.3)',
        },
        extend: {

        },
    },
    variants: {
        linearGradients: ['hover', 'responsive'],
        extend: {},
    },
    plugins: [
    ],
}
