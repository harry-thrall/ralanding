const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

//compile scss into css
function style(){
    //1. where is the scss file
    return gulp.src('./wp-content/themes/twentytwenty-child/scss/**/*.scss')
    //2. pass through sass compiler
        .pipe(sass().on('error', sass.logError))
    //3. Where do i save the new css file
        .pipe(gulp.dest('./wp-content/themes/twentytwenty-child/css'));  
}

function watch() {
    gulp.watch('./wp-content/themes/twentytwenty-child/scss/**/*.scss', style);
}

exports.style = style;
exports.watch = watch;