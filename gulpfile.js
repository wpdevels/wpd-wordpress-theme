var gulp = require('gulp');
var compass = require('gulp-compass');

/* DEFAULT COMPASS */
gulp.task('compass', function() {
    gulp.src('./sass/**/*.scss')
        .pipe(compass({
            config_file: './config.rb',
            css: 'stylesheets',
            sass: 'sass'
        }))
        .pipe(gulp.dest('app/assets/temp'));
});


/* DEFAULT WATCH */
gulp.task('watch', function () {
    gulp.watch('./sass/**/*.scss', ['sass']);
});