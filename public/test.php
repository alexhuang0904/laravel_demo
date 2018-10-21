<?php
/**
 * Created by PhpStorm.
 * User: huangalex
 * Date: 18/10/21
 * Time: 10:49
 */
function getLaravelAcademy() {

    yield 'http://LaravelAcademy.org';
    yield 'Laravel学院';
    yield 'Laravel Academy';
//    {!! nl2br( yield 'http://LaravelAcademy.org';
//        yield 'Laravel学院';
//        yield 'Laravel Academy';) !!}
}
foreach(getLaravelAcademy() as $yieldedValue) {
  echo $yieldedValue. PHP_EOL;
//    print $i . PHP_EOL;
//    echo "Yielded $i" . PHP_EOL;
}