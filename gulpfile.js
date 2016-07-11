var gulp = require('gulp');
var sass = require('gulp-sass');


/* DEFAULT COMPASS */
gulp.task('sass', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('.style.css'));
});


/* DEFAULT WATCH */
gulp.task('watch', function () {
    gulp.watch('./sass/**/*.scss', ['sass']);
});