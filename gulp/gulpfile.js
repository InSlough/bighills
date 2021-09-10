// [npm i LIB_NAME -D] ->> команда для установки библиотек. пример: npm i gulp-header -D
const gulp = require("gulp"), // подключаем Gulp
  gHeader = require("gulp-header"), // использую для добавления кодировки "UTF-8 BOM" к html файлам
  rigger = require("gulp-rigger"), // модуль для импорта содержимого одного файла в другой
  plumber = require("gulp-plumber"), // модуль для отслеживания ошибок
  // sass = require("gulp-sass"), // ! OLD way
  sass = require("gulp-sass")(require("sass")), // модуль для компиляции SASS (SCSS) в CSS
  autoprefixer = require("gulp-autoprefixer"), // модуль для автоматической установки автопрефиксов
  fileInclude = require("gulp-file-include"), // модуль для добавления "содержимого" в файл (html)
  sourcemaps = require("gulp-sourcemaps"), // модуль для создания карты стилей
  strip = require('gulp-strip-comments'), // Удаление комментариев из файлов
  cleanCSS = require("gulp-clean-css"), // плагин для минимизации CSS
  terser = require("gulp-terser-js"), // модуль для минимизации JavaScript
  gImage = require("gulp-image"), // модуль для оптимизации изображений
  gWebp = require("gulp-webp"), // модуль для оптимизации WEBP изображений
  // babel = require("gulp-babel"),
  // gIF = require("gulp-if"),
  rename = require("gulp-rename");

const p = {
  h: {
    html: false, // активация генерации html файлов. начало генерации происходит сразу после изменения файлов
    s: ["html/**/*.html", "!html/ts/**/*"], // обрабатываются файлы html в каталоге [gulp/html/] кроме [gulp/html/ts/]
    w: "html/**/*.html", // следит за изменениями в файлах в каталоге [gulp/html] и во всех подкаталогах
    b: "../" // каталог куда попадают обработанные файлы
  },
  s: {
    js: ["js/**/*.js", "!js/_main/**"],
    style: ["css/**/*.scss", "!css/libs/**", "!css/_main/**"],
    lib_style: "css/libs/libs.scss",
    img: "images/**/*.{png,jpg,gif,svg}",
    img_for_webp: "images/**/*.{png,jpg,gif}"
  },
  w: {
    js: ["js/**/*.js", "!js/libs/**"],
    style: ["css/**/*.scss", "!css/libs/**"],
    lib_style: "css/libs/**/*.scss",
    lib_script: "js/libs/**/*.js",
    img: "images/**/*.{png,jpg,gif,svg}",
    img_for_webp: "images/**/*.{png,jpg,gif}"
  },
  b: {
    js: "../dist/js/",
    css: "../dist/css/",
    img: "../dist/img/"
  }
};

// ? сбор стилей
gulp.task("css", function () {
  return gulp
    .src(p.s.style)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass.sync({ sourceMap: false }).on("error", sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(p.b.css));
});
gulp.task("b-css", function () {
  return gulp
    .src(p.s.style)
    .pipe(plumber())
    .pipe(sass({ sourceMap: false }))
    .pipe(autoprefixer())
    .pipe(cleanCSS())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(p.b.css));
});
gulp.task("b-css-lib", function () {
  return gulp
    .src(p.s.lib_style)
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(cleanCSS())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(p.b.css));
});

// ? сбор js
// * .pipe(babel({presets:["@babel/env"]}))
gulp.task("js", function () {
  return gulp.src(p.s.js).pipe(rigger()).pipe(strip()).pipe(plumber()).pipe(gulp.dest(p.b.js));
});
gulp.task("b-js", function () {
  return gulp
    .src(p.s.js)
    .pipe(rigger())
    .pipe(strip())
    .pipe(plumber())
    .pipe(rename({ suffix: ".min" }))
    .pipe(terser({ mangle: { toplevel: false } }))
    // ! terser({mangle: { toplevel: FALSE }})
    // ? "FALSE" важно, если в библиотеках есть объявление функции верхнего уровня
    // ? "FALSE" important if in libs has top level function declaration
    // ! example(if libs has): var FUNCTION_NAME = (function (){...})();
    .on("error", function (error) {
      if (error.plugin !== "gulp-terser-js") console.log(error.message);
      this.emit("end");
    })
    .pipe(gulp.dest(p.b.js));
});

// ? оптимизация изображений
gulp.task("image", function () {
  return gulp
    .src(p.s.img)
    .pipe(
      gImage({
        pngquant: false,
        optipng: false,
        zopflipng: false,
        jpegRecompress: ["--strip", "--quality", "hight", "--min", 72, "--max", 92, "--accurate"], // medium, hight
        mozjpeg: false,
        gifsicle: true,
        svgo: ["--enable", "cleanupIDs", "--disable", "removeViewBox"],
        quiet: true
      })
    )
    .pipe(gulp.dest(p.b.img));
});
// ? оптимизация изображений в webp
gulp.task("webp", function () {
  return gulp
    .src(p.s.img_for_webp)
    .pipe(gWebp({ quality: 80 }))
    .pipe(gulp.dest(p.b.img));
});

// ? генерация html
gulp.task("html", function () {
  return gulp
    .src(p.h.s)
    .pipe(fileInclude({ prefix: "@@", basepath: "@file" }))
    .pipe(gHeader("\ufeff")) // Добавляет кодировку "UTF-8 BOM" к файлу
    .pipe(gulp.dest(p.h.b));
});

// ? создание конечной сборки (ввести в консоль: gulp build)
gulp.task("build", gulp.parallel("b-css", "b-css-lib", "b-js"));

// ? для разработки (ввести в консоль: gulp dev)
gulp.task("dev", gulp.parallel("b-css-lib", "css", "js"));

// ? для оптимизация изображений (ввести в консоль: gulp img)
gulp.task("img", gulp.series("image", "webp"));

// ? выполняем задачи при изменении файлов
gulp.task("watch", function () {
  gulp.watch(p.w.style, gulp.series("css"));
  gulp.watch(p.w.js, gulp.series("js"));
  gulp.watch("css/custom-bootstrap.scss", gulp.series("b-css-lib"));
  gulp.watch(p.w.lib_style, gulp.series("b-css-lib"));
  gulp.watch(p.w.lib_script, gulp.series("b-js"));
  // gulp.watch(p.w.img, gulp.series("image"));
  p.h.html ? gulp.watch(p.h.w, gulp.series("html")) : 0;
});

// ? задача по умолчанию (ввести в консоль: gulp)
gulp.task("default", gulp.series("dev", "watch"));
