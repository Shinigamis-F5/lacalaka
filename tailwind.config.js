const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        colors: { 
            
            red: {
              light: '#e98d7d',
              DEFAULT: '#f36e57',
              dark: '#ed4023',
            },
            
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                cursive: ["Righteous", "cursive"],
            },
            boxShadow: {
                xl:
                    "0 1px 3px 0 rgba(180, 180, 180, 0.1), 0 1px 2px 0 rgba(180, 180, 180, 0.06)",
            },
        },
        
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
