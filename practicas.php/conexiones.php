<?php

$servidor = "localhost";
$user = "root";
$password = "";
$base_de_datos = "proyecto";

$mysql = new mysqli($servidor, $user, $password, $base_de_datos);

if  ($mysql->connect_errno) {
    echo "no se pudo realizar la conexion";
}else{
    //echo "la conexcion a la base de datos se a realizado con exito :)";
}

//$sql = "SELECT * FROM pedidos ORDER BY  pedidos . id_pedido" ;

//$result = $mysql->query($sql);

//echo "<br>se encontraron " . mysqli_num_rows($result) . " resultado<br>";

//while ($id_pedido = mysqli_fetch_array($result)) {
   // echo $id_pedido[0] . "<br>";
    //echo $id_pedido[1] . "<br>";
   // echo $id_pedido[2] . "<br>";
   // echo $id_pedido[3] . "<br>";
    

    
//}

?>  