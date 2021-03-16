<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Piquero</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/Beautiful-Time-Picker.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body class="text-center">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="#">PIQUERO</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Checador&nbsp;<i class="icon ion-android-time"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Marcador&nbsp;<i class="icon ion-ios-football"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <hr><hr><hr>
    <div class="container bg-light">
      <div class="container">
          <hr>
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center text-dark" style="text-align: center;">CHECADOR DE ESTACIONAMIENTO</h2>
              <hr>
            </div>
              <div class="col-md-12">
                  <h2 class="text-center text-dark" style="text-align: center;">HORA ENTRADA</h2>
                  <hr style="background-color:white;">
                  <div class="col-md-12">
                    <input class="text-center" id="he" width="100%" style="align:center;">
                  </div>
                  <hr>
              </div>
          </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h2 class="text-center text-dark" style="text-align: center;">HORA SALIDA</h2>
              <hr>
              <div class="col-md-12">
                <input class="text-center" id="hs" width="100%" style="text-align: center;">
              </div>
            <hr>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col">
              <button class="btn btn-primary" type="button" id="benviardatos">ACEPTAR</button>
            </div>
        </div>
      </div>
      <hr>
      <div class="container" id="resultados">

      </div>
    </div>
    <hr>
    <hr>
    <hr>
    <div class="footer-basic">
        <footer>
            <div class="social">
              <a href="https://api.whatsapp.com/send?phone=522227012043" target="_blank"><i class="icon ion-social-whatsapp-outline"></i></a>
              <a href="https://www.instagram.com/eliascamacho.css/" target="_blank"><i class="icon ion-social-instagram"></i></a>
              <a href="https://twitter.com/R23Ec" target="_blank"><i class="icon ion-social-twitter"></i></a>
              <a href="https://www.facebook.com/ECR2399" target="_blank"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul
                class="list-inline">
                <li class="list-inline-item"><a class="active" href="index.php">Checador&nbsp;<i class="icon ion-android-time"></i></a></li>
                <li class="list-inline-item"><a href="marcador.php">Marcador&nbsp;<i class="icon ion-ios-football"></i></a></li>
                </ul>
                <p class="copyright">ELIAS CAMACHO RAMIREZ © 2021</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#benviardatos").click(function(){
        var he = $("#he").val();
        var hs = $("#hs").val();
        $.ajax({
          type: "POST",
          data: {'horaentrada':he, 'horasalida':hs},
          url: 'assets/php/proceso.php',
          beforeSend: function(){
            $('#resultados').html("<h1 class='text-center text-dark'>Se esta procesando su solicitud...</h1>");
          },
          success: function(response){
            $('#resultados').html(response);
          }
        });
      });
    });

    </script>
    <script type="text/javascript">
    $(function() {
      $("#he").timepicker({
        format:'HH.MM',
        footer: false
      });

      $("#hs").timepicker({
        format:'HH.MM',
        footer: false
      });
    });
    </script>
</body>

</html>
