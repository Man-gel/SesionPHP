  <?php
    session_start();
    $_SESSION['usuario'] = 'root'; 
  ?>
  <!DOCTYPE HTML>
  <html>
      <head>
	<title>Sesiones con PHP</title>
      </head>
      <body>
       <div>
        <form>
	 <center><h2>P&aacute;gina de la sesi&oacute;n</h2></center>
	 <?php
	     if (isset($_SESSION['usuario'])) {
		echo "<br/><br/>";
		echo "<center><h3>BIENVENIDO A SU SESI&Oacute;N</h3><br/>";
		echo "<console>".Root."</console></center>";
		echo "<br/><br/><center><a href='login.php'id='salir'>Cerrar sesi&oacute;n</a></center>";
	     }
	     else {
		echo '<center>Debe iniciar sesi&oacute;n para poder acceder a esta p&aacute;gina</center><br />';
		echo "<center><a href='login.php' id='iniciar'>Iniciar sesi&oacute;n</a></center>";
	     }
	 ?>
        </form>
       </div>
      </body>
  </html>
