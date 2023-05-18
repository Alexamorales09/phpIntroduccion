<?php

    //Declaracion de variables

    // Declarar una variable numerica
    $edad = 25;
    echo "texto a imprimir ";

    // Declarar una variable de texto 
    $texto = "Mundo ";
    printf("Hola %s", $texto);

    // Declarar una variable booleana
    $es_valido = true;
    printf($es_valido);
    echo var_dump($edad); //Imprime el tipo de dato y el valor

    //Declaracion de constantes

    $numero1 = 10;
    $numero2 = 22;
    $numero3 = 15;
    $numero4 = 40;

    echo "<br/>";
    var_dump($numero1 > $numero2);
?>