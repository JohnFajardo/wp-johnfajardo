import gulp from 'gulp';
import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import imagemin from "gulp-imagemin";
import browserSync from "browser-sync";

const sassOptions = {outputStyle: 'expanded', errLogToConsole: true};

exports.sass = () => (
    gulp.src('./scss/style.scss')
    .pipe(sass(sassOptions))
    .pipe(gulp.dest('../'))
    .pipe(browserSync.reload({stream: true}))
);

exports.images = () => (
    gulp.src('./images/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('../images'))
    .pipe(browserSync.reload({stream: true}))
);

exports.copy = () => (
    gulp.src('./*.html')
    .pipe(gulp.dest('../'))
    .pipe(browserSync.reload({stream: true}))
);

exports.minifycss = () => (
    gulp.src('../style.css')
    .pipe(cleanCSS({compatibility: 'ie8', level: 2}))
    .pipe(gulp.dest('../'))
);

gulp.task('serve', () => {
    browserSync.init({
        proxy: "http://localhost/jf"
    });

    gulp.watch('./scss/**/*', gulp.series('sass'));
    gulp.watch('./images/**/*', gulp.series('images'));
    gulp.watch('./*.html', gulp.series('copy'));
    gulp.watch('./scss/**/*').on('change', browserSync.reload);
});

gulp.task('default', gulp.series('serve'));