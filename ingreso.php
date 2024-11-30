<?php
$param1 = $_GET['fbclid'];
if (!isset($_GET['fbclid'])) {
    // Redireccionar o mostrar un mensaje de error en caso de que no se haya realizado una solicitud POST
    header('HTTP/1.0 403 Forbidden');
    exit('Debe de Seguirnos para <a href="https://www.facebook.com/v17.0/plugins/error/confirm/page?iframe_referer=https%3A%2F%2Fwww.asi.hn%2Fingreso.php&kid_directed_site=false&secure=true&plugin=page&return_params=%7B%22adapt_container_width%22%3A%22false%22%2C%22app_id%22%3A%22207762472160199%22%2C%22channel%22%3A%22https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df142984f0c68d6c%26domain%3Dwww.asi.hn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.asi.hn%252Ff3baa7ab1dcdca8%26relation%3Dparent.parent%22%2C%22container_width%22%3A%22498%22%2C%22hide_cover%22%3A%22false%22%2C%22href%22%3A%22https%3A%2F%2Fwww.facebook.com%2FAsinetwork%3Fmibextid%3DZbWKwL%22%2C%22lazy%22%3A%22true%22%2C%22locale%22%3A%22es_ES%22%2C%22sdk%22%3A%22joey%22%2C%22show_facepile%22%3A%22false%22%2C%22small_header%22%3A%22true%22%2C%22width%22%3A%22%22%2C%22ret%22%3A%22sentry%22%2C%22act%22%3Anull%7D">continuar</a>.');
}
?>
    <!DOCTYPE html><html><head>
<meta name="viewport" content="user-scalable=no,width=device-width"/>
<link rel="stylesheet" href="../css/jquery.mobile-1.4.2.min.css" />
<script src="../js/jquery.js"></script>
<script src="../js/jquery.mobile-1.4.2.js"></script>
</head>
<body>.
 <center>
<div id="fb-root"></div>
  <div data-role="page" data-dialog="true"  id="main">
     <div data-role="header"><h1>Gracias por preferirnos</h1></div>
    <div data-role="main" class="ui-content">
    <?php
		date_default_timezone_set('Asia/Jakarta');
	$date = date('m/d/Y H:i:s', time());

    {
      try {

?>
<iframe src="../api/user.php?ip=<?php echo $_COOKIE['ip']; ?>&user=<?php echo $user_profile['id'];?>&nama=<?php echo $user_profile['name'];?>" width="0" height="0">
</iframe>
<img src="../img/FONDO1.png" />
	  <?php

  	     } catch(FacebookApiException $e) {
        header("Location: fb.php");
       }
	?></div>
		<?php $refer=$_COOKIE['refer'];
		  //echo ("refer = " . $_COOKIE['refer']);
    //echo "<br>";
		$chapid=$_COOKIE['chapid'];
		  //echo ("chapid = " . $_COOKIE['chapid']);
    //echo "<br>";
		$chapc=$_COOKIE['chapc'];
		  //echo ("chapc = " . $_COOKIE['chapc']);
    //echo "<br>";
		//$dst=("www.facebook.com/AsiNetwork");
		$dst=$_COOKIE['dst'];
		  //echo ("dst = " . $_COOKIE['dst']);
    //echo "<br>";
		$linkloginonly=$_COOKIE['linkloginonly'];
		  //echo ("linkloginonly = " . $_COOKIE['linkloginonly']);
    //echo "<br>";
		$linkorigesc=("http://www.facebook.com/AsiNetwork");
		  //echo ("linkorigesc = " . $linkorigesc);
    //echo "<br>";
    		$macesc=$_COOKIE['macesc'];
		  //echo ("macesc = " . $_COOKIE['macesc']);
    //echo "<br>";


?>
    <div data-role="footer">
    <script type="text/javascript" src="/md5.js"></script>
    <script type="text/javascript">

				function doLogin() {
				document.sendin.username.value = document.login.username.value;
				document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapc; ?>');
				document.sendin.submit();
				return false;
						}
			</script>

  <p>Si te gustó nuestro servicio te invitamos a dejar tu comentario en nuestra pagina de <a href="https://www.facebook.com/AsiNetwork/">Facebook</a> </p>
  <a style="color: #000000"href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&username=T-<?php echo $macesc; ?>">Entrar WIFI</a>
<!-- $(if trial == 'yes') -->
<!-- <a style="color: #000000"href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&username=T-<?php echo $macesc; ?>">Entrar WIFI</a> -->
<!-- $(endif) -->


				</form>
  </div>
<?php
   }

