module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            mono: ['Fira Mono', 'monospace'],
            serif: ['Poppins', 'serif'],

        },

        extend: {
            colors: {
                bsl:"#4A59FF"
            },
        },
    },
    variants: {
        extend: {
            animation: ['group-hover'],
        },
    },
    plugins: [],
}
