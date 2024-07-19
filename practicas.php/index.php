<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEDIDOS</title>
    <style>


        body {
            background: #ff7e5f;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #feb47b, #ff7e5f);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #feb47b, #ff7e5f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #6A63F3;
        }

        a {
            display: inline-block;
            margin: 20px auto;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            border: 1px solid #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #007bff;
            color: #fff;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td a {
            color: #007bff;
            text-decoration: none;
            border: 1px solid #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        td a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
<?php
require 'conexiones.php';

$sql = "SELECT * FROM `pedidos` ORDER BY  pedidos . id_pedido";
$result = $mysql->query($sql);

//echo "<br>se encontraron " . mysqli_num_rows($result) . " resultado<br>";
?>

<H2>Pedidos</H2>
<a href="nuevos_pedidos.php">agregar un nuevo pedido</a>

<table border="1">
    <tr>
    <td>ID del pedido</td>
    <td>DNI</td>
    <td>Fecha</td>
    <td>Estado</td>
    <td>Modificar</td>
    <td>Eliminar</td>
    </tr>
    <?php
    while ($id_pedido= mysqli_fetch_assoc($result)) {
    ?>
    <tr>
    <td><?php echo $id_pedido["id_pedido"]; ?></td>
        <td><?php echo $id_pedido["dni_usuario"]; ?></td>
        <td><?php echo $id_pedido["fecha_pedido"]; ?></td>
        <td><?php echo $id_pedido["estado"]; ?></td> 
        <td><a href="http://localhost/prue/practicas.php/modificar.php?id=<?php echo $id_pedido["id_pedido"]; ?>">Modificar</a></td>
        <td><a href="http://localhost/prue/practicas.php/eliminar.php?id=<?php echo $id_pedido["id_pedido"]; ?>">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>