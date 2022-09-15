<?php
  include_once "config/ruta.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DatacomSRL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo SERVERURL; ?>views/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo SERVERURL; ?>views/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo SERVERURL;?>views/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SERVERURL; ?>views/dist/css/adminlte.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo SERVERURL;?>views/plugins/toastr/toastr.min.css">
  <!-- SweetAlert -->
  <link rel="stylesheet" href="<?php echo SERVERURL;?>views/plugins/sweetalert2/sweetalert2.css">
  
  <!-- jQuery -->
  <script src="<?php echo SERVERURL; ?>views/plugins/jquery/jquery-3.5.1.js"></script>
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!--=================================================
      Cabecera superior 
    ==================================================-->
    <?php
      include_once "views/header.php";
    ?>
    <!--=================================================
      Menu Lateral izquierdo - Menu principal
    ==================================================-->
    <?php
      include_once "views/menu.php";
    ?>
    <!--=================================================
      Seccion de modulos
    ==================================================-->
    <?php
    if(isset($_GET['view'])){

      $view = explode("/",$_GET['view']);
      if(is_file('views/modulos/'.$view[0].'.php')){
          include 'views/modulos/'.$view[0].'.php';
      }else{
          include 'views/modulos/plantilla.php';
      }
    }else{
      include_once 'views/modulos/plantilla.php';
    }
    ?>
    <!--=================================================
      Pie de pagina
    ==================================================-->
    <?php
      include_once "views/footer.php";
    ?>
    <!--=================================================
      Menu lateral derecho
    ==================================================-->
    <aside class="control-sidebar control-sidebar-dark">
      <p>Herramientas de datacom</p>
    </aside>
  </div>
  <!-- ./wrapper -->

  
  <!-- Bootstrap 4 -->
  <script src="<?php echo SERVERURL; ?>views/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Toastr -->
  <script src="<?php echo SERVERURL; ?>views/plugins/toastr/toastr.min.js"></script>
  <!-- sweetAlert -->
  <script src="<?php echo SERVERURL; ?>views/plugins/sweetalert2/sweetalert2.all.js"></script>
  
  
  <!-- AdminLTE App -->
  <script src="<?php echo SERVERURL; ?>views/dist/js/adminlte.js"></script>
</body>
</html>
