<?php 

session_start();
$connect = mysqli_connect("localhost","root","","proyectowave");

if(isset($_POST['usuario']) && isset($_POST['pass'])){

	$usuario = mysqli_real_escape_string($connect, $_POST["usuario"]);
	$pass = mysqli_real_escape_string($connect, $_POST["pass"]);
	$sql = "SELECT usuario FROM usuario WHERE (usuario='$usuario' OR email='$usuario') AND pass='$pass' ";
	$result = mysqli_query($connect,$sql);
	$num_row = mysqli_num_rows($result);
	if ($num_row == "1"){
		$data = mysqli_fetch_array($result);
		$_SESSION['usuario'] = $data["usuario"];
		echo "1";
	} else{
		echo "error";
	}
}



?>