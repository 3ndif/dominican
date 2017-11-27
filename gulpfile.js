'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('resources/assets/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('public/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('resources/assets/sass/**/*.scss', ['sass']);
});