const gulp = require("gulp");
const sass = require("gulp-sass");
const connect = require("gulp-connect-php");
const browserSync = require("browser-sync");

// Compile scss to css
function style() {
  // Where the scss is located
  return (
    gulp
    .src("./scss/**/*.scss")

    // passing files through sass compliler
    .pipe(sass())

    // where compiled css goes
    .pipe(gulp.dest("./css"))

    // for stream changes to all browsersync
    .pipe(browserSync.stream())
  );
}

function watch() {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
  gulp.watch("./scss/**/*.scss", style);
  gulp.watch("./*.php").on("change", browserSync.reload);
  gulp.watch("./js/**/*.js").on("change", browserSync.reload);
}

gulp.task("connect-sync", function () {
  connect.server({}, function () {
    browserSync({
      proxy: "127.0.0.1:8000"
    });
  });
  gulp.watch("./*.php").on("change", function () {
    browserSync.reload();
  });
  gulp.watch("./scss/**/*.scss", style);
  gulp.watch("./css/**/*.css").on("change", browserSync.reload);
  gulp.watch("./*.txt").on("change", browserSync.reload);
  gulp.watch("./js/**/*.js").on("change", browserSync.reload);
  gulp.watch("./**/*.php").on("change", browserSync.reload);
  gulp.watch("**/*.php").on("change", browserSync.reload);
  gulp.watch("*.php").on("change", browserSync.reload);
});

exports.style = style;
exports.watch = watch;