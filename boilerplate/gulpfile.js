var gulp  = require( 'gulp' ),
	gutil = require( 'gulp-util' ),

	// CSS related
	sass         = require( 'gulp-sass' ),
	autoprefixer = require( 'gulp-autoprefixer' ),
	mmq          = require( 'gulp-merge-media-queries' ),
	sourcemaps   = require( 'gulp-sourcemaps' ),
	filter       = require( 'gulp-filter' ),
	minifycss    = require( 'gulp-uglifycss' ),

	// JS related
	concat = require( 'gulp-concat' ),
	uglify = require( 'gulp-uglify' ),
	svgSprite = require( 'gulp-svg-sprite' ),

	// Others
	rename  = require( 'gulp-rename' ),
	notify  = require( 'gulp-notify' ),
	plumber = require( 'gulp-plumber' );

// Default Gulp task
gulp.task( 'default', ['front-css', 'inline-css', 'front-js', 'functions-js', 'svgSprite'], function() {

});

// Watch task
gulp.task( 'watch', ['front-css', 'inline-css', 'front-js', 'functions-js', 'svgSprite'], function() {
	// Styles
	gulp.watch( ['src/scss/**/*.scss'], ['front-css'] );
	gulp.watch( ['src/scss/**/*.scss'], ['inline-css'] );

	// Scripts
	gulp.watch( ['src/js/*.js'], ['front-js'] );
	gulp.watch( ['assets/js/functions.js'], ['functions-js'] );
});

// SVG sprite
gulp.task( 'svgSprite', function() {
    return  gulp.src( 'src/svg/*.svg' )
                .pipe( svgSprite({
                    mode : {
                        defs : true
                    }
                }) )
                .pipe( rename( 'icons.svg' ) )
                .pipe( gulp.dest( 'assets/svg' ) );
});

// Styles task
gulp.task( 'front-css', function() {
	return  gulp.src( 'src/scss/style.scss' )
				.pipe( plumber({ errorHandler: notify.onError( 'Error: <%= error.message %>' ) }) )
				.pipe( sourcemaps.init() )
				.pipe( sass({
					errLogToConsole: true,
					//outputStyle: 'compressed',
					//outputStyle: 'compact',
					//outputStyle: 'nested',
					outputStyle: 'expanded',
					precision: 10
				}) )
				.pipe( sourcemaps.write({ includeContent: false }) )
				.pipe( sourcemaps.init({ loadMaps: true }) )
				.pipe( autoprefixer( {
					browsers: ['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4']
				}) )
				.pipe( sourcemaps.write('.') )
				.pipe( plumber.stop() )
				.pipe( filter( '**/*.css' ) )
				.pipe( mmq({
					log: true
				}) )
				.pipe( rename( 'style.css' ) )
				.pipe( gulp.dest( 'assets/css' ) )
				.pipe( rename({ suffix: '.min' }) )
				.pipe( minifycss({
					maxLineLen: 0,
					uglyComments: true
				}) )
				.pipe( gulp.dest( 'assets/css' ) );
});

gulp.task( 'inline-css', function() {
	return  gulp.src( 'src/scss/inline.scss' )
				.pipe( plumber({ errorHandler: notify.onError( 'Error: <%= error.message %>' ) }) )
				.pipe( sourcemaps.init() )
				.pipe( sass({
					errLogToConsole: true,
					//outputStyle: 'compressed',
					//outputStyle: 'compact',
					//outputStyle: 'nested',
					outputStyle: 'expanded',
					precision: 10
				}) )
				.pipe( sourcemaps.write({ includeContent: false }) )
				.pipe( sourcemaps.init({ loadMaps: true }) )
				.pipe( autoprefixer( {
					browsers: ['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4']
				}) )
				.pipe( sourcemaps.write('.') )
				.pipe( plumber.stop() )
				.pipe( filter( '**/*.css' ) )
				.pipe( mmq({
					log: true
				}) )
				.pipe( rename( 'inline.css' ) )
				.pipe( gulp.dest( 'assets/css' ) )
				.pipe( rename({ suffix: '.min' }) )
				.pipe( minifycss({
					maxLineLen: 0,
					uglyComments: true
				}) )
				.pipe( gulp.dest( 'assets/css' ) );
});

// Scripts task
gulp.task( 'front-js', function() {
	return  gulp.src( 'src/js/*.js' )
				.pipe( sourcemaps.init() )
				.pipe( concat( 'scripts.js' ) )
				.pipe( sourcemaps.write() )
				.pipe( gulp.dest( 'assets/js' ) )
				.pipe( uglify() )
				.pipe( rename({ suffix: '.min' }) )
				.pipe( gulp.dest( 'assets/js/min' ) );
});

gulp.task( 'functions-js', function() {
	return  gulp.src( 'assets/js/functions.js' )
// 				.pipe( sourcemaps.init() )
				.pipe( concat( 'functions.js' ) )
// 				.pipe( sourcemaps.write() )
				.pipe( gulp.dest( 'assets/js' ) )
				.pipe( uglify() )
				.pipe( rename({ suffix: '.min' }) )
				.pipe( gulp.dest( 'assets/js/min' ) );
});

