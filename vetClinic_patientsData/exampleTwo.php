<?php
    //PRINCIPAL veterinaria
    //String $seguir, $tipo
    //Int $total, $edad, $menorG, $menor, $mayor, $sumaE
    //Float $prom
    $total = 0;
    $menorG = 999;
    $menor = 999;
    $mayor = -999;
    $sumaE = 0;

    echo "Desea ingresar datos?(S-N)\n";
    $seguir = trim(fgets(STDIN));
    while ($seguir == "S"){
        $total = $total + 1;
        echo "Ingrese edad del animal: \n";   
        $edad = trim(fgets(STDIN));
        echo "Ingrese tipo de animal (M:mascota- G: granja- C: competición):\n";
        $tipo = trim(fgets(STDIN));
        if ($edad < $menor) {
            $menor = $edad;
        }
        if ($edad > $mayor) {
            $mayor = trim(fgets(STDIN));
        }
        if ($tipo == "G"){
            if ($edad < $menorG){
                $menorG = $edad;
            }
        }
        $sumaE = $sumaE + $edad;
        echo "Desea ingresar más datos? (S-N)\n" ;
        $seguir = trim(fgets(STDIN));
    }
    if ($total > 0) {
        $prom = floor($sumaE / $total);
        if ($menorG == 999) {
            $menorG = "no hay datos de este animal.";
        }
        echo "La edad promedio es: " . $prom ."\nLa edad del animal menor es: " . $menor ."\nLa edad del animal de granja más pequeño es: " . $menorG ;
    }else {
        echo "Hoy no se ingresaron pacientes.\n";
    }
    

?>