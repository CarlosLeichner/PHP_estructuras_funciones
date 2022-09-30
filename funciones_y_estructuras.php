<?php
    //nivel 1 ejercicio1
    $edad = 32;
    if (($edad % 2) == 0) {
        echo 'Es un número par',"<br>";
    } else {
        echo 'Es un número impar',"<br>";
    }

    //ejercicio2
    $escondrijo = array(1,2,3,4,5,6,7,8,9,10);
    for($i = 1; $i < count($escondrijo); $i++) {
        echo $escondrijo[$i++].'<br />';
     }

     //ejercicio3 
     /*Imagínate que queremos que cuente hasta un número diferente de 10. 
     Programa la función para que el final de la cuenta esté parametrizado.*/
     for($i = 1; $i < 9; $i++) {
        echo $i.'<br />';
     }

     //ejercicio 4
     /* Para prevenir olvidos al utilizar nuestra maravillosa opción "escondrijo" 
     estableceremos un parámetro por defecto igual a 10 en la función que se encarga de 
     realizar esta cuenta.-*/
     for($i = 1; $i <=10; $i++) {
        echo "<pre> <br>";
        var_dump($i).'<br />';
     }



    // Ejercicio 5
    /*Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.

    Condiciones:

    Si la nota es 60% o más, el grado debería ser Primera División.
    Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
    Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
    Si la nota es menor a 33%, el estudiante reprobará.*/
   
    $nota = 5;
    if ($nota >= 60) {
        echo "el grado debería ser Primera División.",'<br />';
    }elseif ($nota >= 45) {
        echo "el grado debería ser Segunda División.",'<br />';
    }elseif ($nota >= 33) {
        echo "el grado debería ser Tercera División.",'<br />';
    }elseif ($nota <33) {
        echo "el estudiante reprobará.",'<br />';
    }
    
    
    
    // Ejercicio 6
    /*Charlie me mordió el dedo!

    Charlie te morderá el dedo exactamente el 50% del tiempo.

    Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad y
     FALSE de lo contrario.*/

     function isBitten(){
     $charlie = rand(0, 100);

     if ($charlie <= 50) { 
     echo "Charile te mordió el dedo!"; 
     }

     else {
     echo "Charlie no te mordió.";
     }
     }
     echo isBitten()."<br>";


?>