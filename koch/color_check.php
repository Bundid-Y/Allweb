<?php
$img = imagecreatefrompng('img/company_logo/logo.png');
$width = imagesx($img);
$height = imagesy($img);
$colors = [];
for ($x = 0; $x < $width; $x++) {
    for ($y = 0; $y < $height; $y++) {
        $rgb = imagecolorat($img, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;
        // Count only red-ish colors
        if ($r > 150 && $g < 100 && $b < 100) {
            $hex = sprintf("#%02x%02x%02x", $r, $g, $b);
            if (!isset($colors[$hex]))
                $colors[$hex] = 0;
            $colors[$hex]++;
        }
    }
}
arsort($colors);
print_r(array_slice($colors, 0, 5));
?>
