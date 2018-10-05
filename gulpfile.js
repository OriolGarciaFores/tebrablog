// Gulp
var gulp = require('gulp');

// Sass/CSS stuff
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');

// JavaScript
var uglify = require('gulp-uglify');

// Images
var svgmin = require('gulp-svgmin');
var imagemin = require('gulp-imagemin');

// Stats and Things
var size = require('gulp-size');

//

// compile all your Sass CATALOG
gulp.task('sass', function (){
    gulp.src(['./wordpress/wp-content/themes/tebrablog/sass/*.scss', '!./wordpress/wp-content/themes/tebrablog/_variables.scss'])
        .pipe(sass({
            includePaths: ['./wordpress/wp-content/themes/tebrablog/scss'],
            outputStyle: 'expanded'
        }))
        .pipe(prefix(
            "last 1 version", "> 1%", "ie 8", "ie 7"
        ))
        .pipe(gulp.dest('./wordpress/wp-content/themes/tebrablog/'))
        .pipe(minifycss())
        .pipe(gulp.dest('./wordpress/wp-content/themes/tebrablog/'));

    gulp.src('./dev/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./prod/js'));

});

// Uglify JS
gulp.task('uglify', function(){
    gulp.src('./dev/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./prod/js'));
});

// Images
gulp.task('svgmin', function() {
    gulp.src('./dev/img/svg/*.svg')
        .pipe(svgmin())
        .pipe(gulp.dest('./dev/img/svg'))
        .pipe(gulp.dest('./prod/img/svg'));
});

gulp.task('imagemin', function () {
    gulp.src('./dev/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./dev/img'))
        .pipe(gulp.dest('./prod/img'));
});

// Stats and Things
gulp.task('stats', function () {
    gulp.src('./prod/**/*')
        .pipe(size())
        .pipe(gulp.dest('./prod'));
});

//

gulp.task('default', function(){

    // watch me getting Sassy
    gulp.watch("./dev/sass/**/*.scss", function(event){
        gulp.run('sass');
    });
    // make my JavaScript ugly
    gulp.watch("./dev/js/**/*.js", function(event){
        gulp.run('uglify');
    });
    // images
    gulp.watch("./dev/img/**/*", function(event){
        gulp.run('imagemin');
        gulp.run('svgmin');
    });
});