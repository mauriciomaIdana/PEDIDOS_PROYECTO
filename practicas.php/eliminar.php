<?php
$id_pedido = $_GET["id"];

require "conexiones.php";

$delete = "DELETE FROM pedidos WHERE id_pedido ='$id_pedido'";

$result = $mysql->query($delete);

if(!$result) {
    echo "error al eliminar el pedido";
}else{
    echo '<script language = javascript>
    alert("se elimino correctamente el pedido")
    self.location ="index.php"
    </script>';
}

?>