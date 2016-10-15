var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


gulp.task('default', ['server', 'watch']);

gulp.task('server', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        },
        host: "192.168.10.121"
    });

    gulp.watch("./*.html").on('change', browserSync.reload)
});

gulp.task('sass', function() {
    return gulp.src("./sass/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("./css/"))
        .pipe(browserSync.stream());
});


gulp.task('watch', function(){
  gulp.watch("./sass/*.scss", ['sass']);
});
