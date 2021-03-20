'use strict';

var gulp = require('gulp'),
    jshint = require('gulp-jshint'),
    sass = require('gulp-sass'),
    svgSprite = require('gulp-svg-symbols'),
    uglify = require('gulp-uglify');

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed'
};

var svgSpriteOptions = {
   templates: ['default-svg']
};

// CSS
gulp.task('css-base', gulp.series( function () {
    return gulp.src('./scss/base.scss')
        .pipe(sass.sync(sassOptions).on('error', sass.logError))
        .pipe(gulp.dest('./css'));
}));

// MODULES

// gulp.task('js-404', function () {
//     gulp.src('./js/module/404.js')
//         .pipe(uglify())
//         .on('error', function (err) { console.log(err.message); })
//         .pipe(gulp.dest('./js/min'));
// });

// JS APP
gulp.task('js-app', gulp.series( function () {
    return gulp.src('./js/app.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./js/min'));
}));

// JS MODULE
//gulp.task('js-module', gulp.series( function () {
//    return gulp.src('./js/module/*.js')
//        .pipe(uglify())
//        .on('error', function (err) { console.log(err.message); })
//        .pipe(gulp.dest('./js/min'));
//}));

gulp.task('js-home', gulp.series( function () {
    gulp.src('./js/module/home.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./js/min'));
}));

gulp.task('js-quemsou', gulp.series( function () {
    gulp.src('./js/module/quem_sou.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./js/min'));
}));

gulp.task('js-seifazer', gulp.series( function () {
    gulp.src('./js/module/sei_fazer.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./js/min'));
}));

gulp.task('js-trabalhos', gulp.series( function () {
    gulp.src('./js/module/trabalhos.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./js/min'));
}));

gulp.task('js-portfolio', gulp.series( function () {
    gulp.src('./js/module/portfolio.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./js/min'));
}));

// SVG SPRITE
gulp.task('svg-sprite', gulp.series( function () {
    return gulp.src('./img/svg/*.svg')
        .pipe(svgSprite(svgSpriteOptions))
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./img'));
}));

// WATCH
gulp.task('watch', function () {
    //gulp.watch('./img/svg/*.svg', gulp.series('svg-sprite'));
    gulp.watch('./scss/**/*.scss', gulp.series('css-base'));
    gulp.watch('./js/app.js', gulp.series('js-app'));
    gulp.watch('./js/module/**/*', gulp.series('js-home'));
    gulp.watch('./js/module/**/*', gulp.series('js-quemsou'));
    gulp.watch('./js/module/**/*', gulp.series('js-seifazer'));
    gulp.watch('./js/module/**/*', gulp.series('js-trabalhos'));
    gulp.watch('./js/module/**/*', gulp.series('js-portfolio'));
});

gulp.task('default', gulp.series('watch'));
