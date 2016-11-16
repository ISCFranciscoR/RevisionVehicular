<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Revisión Física Vehicular - Inicio de sesión</title>

    <!--Mis estilos-->
    <link href="css/login.css" rel="stylesheet" >
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<!--Bootstrap-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<!--Bootstrap-->

	<script type="text/javascript" src="js/olvide_contrasena.js"></script>

	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="pr-wrap">
	                <div class="pass-reset">
	                    <label>
	                        Ingresa tu usuario para iniciar sesión</label>
	                    <input type="email" placeholder="Correo electrónico" />
	                    <input type="submit" value="Enviar" class="pass-reset-submit btn btn-success btn-sm" />
	                </div>
	            </div>
	            <div class="wrap">
	                <p class="form-title">Iniciar sesión</p>
	                <form class="login" action="<?=base_url();?>login_controller/validarAcceso" method="post">
		                <input type="text" placeholder="RFC" name="txtRFC"/>
		                <input type="password" placeholder="Contraseña" name="txtPass"/>
		                <input type="submit" value="Iniciar sesión" class="btn btn-success btn-sm" />
		                <div class="remember-forgot">
		                    <div class="row">
		                        <div class="col-md-6">
		                            <div class="checkbox">
		                                <label>
		                                    <input type="checkbox" />
		                                    Recordar contraseña
		                                </label>
		                            </div>
		                        </div>
		                        <div class="col-md-6 forgot-pass-content">
		                            <a href="javascript:void(0)" class="forgot-pass">Olvidé mi contraseña</a>
		                        </div>
		                    </div>
		                </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>