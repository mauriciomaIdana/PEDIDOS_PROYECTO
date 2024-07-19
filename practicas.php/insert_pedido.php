<?php

$numero_pedido = $_POST["id_pedido"];
$dni = $_POST ["dni_usuario"];
$fecha = $_POST ["fecha_pedido"];
$estado = $_POST ["estado"];

$insert = "insert into pedidos (id_pedido, dni_usuario, fecha_pedido, estado) VALUES ('$numero_pedido', '$dni', '$fecha', '$estado')";

require 'conexiones.php' ;

$result = $mysql->query($insert);

echo '<script language = javascript> 
alert("se agrego correctamente el pedido")
self.location = "index.php"
</script>';



?>