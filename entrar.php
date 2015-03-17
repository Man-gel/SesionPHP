    <?php

      $login = $_POST['login'];
      $contrasena = $_POST['contra'];
     
      if ($login == 'root' && $contrasena == 'admin') {
	  echo "<script language='javascript'>window.location='index.php'</script>;";
	  
      } else {
	  echo "<script language='javascript'>window.location='login.php'</script>;";
      }
    ?>
