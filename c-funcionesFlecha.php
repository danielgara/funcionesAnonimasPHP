<?php 

$arregloNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9 , 10];

$esPar = fn ($val) => $val%2 == 0;
$esMayorA3 = fn ($val) => $val > 3;

function filtrar($arreglo, $funcion){
    $arregloFiltrado = [];

    foreach($arreglo as $elemento){
        if($funcion($elemento)){
            $arregloFiltrado[] = $elemento;
        }
    }

    return $arregloFiltrado;
}

// Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
print_r(filtrar($arregloNumeros, $esPar)); 
echo "<br />";
// Array ( [0] => 4 [1] => 5 [2] => 6 [3] => 7 [4] => 8 [5] => 9 [6] => 10 )
print_r(filtrar($arregloNumeros, $esMayorA3)); 

