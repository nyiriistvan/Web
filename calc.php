<?php

echo file_get_contents('templates/head.html');


$page = file_get_contents('templates/results.html');

function calcweight($Testtomeg, $Magassag,) {    
    $s = ($Testtomeg/$Magassag^2);
    $weight =$s;

    return $weight;
}


if(
    !empty($_GET['Testtomeg']) and 
    !empty($_GET['Magassag'])  
) {
    $Testtomeg = $_GET['Testtomeg'];
    $Magassag = $_GET['Magassag'];
    $weight = calcweight($Testtomeg, $Magassag,);    
}else {
    $weight = "Hiba! Helytelen bemenő adatok";
}





$page = str_replace('{{result}}', $weight, $page);

echo $page;

echo file_get_contents('templates/foot.html');
