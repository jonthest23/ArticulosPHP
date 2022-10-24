<?php

$articulos = [
    [
        'id' => 1,
        'nombre' => 'Articulo 1',
        'precio' => 100,
        'cantidad' => 10,
    ],
    [
        'id' => 2,
        'nombre' => 'Articulo 2',
        'precio' => 200,
        'cantidad' => 20,
    ],
    [
        'id' => 3,
        'nombre' => 'Articulo 3',
        'precio' => 300,
        'cantidad' => 30,
    ],
    [
        'id' => 4,
        'nombre' => 'Articulo 4',
        'precio' => 400,
        'cantidad' => 40,
    ],
    [
        'id' => 5,
        'nombre' => 'Articulo 5',
        'precio' => 500,
        'cantidad' => 50,
    ],

];
?>


<!DOCTYPE html>
<html lang = "es">
<head>
    <title>Promedio articulos</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>cantidad</td>
                <td>precio</td>
            </tr>   
        </thead>
        <tbody>
            <?php 

            foreach($articulos as $articulo){
                echo '<tr> <td>'. $articulo['id'] . '</td> ';
                echo '<td>'. $articulo['nombre'] . '</td> ';
                echo '<td>'. $articulo['cantidad'] . '</td> ';
                echo '<td>'. $articulo['precio'] . '</td> </tr>';
            }; 
            
            ?> 
        </tbody>
        <tfoot>
            <tr>
                <td colspan = "3"> total</td>
                <td>
                    <?php 
                    $total = 0;
                    $cont = 0;
                    foreach($articulos as $articulo){
                        $total = $total + $articulo['precio'];
                        $cont++;

                    };
                    echo $total/$cont;
                ?>
                <td>
            </tr>    
        </tfoot>
</table>   
</body>
</html>

