var gulp = require('gulp'),
	sass = require('gulp-sass');

gulp.task('sass', function() {
	return gulp.src('app/gulp/sass/main.sass')
		.pipe(sass())
		.pipe(gulp.dest('web/bundles/framework/css'))
});