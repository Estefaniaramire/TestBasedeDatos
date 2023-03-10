<!doctype html>
<html>
    <head>
      <title>Mostrar tabla</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
      <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        require_once('config.php');  
        $conn = new mysqli($servername,$username,$password,$dbname);
        $consulta="select * from usuario";
        $datos = $conn->query($consulta);
        echo "<table class ='table table-striped table-dark'>";
        echo "
        <th scope=col>id</th>
        <th scope=col>Nombre</th>
        <th scope=col>puntuacion</th>
        <th scope=col>tabla </th>
        <th scope=col>rangoInicial</th>
        <th scope=col>rangoFinal</th>
        <th scope=col>correo</th>
        <th scope=col>estatus</th>
        <th scope=col></th>";

        while ($registro = $datos->fetch_assoc()) 
        {

            echo "<tr>";
            echo "<td class='table-secondary'>".$registro["id"]."</td>";
            echo "<td class='table-secondary'>".$registro["nombre"]."</td>";
            echo "<td class='table-secondary'>".$registro["puntuacion"]."</td>";
            echo "<td class='table-secondary'>".$registro["tabla"]."</td>";
            echo "<td class='table-secondary'>".$registro["rangoInicial"]."</td>";
            echo "<td class='table-secondary'>".$registro["rangoFinal"]."</td>";
            echo "<td class='table-secondary'>".$registro["correo"]."</td>";
            echo "<td class='table-secondary'>".$registro["estatus"]."</td>";
            echo "<td class='table-secondary'></td>"; 
            echo "<tr/>";
        }
        echo "</table>";
        $conn->close();
        ?>
    <input class="btn btn-primary btn-lg" type="submit" value="Insertar"> 
</html>