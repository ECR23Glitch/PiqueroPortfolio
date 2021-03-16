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
                    <li class="nav-item"><a class="nav-link" href="index.php">Checador&nbsp;<i class="icon ion-android-time"></i></a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Marcador&nbsp;<i class="icon ion-ios-football"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <hr><hr><hr>
    <div class="container bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-dark" style="text-align: center;">EL TORNEO</h2>
            <hr>
          </div>
            <div class="col-md-12">
                <h2 class="text-center text-dark" style="text-align: center;">ENUNCIADO DEL PROBLEMA</h2>
                <hr style="background-color:white;">
                <div class="col-md-12">
                  <p>
                  Tres equipos de futbol A,B Y C- disputaron un torneo de una sola
                  ronda, al cabo del cual apareció un papelito suelto con ciertos datos sobre la
                  cantidad de partidos ganados, perdidos, emptados, goles a favor y en contra.
                  Era asi:
                  </p>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jugado</th>
                        <th scope="col">Ganado</th>
                        <th scope="col">Perdido</th>
                        <th scope="col">Empatado</th>
                        <th scope="col">GF</th>
                        <th scope="col">GC</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">A</th>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td>1</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <th scope="row">B</th>
                        <td>2</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td>5</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">C</th>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>2</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <hr>
            </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="col-md-12">
          <button class="btn btn-primary" type="button" id="versol">VER SOLUCIÓN</button>
        </div>
      </div>
      <hr>
      <div class="container" id="resultados">
        <div class="col-md-12">
            <h2 class="text-center text-dark" style="text-align: center;">SOLUCION DEL PROBLEMA</h2>
            <hr style="background-color:white;">
            <div class="col-md-12">
              <p>
              A no ha empatado ningun partido = 0, pero tiene un gol a favor y uno en contra,
              es decir que ha ganado un solo partido: 1-0 y ha perdido el otro 0-1. <br>
              Como B ha ganado sus dos partidos, entonces ganó A vs B: 0-1 Y A vs C 1-0. <br>
              De los 5 goles que marcó B, 1 ha sido contra A, asi que contra C ha marcador
              4 goles.<br>
              De los 2 goles que marco C, 0 han sido contra A, así que los 2 han sido contra B, siendo
              el resultado B vs C: 4-2.
              </p>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jugado</th>
                    <th scope="col">Ganado</th>
                    <th scope="col">Perdido</th>
                    <th scope="col">Empatado</th>
                    <th scope="col">GF</th>
                    <th scope="col">GC</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">A</th>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <th scope="row">B</th>
                    <td>2</td>
                    <td>2</td>
                    <td>0</td>
                    <td>0</td>
                    <td>5</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <th scope="row">C</th>
                    <td>2</td>
                    <td>0</td>
                    <td>2</td>
                    <td>0</td>
                    <td>2</td>
                    <td>5</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
        </div>
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
    <script type="text/javascript">
      $(document).ready(function(){
        $("#resultados").hide();

        $("#versol").click(function(){
          $("#resultados").show(1000);
        })
      });
    </script>
</body>

</html>
