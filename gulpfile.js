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



gulp.task("js", function(){
	return gulp.src([
		'js/wp-wraaper-start.js',
		'node_modules/bootstrap/dist/js/bootstrap.js',
		'js/theme.js',
		'js/wp-wraaper-end.js',
	])
	.pipe(maps.init())
	.pipe(concat("itheme.js"))
	.pipe(maps.write('./'))
	.pipe(gulp.dest('js'))
});

gulp.task('watch', function () {
    gulp.watch('./scss/*.scss', ['scss',]);
		gulp.watch('./js/*.js', ['js',]);
});
