var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync');

gulp.task('css', function () {
    gulp.src('app/css/*.css')
        .pipe(minifyCSS())
        .pipe(concat('app.min.css'))
        .pipe(gulp.dest('../themes/kandio/static/css'));
});

gulp.task('js', function () {
    gulp.src([
            'app/js/jquery.min.js',
            'app/js/jquery.fullPage.js',
            'app/js/app.js',
        ])
        .pipe(concat('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('../themes/kandio/static/js'));
});

gulp.task('default', ['css', 'js']);

gulp.task('watch', function() {
    gulp.watch('app/css/**/*.css', ['css']);
    gulp.watch('app/js/**/*.js', browserSync.reload);
});
