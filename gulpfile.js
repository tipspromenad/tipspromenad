var gulp       = require('gulp');
var elixir = require('laravel-elixir');
var livereload = require('gulp-livereload');

/**
 * Uncomment for LESS version
 */
elixir(function(mix) {
    mix
        // Copy webfont files from /vendor directories to /public directory.
        .copy('vendor/fortawesome/font-awesome/fonts', 'public/fonts')
        .copy('vendor/twbs/bootstrap/fonts', 'public/fonts')
        .copy('vendor/twbs/bootstrap/dist/js/bootstrap.min.js', 'public/js/vendor')
    });
elixir(function(mix) {
    mix
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
            'main.js',
        ], 'public/js/skapa.js', 'resources/assets/js/frontend/skapa')

        .browserify('frontend/skapa/skapa.js')

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
});


/**
 * Logic for LiveReload to work properly on watch task.
 */
gulp.on('task_start', function (e) {
    // only start LiveReload server if task is 'watch'
    if (e.task === 'watch') {
        livereload.listen();
    }
});
gulp.task('watch-lr-css', function () {
    // notify a CSS change, so that livereload can update it without a page refresh
    livereload.changed('app.css');
});
gulp.task('watch-lr', function () {
    // notify any other changes, so that livereload can refresh the page
    livereload.changed('app.js');
});
