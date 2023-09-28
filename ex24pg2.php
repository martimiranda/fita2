<?php
    $contrasenya1 = $_POST["contrasenya1"];
    $contrasenya2 = $_POST["contrasenya2"];
    if(strcmp($_POST["contrasenya1"],$_POST["contrasenya2"])==0){
        $arr1 = str_split($_POST["contrasenya1"]);
        $msj= "LA CONTRASENYA HA DE CONTINDRE UN NUMERO COM A MINIM";
        foreach ($arr1 as &$valor) {
            if(is_numeric($valor)){
                $msj= "CONTRASSENYA CORRECTA";
            }
        }
        echo "<h1>$msj</h1>";

    }else{
        echo "<h1>ERROR: LA CONTRASENYA NO COINCIDEIX</h1>";
    }
?>