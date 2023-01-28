const laravelNuxt = require("laravel-nuxt");

module.exports = laravelNuxt({
    // Options such as mode, srcDir and generate.dir are already handled for you.
    components: true,
    modules: [],
    plugins: [],
    buildModules: ["@nuxt/postcss8"],
    build: {
        postcss: {
            plugins: {
                tailwindcss: {},
                autoprefixer: {},
            },
        },
    },
    css: [
        '@/assets/css/main.css',
      ],
    head : {
        htmlAttrs : {
                
        }
    }
});
