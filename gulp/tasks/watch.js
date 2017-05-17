var gulp = require('gulp'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create();

gulp.task('watch', function () {

    browserSync.init({
        notify: false,
        proxy: {
            target: "wpdistillery.dev"
        }
    });

    watch('./**/*.php', function () {
        browserSync.reload();
    });

    watch('./styles/**/*.scss', function () {
        gulp.start('cssInject');
    });

    watch('./scripts/**/*.js', function() {
        gulp.start('scriptsRefresh');
    });
});

gulp.task('cssInject', ['styles'], function () {
    return gulp.src('./style.css')
    .pipe(browserSync.stream());
});

gulp.task('scriptsRefresh', ['scripts'], function() {
    browserSync.reload();
});
