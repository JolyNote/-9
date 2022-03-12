<?php
function recArea($l, $w){
    $area = $l * $w;
    return $area;
}
echo  "Прямоугольник длиной 6 и шириной 9 имеет площадь " . recArea(6,9) .".";