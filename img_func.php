<?php

function get_img_descriptor ($url, $alt = ' ', $height = 100, $width = 100): string {
    $url = $GLOBALS['path'] . $url;
    return "<img src = $url alt = '$alt' height = $height width = $width >";

}
