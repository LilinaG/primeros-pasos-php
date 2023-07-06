<?php
//Declara una variable por cada tipo de dato y asignar un valor

     //variable tipo integer
    $numero = 42;
    var_dump($numero);              
    echo $numero . "<br>";
    
    //variable tipo float
    $pi = 3.14; 
    var_dump($pi);                  
    echo $pi . "<br>";

    // string
    $nombre_perro = "Harley";   
    var_dump($nombre_perro); 
    echo $nombre_perro . "<br>";

    //bool
    $perro_ladra = true;        
    var_dump($perro_ladra); 
    echo $perro_ladra . "<br>";

    //array
    $colores = array("rojo", "azul", "verde"); 
    var_dump($colores); 
    print_r($colores);

    $colores2 = [
        "rojo" => 2,
        "azul" => 5,
        "verde" => 1
    ];
    echo $colores2["rojo"];
  
    //null    
    $variable = null;
    var_dump($variable); 
   

//¿Qué tipo de dato son las siguientes variables?

//Fácil
$nombre = "Luna";
var_dump($nombre); 

$apellido = "Lovegood";
var_dump($apellido); 


$edad = 42;
var_dump($edad); 

$Ravenclaw = true;
var_dump($Ravenclaw); 

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
var_dump($promedio); //FLOAT

$nombre_completo = $nombre . " " .
var_dump($nombre_completo); //NULL porque le falta el ;

$apellido;
var_dump($apellido); //STRING

$presento_examen = (bool) 1;
var_dump($presento_examen);// BOOL

//Avanzado
$numero_preguntas = 5 + "5";
var_dump($numero_preguntas);//INTEGER

$numero_respuestas = "5" + 5;
var_dump($numero_respuestas); // INTEGER

$promedio_maximo =
var_dump($promedio_maximo);//NULL

$numero_respuestas / 1.0;
var_dump($numero_respuestas); //INTEGER

$nargles = 3 + "5 nargles";
var_dump($nargles); //INTEGER

//Suponiendo estas variables

$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado según las tablas de verdad?

echo "<pre>";
var_dump($es_un_michi_grande && $le_gusta_comer); // true
var_dump($es_un_michi_grande || $sabe_volar); //true
var_dump($sabe_volar || $tiene_2_patas);// false
var_dump(!$le_gusta_comer);//false
var_dump(!!$le_gusta_comer || $es_un_michi_grande);//true
echo "<pre>";

//Convierte todos los caracteres del string a mayúsculas 
// e imprimir en pantalla, sin modificar la variable original.

$string = "Hola, mundo";
$string = strtoupper($string);
echo $string . "<br>";

//Imprime en pantalla la longitud de la variable tipo string.
$string2 = "Hola, mundo";
$string2 = strlen($string2);
echo $string2 . "<br>";

//Imprime en pantalla la cantidad de palabras de la variable tipo string.
$string3 = "Hola, mundo";
$string3 = str_word_count($string3);
echo $string3  . "<br>";

//Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la variable original.
$string4 = "Hola, mundo";
$string4 = strrev($string4);
echo $string4  . "<br>";

//Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
$string5 = "Hola, gato";
$nuevoString = str_replace("gato", "michi", $string5 );
echo $nuevoString  . "<br>";

//Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla

$horas = 8.9;
$llamadas = 15.3;

$horas = (int)$horas;
var_dump($horas);

$llamadas = (int)$llamadas;
var_dump($llamadas);

//Suma ambas variables de tipo integer e imprime en pantalla.

$productividad = $horas + $llamadas;
var_dump($productividad);

//Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y consola
$variable1 = 1;
$variable2 = 0;
var_dump($variable1);
var_dump($variable2);

//a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola.

$variable1 = (bool)$variable1;
var_dump($variable1);
$variable2 = (bool)$variable2;
var_dump($variable2);

//Crear función que reciba como parámetros dos números y que retorne la suma de ellos. 
//Imprime en pantalla y por consola el resultado.

function sumar($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}
    $resultado = sumar(5, 7);
    echo($resultado);

echo "\n";

//Crear función que determine si un número es par o impar. Imprime por consola y pantalla.


$numero_preguntas = 10;
if(($numero_preguntas % 2)== 0) {
    echo "Es un número par";
} else {
    echo "Es un número impar";
}








?>