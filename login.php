<?php

session_start();
if (isset($_SESSION['usuario'])) {
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form method="post">
					<h1><p class="text-center">Login</p></h1>	
					<div class="form-group">
						<label for="">Usuario o email</label>
						<input type="text" name="usuario" id="usuario" class="form-control">
					</div>
					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
					<br>
					<br>
					<div class="form-group">
						<input type="button" name="login" value="Login" class="btn btn-success">
					</div>
					<br>
					<span id="result"></span>
				</form>
				
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script>
	$(document).ready(function(){
		$('#login').click(function(){
			var usuario = ('#usuario').val();
			var pass = ('#pass').val();
			if($.trim(usuario).length > 0 && $.trim(pass).length > 0){
				$.ajax({
					url:"logueame.php",
					method:"POST",
					data:{usuario:usuario, pass:pass},
					cache:"false",
					beforeSend:function(){
						$('login'.val("Conectando..."));
					},
					success:function(data){
						$('#login').val("Login");
						if (data=="1"){
							$(location).attr('href','index.php');

						} else{
							$("#result").html("<div class='alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong>Las credenciales son incorrectas.</div>");
						}
					}
				})
			}
		});
	});
</script>
</html>