var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
var uglify = require('gulp-uglify');

gulp.task('css', function () {
    gulp.src('css/*.css')
        .pipe(minifyCSS())
        .pipe(concat('app.min.css'))
        .pipe(gulp.dest('css/'));
});

gulp.task('js', function () {
    gulp.src([
            'js/jquery.min.js',
            'js/jquery.fullPage.js',
            'js/app.js',
        ])
        .pipe(concat('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/'));
});

gulp.task('default', ['css', 'js']);
