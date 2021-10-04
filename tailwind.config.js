module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            mono: ['Fira Mono', 'monospace'],
            serif: ['Poppins', 'serif'],
            cursive: ['Nothing You Could Do', 'cursive']

        },

        extend: {

            colors: {
                bsl:"#4A59FF",
                'bsl-light':"#929bff",
                'bsl-dark':"#2c3599",
                'bsl-accent':"#FF6463",
                'bsl-accent-light':"#ffa2a1",
                'bsl-accent-dark':"#993c3b",

            },
            backgroundImage: {
                'lineas-banner-top': "url('/img/lineas2.svg')",
                'lineas-full': "url('/img/lineas2_full.svg')",
                'lineas-service': "url('/img/fondo.png')",
            }
        },
    },
    variants: {
        extend: {
            animation: ['group-hover'],
            ringWidth: ['hover'],
            ringColor: ['hover'],
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        // require("@tailwindcss/typography")
    ],
}
