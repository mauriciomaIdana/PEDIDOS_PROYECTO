<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR PEDIDO</title>

    <style>
        body {
            background: #ff7e5f;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #feb47b, #ff7e5f);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #feb47b, #ff7e5f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>
<?php
$id_pedido = $_GET["id"];

require "conexiones.php";
$consulta = "SELECT * FROM pedidos WHERE id_pedido ='$id_pedido'";
$result = $mysql->query($consulta);
$datos = mysqli_fetch_assoc($result);
?>
<h2>Bienvenidos a Modificar pedidos</h2>
    <form action="insert_pedido.php" method="post">
        <input type="text" name="id_pedido" id="id_pedido"placeholder="numero_pedido" values="<?php echo $datos['id_pedido']; ?>">
        <input type="text" name="dni_usuario" id="dni_usuario"placeholder="dni" values="<?php echo $datos['dni_usuario']; ?>" >
        <input type="text" name="fecha_pedido" id="fecha_pedido"placeholder="fecha"  values="<?php echo $datos['fecha_pedido']; ?>">
        <input type="text" name="estado" id="estado"placeholder="estado"   values="<?php echo $datos['estado']; ?>">
        <button>guardar</button>
    </form>
</body>
</html>