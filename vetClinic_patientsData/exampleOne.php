//PRINCIPAL veterinaria
<?php    
    //PRINCIPAL veterinaria
    //este algoritmo recibe datos o no, sobre animales que ingresan a una veterinaria
    //String $seguir, $tipo, $duenio, $menorDuenio
    //Int $cantidad, $edad, $menor, $contG, $contC, $contM, $porcentaje
    $cantidad = 0;
    $menor = 999;
    $contC = 0;
    $contG = 0;
    $contM = 0;
    echo "Desea ingresar datos? (si-no)\n";
    $seguir = trim(fgets(STDIN));
    if ($seguir == "SI"){
        while ($seguir !== "NO"){
            $cantidad = $cantidad + 1;
            echo "Nombre del dueño del animal: \n";
            $duenio = trim(fgets(STDIN));
            echo "Edad del animal: \n";
            $edad = trim(fgets(STDIN));
            echo "Tipo animal: \n";
            $tipo = trim(fgets(STDIN));
            if ($edad < $menor){
                $menor = $edad;
                $menorDuenio = $duenio;
            }
            if ($tipo == "G") {
                $contG = $contG + 1;
            }elseif ($tipo == "C") {
                $contC = $contC + 1;
            }else{
                $contM = $contM + 1;
            }
            echo "Desea ingresar más datos? (si-no)\n";
            $seguir = trim(fgets(STDIN));
        }
        $porcentajeG = floor(($contG / $cantidad)*100);
        echo "El porcentaje de animales de granja es: " . $porcentajeG . "%\n";
        echo "El dueño del animal más chico es: " . $menorDuenio . "\n";
        if ($contG > $contC && $contG > $contM){
            echo "El tipo de animal que recibe más atención en la veterinaria son los de granja. \n";
        }elseif ($contC > $contG && $contC > $contM){
            echo "El tipo de animal que recibe más atención en la veterinaria son los de competición. \n";
        }else{
            echo "El tipo de animal que recibe más atención en la veterinaria son las mascotas. \n";
        }
    }else {
        echo "Hoy no se ingresaron datos.\n";
    }