<?php
//----------------------- Funciones

// function printVar($myVar){
//     echo $myVar."\n";
// }

// printVar(5);
// printVar("texto");

function printInt(int $myNum){ /*le implicamos un tipado, ya no se puede*/
    echo $myNum."\n";
}

printInt(5);
printInt(10.5);       /*Deprecated: Implicit conversion from float 10.5 to int loses precision*/
printInt("texto");    /*Fatal error: Uncaught TypeError: printInt(): Argument #1 ($myNum) must be of type int, string given,*/

//----------------------- CLASES