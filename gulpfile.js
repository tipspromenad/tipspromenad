var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');
/**
 * Uncomment for LESS version
 */
elixir(function(mix) {
    mix
        // Copy webfont files from /vendor directories to /public directory.
        .copy('vendor/fortawesome/font-awesome/fonts', 'public/fonts')
        .copy('vendor/twbs/bootstrap/fonts', 'public/fonts')
        .copy('vendor/twbs/bootstrap/dist/js/bootstrap.min.js', 'public/js/vendor')
        /**
         * Frontend
         */
        .less([ // Process front-end stylesheets
            'frontend/main.less'
        ], 'resources/assets/css/frontend')
        .styles([  // Combine pre-processed CSS files
            'frontend/main.css'
        ], 'public/css/frontend.css', 'resources/assets/css')
        .scripts([ // Combine front-end scripts
            'plugins.js',
            'frontend/main.js'
        ], 'public/js/frontend.js', 'resources/assets/js')

        //VueJS scripts
        .scripts([ //combine all VueJS - stuff
            'VueJS.min.js',
            'vue-resources.min.js',
            // later on i will put all Vue-scripts here aswell.
        ], 'public/js/vue.js', 'resources/assets/js/frontend/VueJS')

        /**
         * Skapa
         */
        .less([
            'frontend/skapa/skapa-all.less'
        ], 'public/css/skapa')
        .scripts([
            '../../plugins.js',
            'vendor/jquery.slimscroll.min.js',
            'vendor/jquery.truncate.min.js',
            'main.js'
        ], 'public/js/skapa.js', 'resources/assets/js/frontend/skapa')

        /**
         * Backend
         */
        .less([ // Process back-end stylesheets
            'backend/AdminLTE.less',
        ], 'resources/assets/css/backend')
        .styles([ // Combine pre-processed CSS files
            'bootstrap.css',
            'font-awesome.css',
            'backend/main.css',
            'backend/skin.css'
        ], 'public/css/backend.css', 'resources/assets/css')
        .scripts([ // Combine back-end scripts
            'plugins.js',
            'backend/main.js'
        ], 'public/js/backend.js', 'resources/assets/js')

        // Apply version control
        .version([
                    // frontend
                    "css/frontend.css", "js/frontend.js",
                    // skapa
                    "css/skapa/skapa-all.css", "js/skapa.js",
                    // backend
                    "css/backend.css", "js/backend.js"
                ])

        .livereload();

});
