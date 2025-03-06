<html>
    <head>
        <title>Ejemplo de PHP con switch</title>
</head>
<bodY>
    <?php
    $posicion = "arriba";
    switch($posicion)
    {
        case "arriba" : //bloque 1
            echo "La variable constiene";
            echo " el valor arriba";
            break;
        case "abajo" : //bloque 2
            echo "La variable constiene";
            echo " el valor abajo";
            break;
        default : //Bloque 3
           echo "La variable contiene otro valor";       
           echo " distinto de arriba y abajo";
    }
    ?>
</body>
</html>