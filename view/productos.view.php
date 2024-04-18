<?php
   
    use controller\Productos;

    $exam = new Productos();

    echo "Mostrar Productos";
    echo "<br>";
    print_r($exam->mostrar_productos());

    echo "<br>";

    echo "Mostrar Producto";
    echo "<br>";

     print_r($exam->mostrar_producto());

    echo "<br>";

    echo "Limitar productos";
    echo "<br>";

     print_r($exam->limite_productos());

     echo "<br>";

    echo "Filtrar productos";
    echo "<br>";
    
    print_r($exam->filtra_productos());
    echo "<br>";


    echo "Total de los productos";
    echo "<br>";

     print_r($exam->total_productos());
     echo "<br>";

    echo "Eliminar Producto";
    echo "<br>";

    print_r($exam->eliminar_producto());

?>