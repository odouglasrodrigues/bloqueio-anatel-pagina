<?php
  $empresa = "Delta Corporate";
  $site="http://www.deltacorporate.com.br";
  $dominio =  $_SERVER['SERVER_NAME'];
  $https =  $_SERVER['HTTPS'];
  if ($https == "on")
  {
    $url = "https://$dominio";
  }
  else 
  {
    $url = "http://$dominio";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $empresa; ?> - Prote&ccedil;&atilde;o</title>

  <link href="<?php echo $url; ?>/estilos.css" media="all" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="<?php echo $url; ?>/icon.png" type="image/x-icon">
  <link rel="icon" href="<?php echo $url; ?>/icon.png" type="image/x-icon">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <style type="text/css">
    @media screen and (max-width: 500px) {
      .cel {display:none; }
    }
  </style>
</head>

<body>
  <div class="page-container page-container-responsive">
    <div class="row space-top-8 space-8 row-table">
        <div class="col-5 col-middle">
          <h1 style="color: #1d1d1d">.</h1>
          <h2 style="color: #1d1d1d">.</h2>
          <h1 style="font-size: 110px; font-weight: bold;">Oops!</h1>
          <h3>Este site foi bloqueado por determinação judicial!</h3>
          <h4 style="color: #E53935;"><?php echo "$dominio"; ?></h4>
          <ul class="list-unstyled">
            <li>Ofício enviado pela <b>ANATEL</b> a todos os provedores regulamentados.</li>
            <div style="height: 15px;"></div>
            <li></li>
	    <li style="text-align: center;"><a href="<?php echo $site; ?>"></a></li>
          </ul>
        </div>
        <div class="col-5 col-middle text-center cel">
          <img src="<?php echo $url; ?>/ops.png" alt="Este site é considerado impróprio para a família!">
        </div>
      </div>
    </div>
  </div>

  <div align="center" style="margin-top: 30px; font-size: 13px;">
    © <?php echo "$empresa - "; echo date("Y"); ?>  - Todos os Direitos Reservados.
  </div>
</body>
</html>
