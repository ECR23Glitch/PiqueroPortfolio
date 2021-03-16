<?php
if($_POST){

  $he = $_POST['horaentrada'];
  $hs = $_POST['horasalida'];
  $ht = $hs-$he;
  $mt = 0;
  $contadorhorasdiurnas = 0;
  $contadorhorasnocturnas = 0;
  if($ht==0.15){
    $mt = 0;
  }

  if($hs==$he){
    $mt = 0;
  }

  if($hs<21.00 or $he<21.00){
     if($hs>9.00 or $he>9.00){
       if($hs<$he){
         $ht = $he - $hs;
         $mt = $ht * 10;
       }else{
         $ht = $hs - $he;
         $mt = $ht * 10;
       }
     }
  }

  if($hs>21.00 or $he>21.00){
       if($hs<$he){
         $ht = $he - $hs;
         $mt = $ht * 50;
       }else{
         $ht = $hs - $he;
         $mt = $ht * 50;
       }
  }


  $resultados = "
  <div class='col-md-12'>
      <h1 class='text-center text-dark' style='text-align: center;'>MONTO A PAGAR</h1>
      <hr>
      <div class='col-md-12'>
        <h3 class='text-center text-dark' style='text-align: center;'>$ $mt</h3>
      </div>
      <h1 class='text-center text-dark' style='text-align: center;'>DETALLES</h1>
      <hr>
      <div class='col-md-12'>
        <p>HORA DE ENTRADA: $he</p><br>
        <p>HORA DE SALIDA: $hs</p><br>
        <p>HORAS TOTALES DE ESTANCIA: $ht </p>
      </div>
    <hr>
  </div>";
  echo $resultados;
}
 ?>
