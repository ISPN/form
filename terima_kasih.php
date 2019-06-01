<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thankyou</title>
  <!-- CORE CSS-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>

</head>

<body class="blue">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="http://w3lessons.info/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Thank You</p>
          </div>
        </div>

 <div class="row center">
 	<h3 class="center"> <?php echo $sTanggal; ?>  </h3></br>
 	<p class="center">Nama : <i> <?php if(!empty($sNama)) echo $sNama; ?></i><p>
 	<p class="center">Alamat : <i><?php if(!empty($sAlmt)) echo $sAlmt; ?></i><p>
 	<p class="center">Kurir : <i> <?php  if(!empty($sJumlah)) echo $sJumlah;   ?> </i><p>
 	<p class="center">Ongkir : <i> <?php  if(!empty($sHarga)) echo $sHarga;   ?></i><p>

 	<p class="center">Total Tagihan : <i><?php  if(!empty($sTagihan)) echo $sTagihan;   ?></i><p>
===========Thankyou, Have a Nice Day!==========
</div>

        <div class="row">
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Submit another data? <a href="http://webdesign.dev.cc/form1/Archive/form_order.php">Click Here</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>


  <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2017 sample.com
            <a class="grey-text text-lighten-4 right" href="http://w3lessons.info">Form Test</a>
            </div>
          </div>
  </footer>
</body>

</html>
