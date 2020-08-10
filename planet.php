<?php

function generatePlanet() {
        $rand1 = rand(0,5000);
        $rand2 = rand(0,5000);
        $image = new Imagick('https://picsum.photos/'.$rand1.'/'.$rand2);

        $image->adaptiveResizeImage(1600, 1600);

        $degrees = array(360);
        $image->distortImage(Imagick::DISTORTION_ARC, $degrees, TRUE);

        $radialBlurRand = rand(2,10);
        $image->radialBlurImage($radialBlurRand,3);
//      $image->cycleColormapImage(1);

        $image->roundCorners(1040, 1040);
        $image->writeImages('pics_out/0.jpg', false);
}