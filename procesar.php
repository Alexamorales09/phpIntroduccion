//Cuando enviamos informacion por el metodo get esta informacion queda almacenada en la variable global $_GET, REQUEST

<?php
    $nombres = $_REQUEST["name"];

    echo "<p>El nombre del usuario es: $nombres </p>";

    $python = $_REQUEST["python"];

    echo "pyton: {$python}";

