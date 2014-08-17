var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('css', function(){
   gulp.src('app/assets/scss/**/*.scss')
       .pipe(sass())
       .pipe(gulp.dest('public/css/'));
});

gulp.task('watch',function(){
    gulp.watch('/assets/scss/*.scss',['css']);
});

