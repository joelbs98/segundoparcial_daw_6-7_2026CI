<?php
# Imprimir información
//Código PHP aquí
//Cada instrucción termina con ;
echo "Hola mundo";
echo "<h1>Hola desde PHP</h1>";
echo "<p>Esto lo genera el servidor </p>";
# Tambien es comentario de una sola linea
//Todas las variables empiezan con $
#Variables
$nombre = "Angie";
$edad = 27;
$activo = true;
/*
Comentario
multilinea
*/

echo $nombre;
echo "<br>";
echo $edad;
#Tipos de datos básicos
$texto = "Hola"; //string
$numero = 10; //int
$decimal = 3.14; //float
$estado = true; //boolean
$nulo = null; //null
echo "<br>";
var_dump($texto);
echo "<br>";
var_dump($decimal);
echo "<br>";
#Concatenación de strings
//En PHP se concatena con punto (.)
echo "Hola " . $nombre;
echo "<br>";
// Operadores aritmeticos ->Suma + Resta - Multiplicacion * Division /
$suma = 5 + 3;
$resta = 5 - 3;
$multi = 5 * 3;
$division = 5 / 3;

//Operadores relacionales (Comparativos)
/*
$a > $b
$a < $b
$a != $b
$a == $b -> igual valor
$a === $b -> igual valor y tipo
a = 1
b = "1"
*/

#Estructuras condicionales (if/else)
$edad = 20;
if ($edad >= 18) {
    echo "Mayor de edad";
} else {
    echo "Menor de edad";
}
echo "<br>";
#if /elseif/else
$nota = 8;
if ($nota >= 9) {
    echo "Excelente";
} elseif ($nota >= 7) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}
echo "<br>";
#Estructuras repetivas (bucles)
$i = 1;
while ($i <= 5) {
    /**/
    echo $i . "<br>";
    $i++;
}
for ($i = 1; $i <= 5; $i++) {
    echo "Numero: $i <br>";
}
#Arreglos (arrays)
#Arrays indexados
$colores = ["rojo", "verde", "azul"];
echo $colores[1];
echo "<br>";
#Recorrer array
foreach ($colores as $color) {
    echo $color . "<br>";
}
#Array asociativo
