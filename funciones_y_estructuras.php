<?php
echo "EJERCICIO 1"."<br>";
    function parImpar(){
    $edad = 32;
    if (($edad % 2) == 0) {
        echo 'Es un número par',"<br>";
    } else {
        echo 'Es un número impar',"<br>";
    }
    }
    parImpar();

    echo "EJERCICIO 2"."<BR>";
    function conteo(){
    $escondrijo = array(1,2,3,4,5,6,7,8,9,10);
    for($i = 1; $i < count($escondrijo); $i++) {
        echo $escondrijo[$i++].'<br />';
    }
    }
    conteo();

     echo "EJERCICIO 3"."<BR>";
     /*Imagínate que queremos que cuente hasta un número diferente de 10. 
     Programa la función para que el final de la cuenta esté parametrizado.*/
     function conteoAleatorio(){
     $n =rand(1,20);
     for($i = 1; $i <= $n; $i++) {
        echo $i.'<br />';
     }
    }conteoAleatorio();


     echo "EJERCICIO 4";
     /* Para prevenir olvidos al utilizar nuestra maravillosa opción "escondrijo" 
     estableceremos un parámetro por defecto igual a 10 en la función que se encarga de 
     realizar esta cuenta.-*/
    function aleatorio($n=10){
        
     for($i = 1; $i <= $n; $i++) {
        echo "<pre> <br>";
        var_dump($i).'<br />';
     }
    }
    aleatorio();



    echo "EJERCICIO 5". "<br>";
    /*Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.

    Condiciones:

    Si la nota es 60% o más, el grado debería ser Primera División.
    Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
    Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
    Si la nota es menor a 33%, el estudiante reprobará.*/
   
    $nota =rand(0,100);
    function notas($nota){
        
        switch ($nota) {
            case ($nota >= 60)&& ($nota <=100):
                echo "Primera division". "<br>";
                break;
            case ($nota < 60)&& ($nota >= 45):
                echo "Segunda division". "<br>";
                 break;
            case ($nota < 45)&& ($nota >= 33):
                echo "Tercera division". "<br>";
                break;
            case ($nota < 33)&& ($nota >= 0):
                echo "El estudiante reprobara division". "<br>";
                break;
        }
    }
    echo "La nota obtenida es $nota" ."<br>";
    notas($nota);
    
    
    
    
    echo "EJERCICIO 6"."<br>";
    /*Charlie me mordió el dedo!

    Charlie te morderá el dedo exactamente el 50% del tiempo.

    Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad y
     FALSE de lo contrario.*/

     function isBitten(){
     $charlie = rand(0, 100);

     if ($charlie <= 50) { 
     echo "Charile te mordió el dedo!"."<br>"; 
     }

     else {
     echo "Charlie no te mordió."."<br>";
     }
     }
     isBitten()."<br>";


?>