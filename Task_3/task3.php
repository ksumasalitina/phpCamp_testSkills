<?php
$products = array(44, 33.99, 8.99);
function getSum($arr){
    $counter = 0;
    $sum = 0;
    $max = $arr[0];
    foreach ($arr as $item) {
        if($item - round($item,0)<-0.009){
            $counter+=1;
        }
        if($max < $item) {
            $max = $item;
        }
        $sum+=$item;
    }
    if($counter>=3){
        $sum = $max;
    }
    return $sum;
}
print_r(getSum($products));
