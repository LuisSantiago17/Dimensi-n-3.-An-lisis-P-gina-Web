<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimension 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header id="main-header">
        <a id="logo-header" href="#">
            <span class="site-name">Fundamentos de Programación Web</span><br>
            <span class="site-desc">Dimension 3</span>
        </a>
        <nav>
            <ul>
                <li><a href="index prueba.php">Inicio</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Operadores</a>
                    <div class="dropdown-content">
                        <a href="Operadores Aritmeticos.php">Operadores Aritmeticos</a>
                        <a href="Operadores de incremento.php">Operadores de incremento</a>
                        <a href="Operadores de comparacion.php">Operadores de comparacion</a>
                        <a href="Operadores logicos.php">Operadores logicos</a>
                    </div>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Variables y Constantes</a>
                    <div class="dropdown-content">
                        <a href="Variables.php">Variables</a>
                        <a href="Constante.php">Constante</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>


    <section id="main-content">
    <article>
            <header>
                <h3>Operadores de incremento</h3>
                <p> El operador de incremento se utiliza para aumentar el valor de una variable en una unidad.</p>
            </header>
            <p> 
            <?php
            $a = 8;
            $b = 3;

            $a++;
            echo $a,"<br>";
            $b--;
            echo $b,"<br>";
            ?>
            </p>
</body>

</html>