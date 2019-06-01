<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form Pemesanan</title>
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
<php
  date_default_timezone_set("Asia/Jakarta");
?>
  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
    	<script type="text/javascript">
    	var submitted=false;
    	</script>
 		<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"
		onload="if(submitted) { alert();window.location='terima_kasih.php';}">
		</iframe>
     <!-- Google sheet URL -->
      <form class="login-form" action="terima_kasih.php" method="post"
		onsubmit="submitted=true; return ray.ajax();">

        <div class="row">
          <div class="input-field col s12 center">
            <img src="http://w3lessons.info/logo.png" alt="" class="responsive-img valign profile-image-login">
            <h5><p class="center login-form-text">Form Registration</p> <h5>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input name="nama" type="text" class="validate" >
            <label for="username" class="center-align">Nama <i>*</i></label>
          </div>
        </div>
        <div class="row margin">
        <!--- Data Provinsi, Kab/Kota, Kec. Dari API Raja ongkir-->
			<div class="input-field col s12">
    			<select class="browser-default validate" name="propinsi">
     				 <option value="" disabled selected>Pilih Provinsi</option>
     				 <option value="Jawa Tengah">Jawa Tengah</option>
     				 <option value="Jawa Barat">Jawa Barat</option>

    			</select>
  		</div>
        <div class="row margin">
			<div class="input-field col s12">
    			<select class="browser-default validate" name="kabkot">
     				 <option value="" disabled selected>Pilih Kabupaten / Kota</option>
     				 <option value="Kab. Pekalongan">Kab. Pekalongan</option>
     				 <option value="Kota Pekalongan">Kota Pekalongan</option>
    			</select>
  		</div>
  		 <div class="row margin">
			<div class="input-field col s12">
    			<select class="browser-default validate" name="kec">
     				 <option value="" disabled selected>Pilih Kecamatan</option>
     				 <option value="Kajen">Kajen</option>
     				 <option value="Bojong">Bojong</option>
    			</select>
  		</div></br>
         <div class="row margin">
          <div class="input-field col s12">
           <textarea name="almt" id="textarea1" class="materialize-textarea"></textarea>
            <label>Alamat Lengkap <i>*</i></label>
          </div>
        </div>
          <div class="row margin">
          <div class="input-field col s12">
            <input name="produk" type="text">
            <label>Varian / Warna</label>
        </div>
         </div>
           <div class="row margin">
          <div class="input-field col s12">
            <input name="jumlah" type="text">
            <label>Jumlah</label>
        </div>
         </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input name="nohp" type="text">
            <label>Nomor Hp  <i>*</i></label>
          </div>
        </div>
                <div class="row margin">
          <div class="input-field col s12">
            <input name="wa" type="checkbox" id="wa" Value="Sama" />
      		<label for="wa">Centang ini jika Nomor HP termasuk Whatsapp</label>
          </div>
        </div></br>
        <div class="row margin">
          <div class="input-field col s12">
            <input name="email" type="email" class="validate">
            <label  class="center-align">Email <i>jika ada</i></label>
          </div>
        </div>
		<div class="row margin">
			<div class="input-field col s12">
    			<select class="browser-default validate" name="bank">
     				 <option value="" disabled selected>Pilih Bank Pembayaran <i>*</i></option>
     				 <option value="1">BRI</option>
     				 <option value="2">MANDIRI</option>
      				<option value="3">BCA</option>
      				<option value="3">BNI</option>
    			</select>
  		</div>
         <!-- open hidden -->
      <input name=harga type="hidden" value="75000">
          <!-- data API RAJA ONGKIR Dipilih berdasar JNE REG, JNT -->
      <input name="kurir" type="hidden" value="JNE">
			<input name=ongkir type="hidden" value="21000">
		<!-- close hidden -->
        <div class="row">
          <div class="input-field col s12">

            <button class="btn waves-effect waves-light col s12" id="btn" name="submit" value="1">Submit</button>
          </div>
          <div class="input-field col s12">
          	<p><span color= "red";> ------------ Tanda "*" = Wajib disini ------------</span></p>
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
            <a class="grey-text text-lighten-4 right" href="http://w3lessons.info">Form Regist Test</a>
            </div>
          </div>
  </footer>
</body>

</html>
