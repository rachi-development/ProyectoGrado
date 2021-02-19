<?php 
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'proyectowave') or die(mysqli_error($mysqli));



$id = 0;
$nombre = '';
$talla = '';
$descripcion = '';
$color = '';
$update = false;

if (isset($_POST['save'])) {
	
	$nombre = $_POST['nombre'];
	$talla = $_POST['talla'];


	$_SESSION['message'] = "El registro ha sido guardado";
	$_SESSION['msg_type'] = "success";

	header("location: admin.php");


	$mysqli->query("INSERT INTO productos (nombre, talla) VALUES('$nombre', '$talla') ") or die($mysqli->error);
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM productos WHERE id=$id") or die($mysqli->error());

	$_SESSION['message'] = "El registro ha sido eliminado";
	$_SESSION['msg_type'] = "danger";
	header("location: admin.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM productos where id=$id") or die($mysqli->error());
	if($result->num_rows){
  		$row = $result->fetch_array();
		$nombre = $row['nombre'];
		$talla = $row['talla'];
	}
  }


if (isset($_POST['update'])){
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$talla = $_POST['talla'];

	$mysqli->query("UPDATE productos SET nombre='$nombre', talla='$talla' WHERE id=$id ") or die($mysqli->error);

	$_SESSION['message'] = "Ha sido actualizado con éxito";
	$_SESSION['msg_type'] = "warning";

	header('location: admin.php');

}

?>

<!--**Si falla esto es porque la contraseña me daba problema si la quito se resuelve -->
<!-- Si algo falla asegurate que no es la caché** -->