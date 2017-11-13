'use strict';

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps');


// Compile sass into CSS & auto-inject into browsers
gulp.task('scss', function() {
	return gulp.src([ 
    	'scss/*.scss'
    	])
		.pipe(maps.init())
		.pipe(sass())
		.pipe(maps.write('./'))
		.pipe(gulp.dest('css'));
});

gulp.task('watch', function () {
    gulp.watch('./scss/*.scss', ['scss',]);
});