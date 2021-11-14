<?php
declare(strict_types=1);

function get_img_descriptor ($url, $alt = 'picture', $height = '200', $width = '200'): string {
    $url = $GLOBALS['path'] . $url;
    return "<img src = $url alt = '$alt' height = $height width = $width >";

}

function get_hex_color ($R, $G, $B) {
    echo dechex($R) . dechex($G) . dechex($B);
}

