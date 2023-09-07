<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>


    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida

        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '</ul>';

    

        
    ?>



</body>

<body>

    <h2>Ejercicio 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <p>$a = “ManejadorSQL”, $b = 'MySQL’, $c = &$a</p>

    <?php
     
     $foo = 'MySQL';
     $bar = &$foo;
     $bar = "ManejadorSQL $bar";
     echo '<ul>';
     echo $foo;
     echo $bar;
     echo '</ul>';

     $bar = "PHP server";
     $bar = &$bar;
     echo '<ul>';
     echo $bar;
     echo '</ul>';
     //$foo = 'Juan'; // asigna el valor ’Juan’ a $foo
     //$bar = &$foo; // referencia $foo via $bar
     //$bar = "Mi nombre es $bar"; // modifica $bar...
     //echo $foo; // $foo también se modifica
     //echo $bar;
    

      echo '<ul>';
      echo '<li> NOTA: OBSERVAR DETALLADAMENTE LAS COMILLAS A VECES ESE PUEDE SER EL PROBLEMA.</li>';
      echo '</ul>';
    
    ?>

</body>

<body>
   <h2>Ejercicio 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
       //verificar la evolución del tipo de estas variables (imprime todos los componentes de los
       //arreglo):</p>
    <p>$a = “PHP5”, $z[] = &$a, $b = “5a version de PHP”, $c = $b*10, $a .= $b, $b *= $c, $z[0] = “MySQL”</p>

    <?php 
      //  $foo = "PHP5";
       // $bar[0] = &$foo;
       // $b = "5a version de PHP";
       // $c = $b*10;
       // $a .= $b;
       // $b *= $c;
       // $z[0] = "MySQL";

        //echo $foo;


        //echo '<ul>';
        //echo "$b";
        //echo '</ul>'; 

    ?>


</body>

<body>
    <h2>Ejercicio 7</h2>
    <p>Usando la variable predefinida $_SERVER, determina lo siguiente:</p>
    <p>a. La versión de Apache y PHP,</p>
    <p>b. El nombre del sistema operativo (servidor),</p>
    <p>c. El idioma del navegador (cliente).</p>

    <?php
    // VERSION DE APACHE
    $apacheVersion = $_SERVER['SERVER_SOFTWARE'];
    echo '<ul>';
    echo '<li>"Versión de Apache: "</li>' . $apacheVersion;
    echo '</ul>';

    //NOMBRE DE SISTEMA OPERATIVO
    $serverSoftware = $_SERVER['SERVER_SOFTWARE'];
    echo '<ul>';
    echo '<li>"Nombre del sistema operativo: "</li>' . $serverSoftware;
    echo '</ul>';

    //IDIOMA DE NAVEGADOR
    $clientLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo '<ul>';
    echo '<li>"Idioma del navegador: "</li>' . $clientLanguage;
    echo '</ul>';
    
    ?>
</body>

</html>