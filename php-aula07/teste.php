<?php
    
    $numeros = [1,2,3,4,5,6];

    for($i=0; $i<count($numeros); $i++) {
        echo $numeros[$i] . "<br>";
    }
    echo "<br>";
    echo "<h3> Foreach com \$numeros as \$key => \$value</h3>";
    foreach ($numeros as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<h3> Foreach com \$numeros as \$numero</h3>";
    foreach ($numeros as $numero) {
        echo "$numero <br>";
    }
    echo "<br>";



    $carros = [
        "marca" => "Chevrolet",
        "modelo" => "Onix",
        "quilometragem" => 7500,
        "anoFabricacao" => 2012
    ];

    echo "<h3> Foreach com \$carros as \$key => \$value</h3>";
    foreach ($carros as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<h3> Foreach com \$carros as \$value</h3>";
    foreach ($carros as $value) {
        echo "$value <br>";
    }
    

?>