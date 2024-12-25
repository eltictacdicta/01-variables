<?php


function anidaciones() {
    $day = "Sabado";

    if(empty($day)) {
        return false;
    } 

    $openingDays = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];

    return in_array(strtolower($day), $openingDays, true);

}



echo anidaciones() ? "Abirerto":"Cerrado";