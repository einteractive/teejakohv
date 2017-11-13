'use strict';

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps'),
	concat = require('gulp-concat');


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

gulp.task("bs-js", function(){
	return gulp.src([
		'node_modules/bootstrap/dist/js/bootstrap.js'
	])
	.pipe(maps.init())
	.pipe(concat("bootstrap.js"))
	.pipe(maps.write('./'))
	.pipe(gulp.dest('js'))
});
