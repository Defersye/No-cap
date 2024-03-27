<?php
// водяной знак добавляется ровно по центру самого тёмного пикселя

// Загрузка исходного изображения
$image = imagecreatefromjpeg('1.jpg');

// Определение размеров изображения
$width = imagesx($image);
$height = imagesy($image);

// Поиск самой темной области
$minBrightness = 255;
$minx = 0;
$miny = 0;
for ($x = 0; $x < $width; $x++) {
   for ($y = 0; $y < $height; $y++) {
      $rgb = imagecolorat($image, $x, $y);
      $red = ($rgb >> 16) & 0xFF;
      $green = ($rgb >> 8) & 0xFF;
      $blue = $rgb & 0xFF;
      $brightness = (0.299 * $red) + (0.587 * $green) + (0.114 * $blue);
      if ($brightness < $minBrightness) {
         $minBrightness = $brightness;
         $minx = $x;
         $miny = $y;
      }
   }
}

// Загрузка водяного знака
$watermark = imagecreatefrompng('watermark.png');

// Рассчет масштаба и положения водяного знака
$watermarkWidth = imagesx($watermark);
$watermarkHeight = imagesy($watermark);

// Наложение водяного знака
imagecopymerge($image, $watermark, $minx - $watermarkWidth / 2, $miny - $watermarkHeight / 2, 0, 0, $watermarkWidth, $watermarkHeight, 50);

// Сохранение нового изображения
imagejpeg($image, 'watermarked_image.jpg');
