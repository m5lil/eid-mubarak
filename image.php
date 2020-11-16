<?php

require 'vendor/autoload.php';
require 'I18N/Arabic.php';

use Intervention\Image\ImageManager;

$manager = new ImageManager(array('driver' => 'imagick'));

$img = $manager->make('main.png');

$Arabic = new I18N_Arabic('Glyphs');


$name = $Arabic->utf8Glyphs($_GET['word']);


$img->text($name , 480, 350, function($font) {
    $font->file( getcwd() . '/DroidKufi-Bold.ttf');
    $font->size(24);
    $font->color('#cc9154');
    $font->align('center');
})->save(getcwd() . '/Download.png');




