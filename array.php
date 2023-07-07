<?php

//Crear un array de 10 números
$edades = [23, 27, 30, 3, 32, 33, 28, 15, 44, 40];

//Obtén el largo del array e imprime en pantalla y consola.
$longitudArray = count($edades);
echo $longitudArray;

echo "\n";
//Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla

array_push($edades, "once");
print_r($edades);

//Ahora agrega 2 elementos más a tu array e imprime en pantalla.

array_push($edades, "doce", 4);
print_r($edades);

//Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.

$array2 = [57, 69, 70];

$sumaArrays = array_merge($edades, $array2);
print_r($sumaArrays); 

//Crear una función que imprima en consola y pantalla todos los números de un array en una lista
function imprimirNumeros () {
    $numeros = array(1, 5, 4);
    foreach ($numeros as $numero) {
        echo $numero . "<br>";
    }
}
imprimirNumeros();
    
//Crear una función que añade un número al array

function añadirNumero () {
    $numeros3 = array(1, 5, 4);
    array_push($numeros3, 12);
    print_r($numeros3);
}
añadirNumero();

//Crear una función que elimine los números pares de ese array.


    $numeros4 = array(1, 5, 4);
    $numeros4 = array_filter($numeros4, function ($eliminarPares) {
        return $eliminarPares % 2 == 0;
    }); 
    print_r($numeros4);

//Crear una función que devuelva el número mayor de un array.

function devolverNumeroMayor ($array) {
    $numeroMayor =  max($array);
    return $numeroMayor;
}
$numeroLibros = [10, 5, 8, 20, 15];
$numeroMayor = devolverNumeroMayor($numeroLibros);
echo "El numero mayor es: " . $numeroMayor;


//Crear una función que devuelva el número menor de un array.


function devolverNumeroMenor ($array) {
    $numeroMenor =  min($array);
    return $numeroMenor;
}
$numeroLibros1 = [10, 5, 8, 20, 15];
$numeroMenor = devolverNumeroMenor($numeroLibros);
echo "El numero menor es: " . $numeroMenor;

//Crear un función que convierta en minúsculas todas las letras de un texto.

function minusculas ($texto) {
    $textoMinusc = strtolower($texto);
    return $textoMinusc;
}
$texto2= "HOLA MUNDO";
$textoMinusc = minusculas($texto2);
echo $textoMinusc;

//Crear una función que convierta en mayúsculas todas las letras de un texto.

function mayusculas ($texto) {
    $textoMayusc = strtoupper($texto);
    return $textoMayusc;
}
$texto2= "convertir este texto a mayúsculas";
$textoMayusc = mayusculas($texto2);
echo $textoMayusc;


//Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
//en mayúscula.

function nombresPersona () {
    $nombres = array("maría", "raúl", "arantxa", "cristina", "arturo");
    $nombresMayuscula = array_map('ucfirst', $nombres);
    print_r($nombresMayuscula);
}
nombresPersona();

//Crear una clase coche con sus atributos y un atributo puede ser de tipo array

class Coche {
    public $marca;
    public $numPuertas;
    public $colores;


//Crear una función que devuelva la marca del carro.

    public function obtenerMarca() {
        return $this->marca;
}
} 
$coche = new Coche();
$coche->marca = "Seat";

$marcaCoche = $coche->obtenerMarca();
echo "Marca del coche: " . $marcaCoche;


//Crear una función que devuelva la cantidad de puertas que tiene el carro.

class Coche2 {
    public $marca;
    public $numPuertas;
    public $colores;

    public function obtenerNumPuertas() {
        return $this->numPuertas;
    }
}

$coche2 = new Coche2();
$coche2->numPuertas = 5;

$numPuertasCoche2 = $coche2->obtenerNumPuertas();
echo "Número de puertas: " . $numPuertasCoche2;

//Crear una función que devuelva un atributo del array.

class Coche3 {
    public $marca;
    public $numPuertas;
    public $colores;

    public function obtenerColor($indice) {
        if (isset($this->colores[$indice])) {
            return $this->colores[$indice];
        } else {
            return null;
        }
    }
}

$coche = new Coche3();
$coche->marca = "Toyota";
$coche->colores = array("Rojo", "Azul", "Negro");

$color = $coche->obtenerColor(1);

if ($color != null) {
    echo "Color obtenido: " . $color;
} else {
    echo "No se encontró el color solicitado.";
}


?>