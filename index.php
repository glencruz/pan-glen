<?php require_once('admin/config.php'); ?>

<?php $isHome = true ;

include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id_producto, producto, descripcion, imagen, precio FROM productos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$productos=$resultado->fetchAll(PDO::FETCH_ASSOC);


?>


<?php require("views/index.view.php"); ?>