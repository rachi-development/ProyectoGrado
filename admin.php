<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <title>WAVE KIS</title>
  </head>

<body>

  <?php require_once 'process.php'; ?>


  <?php

    if (isset($_SESSION['message'])): ?>

      <div class="alert alert-<?=$_SESSION['msg_type']?>"> 

          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);

          ?>
      </div>

    <?php endif ?>

  <div class="container">
  <?php

    $mysqli = new mysqli('localhost', 'root', '','proyectowave') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM productos") or die ($mysqli->error);
    //pre_r($result);

    ?>

    <div class="row justify-content-center">
      <table class="table">
        <thead>
          <tr>
            <th>Nombre producto</th>
            <th>talla</th> 
            <th colspan="2">Acción</th>
          </tr>
        </thead>

        <?php
          while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row['nombre']; ?> </td>
              <td><?php echo $row['talla']; ?> </td>
              <td>
                <!-- Aquí tengo que ponerme de acuerdo con los nombres de edit etc -->
                <a href="admin.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Editar</a>
                <a href="process.php?delete=<?php echo $row['id']; ?> " class="btn btn-danger">Borrar</a>
              </td>
            </tr>
          <?php endwhile; ?>
        
      </table>
    </div>

    
    <?php
    

    function pre_r($array) {
      echo '<pre>';
      print_r($array);
      echo '</pre>';
    }
  ?>

  <div class="row justify-content-center">
    <form action="process.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
          <label>nombre</label>
          <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?> " placeholder="Tu nombre">
        </div>
        <div class="form-group">
          <label>talla</label>
          <input type="text" name="talla" class="form-control" value="<?php echo $talla; ?> " placeholder="tu talla">
        </div> 
        <div class="form-group">
          <?php 
            if ($update == true):


          ?>
            <button type="submit" class="btn btn-info"  name="update">Update </button>
          <?php else: ?>
          <button type="submit" class="btn btn-primary" name="save">Guardar</button>
        <?php endif; ?>
        </div>
    </form>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>