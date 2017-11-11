<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo:
Documento: "errorPage.php"  Version:  1.0.
Descripción:
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 21/10/2017 | 04:23:24 AM.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EASY ORDER</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- AGREGANDO BOOTSTRAP -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/bootstrap/css/bootstrap-theme.css">
        
        <script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/jquery.js"></script>
        <script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- AGREGANDO BOOTSTRAP -->

        <!-- AGREGANDO ESTILOS -->
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/app/views/css/sidenav.css">  
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/app/views/css/misestiloslogin.css">  
        <!-- AGREGANDO ESTILOS -->
                       
	<!-- AGREGANDO ESTILOS ALERTIFY -->
	<link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/alertifyjs/css/alertify.min.css">
	<link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/alertifyjs/css/themes/bootstrap.min.css">
	<!-- AGREGANDO ESTILOS ALERTIFY -->   
        <!-- AGREGANDO FUNCIONES ALERTIFYJS -->
	<script src="/Easy_Order_Dev_ARC/lib/alertifyjs/alertify.min.js"></script>
	<!-- AGREGANDO FUNCIONES ALERTIFYJS -->    
    
</head>
<body>        
    
    
    <div class="container">
        <div class="card card-container">
            <span></span>
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="/Easy_Order_Dev_ARC/app/views/img/EOlogoSupB.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action=" <?= $superController->setControllerLog("Inicio", "Sesion") ?>" method="POST">
                <span id="reauth-email" class="reauth-email"></span>                
                <?php if($userIncorrect == "false"){
                    echo "EL USUARIO O CONTRASEÑA SON INCORRECTOS!";
                }?>
                <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" id="inputPass" name="inputPass" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <input type="hidden" value="login" name="peticion">
                <button class="btn btn-lg btn-danger btn-block btn-signin" type="submit">Login</button>
            </form>
            <!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div>
        <!-- /card-container -->
    </div>
    <!-- /container -->
    </body>
</html>
