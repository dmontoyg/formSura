<?php
//session_start();
//require __DIR__ . '/index.php';
//if (!isset($_SESSION['userdata'] && $_SESSION['oauth_bearer'] && $_SESSION['access_token'])) {
    //header('location: index.php');
//}
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>

<img class="banner__homeSura__Desktop" src="img/BANNER-INTERNO-DESKTOP-SURA-DESCUENTO-CONVENIO-ene2022.jpg" alt="Promo Sura";">
<img class="banner__homeSura__Mobile" src="img/BANNER-INTERNO-MOBILE-SURA-DESCUENTO-CONVENIO-ene2022.jpg" alt="Promo Sura";">
<div class="wrapper">
  <form action="index.php" method="post" class="login">
    <p class="title">Consulta aquí tu documento de identidad, para la alianza SURA y Medipiel</p>
    <div class="subtitle">Buscar Documento:</div>
     <input type="text" name="busquedacodigo" placeholder="Ingresa tu número de cédula" size="20" maxlength="20"required>

     <button>
      <i class="spinner"></i>
      <span type="submit" value="Buscar" class="state">CONSULTAR</span>
    </button>

     <?php
        if((!empty($_POST['busquedacodigo']))|| isset($_POST['busquedacodigo'])){
          $file = fopen ("./dni1.txt", "r");
          $linea = fgets($file);
          $var = $_POST['busquedacodigo'];
            while (!feof($file) && $linea!=$var) {
              $linea = fgets($file);
            }
              if ($linea==$var) {
                echo "<div class='mensaje__final'>el cliente con documento: <span class='info__importante'>$var</span> fue encontrado exitosamente</div>";
                echo "<div class='mensaje__final'>tiene el código: <span class='info__importanteCupon'>SURAMEDIPIEL</span></div>";
                echo "<div class='mensaje__checkout'>Recuerda ingresarlo al final, en el checkout</div>";
                echo "<div class='boton__comprar' ><a target='_blank' href='https://www.medipiel.com.co/858?map=productClusterIds'>Ir a comprar</a></div>";
                echo "<img class='banner__homeSura__Desktop' src='img/BANNER-CUPON-SURA-DESKTOP.jpg' alt='Promo Sura'>";
                echo "<img class='banner__homeSura__Mobile' src='img/BANNER-CUPON-SURA-MOBILE.jpg' alt='Promo Sura'>";
                //echo "Sí está:".substr($pasar,9,8);
                }else{
                  $file2 = fopen ("./dni2.txt", "r");
                  $linea2 = fgets($file2);
                  $var2 = $_POST['busquedacodigo'];
                    while (!feof($file2) && $linea2!=$var2) {
                      $linea2 = fgets($file2);
                    }
                      if ($linea2==$var2) {
                        echo "<div class='mensaje__final'>el cliente con documento: <span class='info__importante'>$var2</span> fue encontrado exitosamente</div>";
                        echo "<div class='mensaje__final'>tiene el código: <span class='info__importante'>SURAMEDIPIEL</span></div>";
                        echo "<div class='boton__comprar'><a target='_blank' href='https://www.medipiel.com.co/858?map=productClusterIds'>Ir a comprar</a></div>";
                        echo "<img class='banner__homeSura__Desktop' src='img/BANNER-CUPON-SURA-DESKTOP.jpg' alt='Promo Sura'>";
                        echo "<img class='banner__homeSura__Mobile' src='img/BANNER-CUPON-SURA-MOBILE.jpg' alt='Promo Sura'>";
                        //echo "Sí está:".substr($pasar,9,8);
                        }else{
                          $file3 = fopen ("./dni3.txt", "r");
                          $linea3 = fgets($file3);
                          $var3 = $_POST['busquedacodigo'];
                            while (!feof($file3) && $linea3!=$var3) {
                              $linea3 = fgets($file3);
                            }
                              if ($linea3==$var3) {
                                echo "<div class='mensaje__final'>el cliente con documento: <span class='info__importante'>$var3</span> fue encontrado exitosamente</div>";
                                echo "<div class='mensaje__final'>tiene el código: <span class='info__importante'>SURAMEDIPIEL</span></div>";
                                echo "<div class='boton__comprar'><a target='_blank' href='https://www.medipiel.com.co/858?map=productClusterIds'>Ir a comprar</a></div>";
                                echo "<img class='banner__homeSura__Desktop' src='img/BANNER-CUPON-SURA-DESKTOP.jpg' alt='Promo Sura'>";
                                echo "<img class='banner__homeSura__Mobile' src='img/BANNER-CUPON-SURA-MOBILE.jpg' alt='Promo Sura'>";
                                //echo "Sí está:".substr($pasar,9,8);
                                fclose ($file3);
                              }else{
                                  echo "<div class='mensaje__final'>El documento ingresado no fue encontrado para aplicar a esta promo.</div>";
                                  echo "<div class='mensaje__intentar'>Por favor intenta nuevamente.</div>";
                                }
                              }
                          fclose ($file);
                          fclose ($file2);
                        }
                      }
?>
</form>
</html>