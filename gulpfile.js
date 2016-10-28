var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var del = require('del');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('default', ['server', 'watch']);

gulp.task('server', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        },
        notify: false,
        port: 8001
    });

    gulp.watch("./**/*.html").on('change', browserSync.reload)
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

// Prefix Tasks

gulp.task('prefix', () =>
    gulp.src('build/css/styles.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('css/'))
);


// Build Tasks

gulp.task('build:clean', function(){
  del.sync([
    './build/**'
  ]);
});

gulp.task('build:copy', ['build:clean'], function(){
  return gulp.src('./**')
  .pipe(gulp.dest('./build/'))
});



gulp.task('build:remove', ['build:copy'], function(cb){
  return Promise.all([
  del.sync([
    './build/sass',
    './build/node_modules',
    './build/config.codekit',
    './build/README.md',
    './build/gulpfile.js',
    './build/package.json'
  ])
  ]);
  cb();
});

gulp.task('build', ['build:clean', 'build:copy', 'build:remove']);
