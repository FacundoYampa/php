<?php
//----------------------- Funciones

// function printVar($myVar){
//     echo $myVar."\n";
// }

// printVar(5);
// printVar("texto");

/*le implicamos un tipado, ya no se puede*/
// function printInt(int $myNum){ 
//     echo $myNum."\n";
// }

// printInt(5);
// printInt(10.5);       /*Deprecated: Implicit conversion from float 10.5 to int loses precision*/
// printInt("texto");    /*Fatal error: Uncaught TypeError: printInt(): Argument #1 ($myNum) must be of type int, string given,*/

//----------------------- CLASES

class MyClass{ #creo una clase
    public $name; #parámetros, public: para poder acceder a ellos
    public $age;

    function __construct($name, $age){ #funcion constructora
        $this->name=$name;
        $this->age=$age; #asignamos variables a la clase
    }
}

$myNewClass = new MyClass("Facu",24); #instanciamos la clase

print_r($myNewClass);

// acceder al parametro
echo $myNewClass->name . "\n";