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
                'bsl-light':"#969FFF",
                'bsl-accent':"#FF63B1",
            },
            backgroundImage: {
                'lineas-banner-top': "url('/img/lineas2.svg')",
                'lineas-service': "url('/img/fondo.png')",
            }
        },
    },
    variants: {
        extend: {
            animation: ['group-hover'],
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        // require("@tailwindcss/typography")
    ],
}
