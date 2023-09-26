<?php

function newArray($modifiedNumbers){
foreach($modifiedNumbers as $numbersKey => $keysValue){
    if($keysValue%2==0){
        unset($modifiedNumbers[$numbersKey]);
    }
}
print_r($modifiedNumbers);
}
$numbers=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
newArray($numbers);

?>
