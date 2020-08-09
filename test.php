<?php
$i = 0;
while($i<100) {
    $image = new Imagick('https://loremflickr.com/1000/1000/textures');

    $image->adaptiveResizeImage(1600, 1600);

    $degrees = array(360);
    $image->distortImage(Imagick::DISTORTION_ARC, $degrees, TRUE);

    $image->radialBlurImage(10);
    $image->blurImage(10,10);

    $image->roundCorners(1040, 1040);
    $image->writeImages('pics_out/'.$i.'.jpg', false);

    $rand = rand(500, 1000);
    $image->resizeImage($rand, $rand, imagick::FILTER_CATROM, 1);

    echo("Processed " . $i . " ");
    $i++;
}