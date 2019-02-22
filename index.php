<?php

  session_start();

  // isset verifica si el camo esta vacio
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clubes 2019</title>
    <link  href="img/logo.jpg" rel="icon">

<!--referencias segundo login -->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

   
  <!--Bootsrap 4 CDN
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  -->
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--fin referencias -->

    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100%  -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/css.css" rel='stylesheet' type='text/css' />

  </head>
  <body>

    


          <!--inicio de formulario login-->
            <div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Ingresar</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
      <div class="card-body">
        <form>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Ingresar email"
             id="user">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Ingresar clave"
             autocomplete="off"  id="clave">
          </div>
          <!--<div class="row align-items-center remember">
             <input type="checkbox">Remember Me 
          </div> -->

          <div class="form-group">
            <input type="button" value="Iniciar" class="btn float-right login_btn"
            name="button" id="login"> 
          </div>

        </form>
      </div>

      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          <a href="#">Camporee 2019</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#">Universidad de Navojoa</a>
        </div>
      </div>

    </div>
  </div>
</div>
          <!--fin de formulario login-->

    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
  </body>
</html>
