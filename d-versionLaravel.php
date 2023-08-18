<?php 

class Attributee {
    public static function make($array, $func){
        $filterArray = [];

        foreach($array as $element){
            if($func($element)){
                $filterArray[] = $element;
            }
        }
    
        return $filterArray;
    }
}

$arrayNumeric = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
print_r(Attributee::make(
    array: $arrayNumeric,
    func: fn ($val) => $val%2 == 0,
));
echo "<br />";

// Array ( [0] => 4 [1] => 5 [2] => 6 [3] => 7 [4] => 8 [5] => 9 [6] => 10 )
print_r(Attributee::make(
    $arrayNumeric,
    fn ($val) => $val > 3,
));