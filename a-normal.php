
<?php 

$arregloNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9 , 10];

function esPar($valor){
    if($valor%2 == 0){
        return true;
    }
}

function filtrar($arreglo){
    $arregloFiltrado = [];

    foreach($arreglo as $elemento){
        if(esPar($elemento)){
            $arregloFiltrado[] = $elemento;
        }
    }

    return $arregloFiltrado;
}

// Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
print_r(filtrar($arregloNumeros)); 
echo "<br />";

function esMayorA3($valor){
    if($valor > 3){
        return true;
    }
}

function filtrar2($arreglo){
    $arregloFiltrado = [];

    foreach($arreglo as $elemento){
        if(esMayorA3($elemento)){
            $arregloFiltrado[] = $elemento;
        }
    }

    return $arregloFiltrado;
}

// Array ( [0] => 4 [1] => 5 [2] => 6 [3] => 7 [4] => 8 [5] => 9 [6] => 10 )
print_r(filtrar2($arregloNumeros)); 

