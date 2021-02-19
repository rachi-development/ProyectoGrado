<?php include("process.php"); ?>  <!-- Ya está iniciada la sesión en process.php -->
<!-- MENÚ -->
<?php include('includes/header.php'); ?> 


<!-- container -->
<div class="container">

  <section class="bg-light pt-5" id="inicio">
    <div class="container pt-5">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-7 order-2 order-md-1"> 
         <h1 class="display-3 font-weight-bold">WAVE KIDS</h1>  
         <h5 class="font-weight-bold">ESPECIALISTAS EN SURFEO DE NIÑOS</h5>
         <a href="#" class="btn btn-info font-weight-light px-5 text-uppercase">PRODUCTOS</a>
        </div>

        <div class="col-md-5 col-lg 6 order-1 order-md-2 text-center">
          <img src="img/traje1.jpg" alt="Photo surfing" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section class="py-5" id="nosotros">
    <div class="container py-5">
      <div class="row mb-5">
        <div class="col text-center">
          <h1 class="display-4">Sobre nosotros</h1>
          <p class="lead text-muted">
            dssdffdsd
          </p> 
        </div>
        
      </div>
      
      
    </div>
  </section>
  <section class="py-5" id="contacto">
    <div class="container py-5">
      <div class="row mb-5">
        <div class="col text-center">
          <h1 class="display-4">Pregunta lo que necesites</h1>
          <p class="lead text-muted">
            
          </p> 
        </div>
      </div> 
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <form class="text-muted">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" name="form-control" id="nombre">
              
            </div>
            <div class="form-group">
              <label for="apellido">Apellidos:</label>
              <input type="text" name="form-control" id="apellido">
              
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input  type="text" name="form-control" id="email">
              
            </div>
            <div class="form-group">
              <label for="textarea">Mensaje:</label>
              <textarea cols="5" rows="5" id="textarea" class="form-control"></textarea>
              
            </div>
            <button class="btn btn-info mt-4 btn-block">Enviar</button>

          </form>
        </div>
      </div>
    </div>
  </section>

  
</div> <!-- container -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <?php include('includes/footer.php') ?> <!-- FOOTER -->
