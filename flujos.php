<?php
$myInt = 5;
$myString = "texto";
$myArray = [0, $myInt, $myString];

//---------------------------------------Flujos

if ($myInt==5 && $myString=="text"){
    echo $myInt."\n";
}elseif($myInt==6||$myString=="text"){
    echo $myString."\n";
}else{
    echo "no se cumplieron las condiciones\n";
}

//Bucle for simple:
for($i=0;$i<=10;$i++){
    echo $i . "\n";
}

//Bucle for que recorre y muestra los items de un array:
for($i=0;$i<=sizeof($myArray)-1;$i++){
    echo $myArray[$i] . "\n";
}

//Bucle while que recorre y muestra los items de un array:
$i=0;
while($i<=sizeof($myArray)-1){
    echo $myArray[$i]."\n";
    $i++;
}

// Manera correcta:
foreach($myArray as $myItem){
    echo $myItem . "\n";
}



