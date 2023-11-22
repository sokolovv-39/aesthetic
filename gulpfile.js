import gulp from 'gulp'
import imagemin from 'gulp-imagemin'
import concat from 'gulp-concat'
import sourcemaps from 'gulp-sourcemaps'
import terser from 'gulp-terser'
import postcss from 'gulp-postcss'
import autoprefixer from 'autoprefixer'
import cssnano from 'cssnano'
import flatten from 'gulp-flatten'

const imageDir = 'assets/images/*'
const cssDir1 = 'styles/*.css'
const cssDir2 = 'assets/fonts/**/*.css'
const fontsDir = 'assets/fonts/**/*.ttf'
const jsDir = 'scripts/*.js'
const templateDir1 = '*.css'
const templateDir2 = '*.php'

export function imageMin() {
    return gulp.src(imageDir).pipe(imagemin()).pipe(gulp.dest('dist/assets/images'))
}

export function cssMinConcat() {
    return gulp.src([cssDir1, cssDir2])
    .pipe(sourcemaps.init())
    .pipe(concat('all.css'))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('dist/assets/css'))
}

export function copyFonts() {
    return gulp.src(fontsDir)
    .pipe(flatten())
    .pipe(gulp.dest('dist/assets/css'))
}

export function jsMinConcat() {
    return gulp.src(jsDir)
    .pipe(sourcemaps.init())
    .pipe(concat('all.js'))
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('dist/assets/js'))
}

export function copyTemplate() {
    return gulp.src([templateDir1, templateDir2])
    .pipe(flatten())
    .pipe(gulp.dest('dist'))
}

function watchTask() {
    gulp.watch([
        imageDir,
        cssDir1,
        cssDir2,
        fontsDir,
        jsDir,
        templateDir1,
        templateDir2
    ], {
        interval: 1000
    },
    gulp.parallel(imageMin, cssMinConcat, jsMinConcat, copyFonts, copyTemplate))
}

export default gulp.series(gulp.parallel(imageMin, cssMinConcat, jsMinConcat, copyFonts, copyTemplate),
    watchTask
)