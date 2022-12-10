const mix = require("laravel-mix");

// mix.sass("resources/css/ejemplo.scss","public/css/app.css");
//     mix.browserSync("http://ejercicio.test/");

mix.sass("resources/css/main.scss","public/css/app.css");
    mix.browserSync("http://ejercicio.test/");

    mix.js("resources/js/main.js","public/js/main.js");