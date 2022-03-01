<?php

$string = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Laborum animi itaque maiores quia minima dicta. 
Aperiam quas eaque quia qui non reiciendis sapiente iusto similique repellendus, sint magni sunt? Maiores!';

$numbers = [];

while (count($numbers) !== 15) {
    $rand_num = rand(1, 50);
    if(!in_array($rand_num, $numbers)) {
        $numbers[] = $rand_num;
    }
}

var_dump($numbers);



?>

