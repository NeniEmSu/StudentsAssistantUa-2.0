const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();


// Compile scss to css
function style() {
    // Where the scss is located 
    return gulp.src('./scss/**/*.scss')

        // passing files through sass compliler
        .pipe(sass())

        // where compiled css goes
        .pipe(gulp.dest('./css'))

        // for stream changes to all browsersync
        .pipe(browserSync.Stream());
}

function watch() {
    browserSync.init({
        server: {
            baseDir: './'
        }
    });
    gulp.watch('./scss/**/*.scss', style);
    gulp.watch('./*.php').on('change', browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;