<?php 
//------------------------------------variables con tipado dinámico (débil)

$myString = "texto";
$myInt = 5;

$myBoole = true;
echo $myBoole."\n"; /* 1 */
echo gettype($myBoole) . "\n"; /*boolean */
//boolean--> true:"1" false:""

//------------------- Constantes
const MYCONST = "constante";
echo MYCONST."\n";  /*constante */

//------------------- Arrays - Listas
$myArray = ["primero",$myString,$myBoole];
//echo $myArray;                    Warning: Array to string conversion:    Array
echo $myArray[0]."\n";              /* primero */
print_r($myArray);  
array_push($myArray,MYCONST);
print_r($myArray)."\n";


//------------------ Diccionario ----> {clave : valor}

$myDict = array("clave"=>"valor",
                "string"=>$myString,
                "int"=>$myInt, 
                "numero"=>10
            );
echo gettype($myDict)."\n";         /* array */
print_r($myDict)."\n";
// echo $myDict[0];                 Undefined array key 0
echo $myDict["int"];                /* 5 */